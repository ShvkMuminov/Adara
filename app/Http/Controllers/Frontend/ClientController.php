<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Review;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
     public function addClientRating( $product_id ,  Request $request){
        $client = Client::where('email' , $request->email)->first();
        if($client){
            $client->update([
                'fullname' => $request->fullname,
                'email' =>  $request->email,
                'password' => strlen($request->password) > 0  ? $request->password : null,

              ]);
              Review::create([
                            'comment' => $request->comment,
                            'rating' => $request->rating,
                            'product_id' => $product_id,
                            'client_id' => $client->id,
              ]);
        }else{

           $client  =  Client::create([
                'fullname' => $request->fullname,
                'email' =>  $request->email,
                'password' => strlen($request->password) > 0  ? $request->password : null,

              ]);
          Review::create([

                        'comment' => $request->comment,
                        'rating' => $request->rating,
                        'product_id' => $product_id,
                        'client_id' => $client->id,

              ]);
            }


        return redirect()->back();
    }

    public function loginView(){
        return view('frontend.login');
    }

    public function registerClient(Request $request){
         $client = Client::where('email' , $request->email)->first();
         if($client  && strlen( $request->password) == 0 ){
            $client->update([
                'fullname' => $request->fullname,
                'email' =>  $request->email,
                'password' => strlen($request->password) > 0  ? $request->password : null,

              ]);
              Session::put('client' , $client);
return redirect()->route('main.page');
        }else if(!$client ){
             $client = Client::create([
                'fullname' => $request->fullname,
                'email' =>  $request->email,
                'password' => strlen($request->password) > 0  ? $request->password : null,

              ]);
              Session::put('client' , $client);
              return redirect()->route('main.page');
        }else{
            $notification = array(
            'message' => 'Please login if you have already registered!',
            'alert-type' => 'success', 
        );

        return redirect()->route('client.login')->with($notification);

        }

    }
}
