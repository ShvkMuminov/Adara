<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdsController extends Controller
{

    public function adsView(){
        $ads = Ads::get();
        return view('backend.ads.ads_view', compact('ads'));
    }

    public function adsAdd(){
        return view('backend.ads.ads_add');
    }

    public function adsStore(Request $request){
        $request->validate(
            [
                'title' => 'required',
                'image' => 'required',
                'text' => 'required',
            ],
            [
                'title.required' => 'Input title',
                'image.required' => 'Upload image',
                'text.required' => 'Input text',
            ]
        );

        $image = $request->file('image');

        $image_name = Str::random(20);
        $ext = strtolower($image->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = 'upload/ads/image/';    //Creating Sub directory in Public folder to put image
        $save_url_image = $upload_path . $image_full_name;
        $success = $image->move($upload_path, $image_full_name);

        Ads::create([
            'title' => $request->title,
            'image' => $save_url_image,
            'text' => $request->text,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added succsesfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.ads')->with($notification);
    }

    public function adsEdit($id){
        $ads = Ads::where('id', $id)->first();
        return view('backend.ads.ads_edit', compact('ads'));
    }

    public function adsUpdate(Request $request, $id){
        $request->validate(
            [
                'title' => 'required',
                'image' => 'required',
                'text' => 'required',
            ],
            [
                'title.required' => 'Input title',
                'image.required' => 'Upload image',
                'text.required' => 'Input text'
            ]
        );
        $ads = Ads::where('id', $id)->first();
        $image = $request->file('image');
        if ($image){
            unlink($ads->image);
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/partner/image/';    //Creating Sub directory in Public folder to put image
            $save_url_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
        }else{
            $save_url_image = $ads->image;
        }

        $ads->update([
            'title' => $request->title,
            'image' => $save_url_image,
            'text' => $request->text,
        ]);


        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.ads')->with($notification);
    }

    public function adsDelete($id){
        $ads = Ads::where('id', $id)->first();
        unlink($ads->image);
        $ads->delete();

        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
