<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OfferController extends Controller
{
    public function offerView(){
        $offers = Offer::get();
        return view('backend.offer.offer_view', compact('offers'));
    }

    public function offerAdd(){
        return view('backend.offer.offer_add');
    }

    public function offerStore(Request $request){
        $request->validate(
            [
               'first_bg_image' => 'required',
               'second_bg_image' => 'required',
                'first_title' => 'required',
                'second_title' => 'required',
                'content' => 'required',
                'image' => 'required'
            ],
            [
                'first_bg_image.required' => 'Upload first_bg_image',
                'second_bg_image.required' => 'Upload second_bg_image',
                'first_title.required' => 'Input first title',
                'second_title.required' => 'Input second title',
                'content.required' => 'Input content',
                'image.required' => 'Upload image'
            ]
        );
        $first_bg_image = $request->file('first_bg_image');

        $first_bg_image_name = Str::random(20);
        $ext = strtolower($first_bg_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $first_bg_image_full_name = $first_bg_image_name . '.' . $ext;
        $upload_path = 'upload/offer/first_bg_image/';    //Creating Sub directory in Public folder to put image
        $save_url_first_bg_image = $upload_path . $first_bg_image_full_name;
        $success = $first_bg_image->move($upload_path, $first_bg_image_full_name);
        //end first bg image
//second bg image
$second_bg_image = $request->file('second_bg_image');

        $second_bg_image_name = Str::random(20);
        $ext = strtolower($second_bg_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $second_bg_image_full_name = $second_bg_image_name . '.' . $ext;
        $upload_path = 'upload/offer/second_bg_image/';    //Creating Sub directory in Public folder to put image
        $save_url_second_bg_image = $upload_path . $second_bg_image_full_name;
        $success = $second_bg_image->move($upload_path, $second_bg_image_full_name);
       //end second image
//image
        $image = $request->file('image');

        $image_name = Str::random(20);
        $ext = strtolower($image->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = 'upload/offer/image/';    //Creating Sub directory in Public folder to put image
        $save_url_image = $upload_path . $image_full_name;
        $success = $image->move($upload_path, $image_full_name);

        Offer::create([
             'first_bg_image' => $save_url_first_bg_image,
             'second_bg_image' => $save_url_second_bg_image,
            'first_title' => $request->first_title,
            'second_title' => $request->second_title,
            'content' => $request->content,
            'image' => $save_url_image,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added  successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.offer')->with($notification);
    }

    public function offerEdit($id){
        $offers = Offer::where('id', $id)->first();
        return view('backend.offer.offer_edit', compact('offers'));
    }

    public function offerUpdate(Request $request, $id){
        $request->validate(
            [
                'first_bg_image' => 'required',
                'second_bg_image' => 'required',
                 'first_title' => 'required',
                 'second_title' => 'required',
                 'content' => 'required',
                 'image' => 'required'
            ],
            [
                'first_bg_image.required' => 'Upload first_bg_image',
                'second_bg_image.required' => 'Upload second_bg_image',
                'first_title.required' => 'Input first title',
                'second_title.required' => 'Input second title',
                'content.required' => 'Input content',
                'image.required' => 'Upload image'
            ]
        );
        //first bg image
        $offers = Offer::where('id', $id)->first();
        $first_bg_image = $request->file('first_bg_image');
        if ($first_bg_image){
            $first_bg_image_name = Str::random(20);
            $ext = strtolower($first_bg_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $first_bg_image_full_name = $first_bg_image_name . '.' . $ext;
            $upload_path = 'upload/offer/first_bg_image/';    //Creating Sub directory in Public folder to put image
            $save_url_first_bg_image = $upload_path . $first_bg_image_full_name;
            $success = $first_bg_image->move($upload_path, $first_bg_image_full_name);
        }else{
            $save_url_first_bg_image = $offers->first_bg_image;
        }
        //end first image
        // second bg  image
        $offers = Offer::where('id', $id)->first();
        $second_bg_image = $request->file('second_bg_image');
        if ($second_bg_image){
            $second_bg_image_name = Str::random(20);
            $ext = strtolower($second_bg_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $second_bg_image_full_name = $second_bg_image_name . '.' . $ext;
            $upload_path = 'upload/offer/second_bg_image/';    //Creating Sub directory in Public folder to put image
            $save_url_second_bg_image = $upload_path . $second_bg_image_full_name;
            $success = $second_bg_image->move($upload_path, $second_bg_image_full_name);
        }else{
            $save_url_second_bg_image = $offers->second_bg_image;
        }
        //end second bg image
        $offers = Offer::where('id', $id)->first();
        $image = $request->file('image');
        if ($image){
            // unlink($offers->image);
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/offer/image/';    //Creating Sub directory in Public folder to put image
            $save_url_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
        }else{
            $save_url_image = $offers->image;
        }

        $offers->update([
            'first_bg_image' => $save_url_first_bg_image,
            'second_bg_image' => $save_url_second_bg_image,
           'first_title' => $request->first_title,
           'second_title' => $request->second_title,
           'content' => $request->content,
           'image' => $save_url_image
        ]);


        $notification = array(
            'message' => 'Added  successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.offer')->with($notification);
    }

    public function offerDelete($id){
        $offers = Offer::where('id', $id)->first();

        // unlink($offer->image);
        $offers->delete();

        $notification = array(
            'message' => 'Added  successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
