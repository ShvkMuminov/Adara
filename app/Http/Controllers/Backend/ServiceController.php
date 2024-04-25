<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ServiceController extends Controller
{

    public function serviceView(){
        $services = Client::get();
        return view('backend.service.service_view', compact('services'));
    }

    public function serviceAdd(){
        return view('backend.service.service_add');
    }

    public function serviceStore(Request $request){
        $request->validate(
            [

                'fullname' => 'required',
                'email' => 'required',
                'password' => 'required',
            ],
            [

                'fullname.required' => 'Input fullname',
                'email.required' => 'Input email',
                'password.required' => 'Input assword',
            ]
        );


       Client::create([

            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => $request->password,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added succsesfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.service')->with($notification);
    }

    public function serviceEdit($id){
        $service = Client::where('id', $id)->first();
        return view('backend.service.service_edit', compact('service'));
    }

    public function serviceUpdate(Request $request, $id){
        $request->validate(
            [
                'fullname' => 'required',
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'fullname.required' => 'Input fullname',
                'email.required' => 'Input email',
                'passwors.required' => 'Input assword',
            ]
        );
        $service = Client::where('id', $id)->first();

        $service->update([

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);


        $notification = array(
            'message' => 'Услуга успешно изменена!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.service')->with($notification);
    }

    public function serviceDelete($id){
        $service = Client::where('id', $id)->first();
        unlink($service->image);
        $service->delete();

        $notification = array(
            'message' => 'Услуга успешно удалено!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function regsterNews(Request $request){
        $client = Client::where('email' , $request->email)->first();
        if($client  && strlen( $request->password) == 0 ){
        }else{
            Client::create([
                'fullname' =>  $request->fullname,
                'email' =>  $request->email,
                'password' =>  $request->password,

              ]);
        }

        return redirect()->back();
    }




}




