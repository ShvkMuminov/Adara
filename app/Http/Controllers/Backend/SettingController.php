<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Main;
use App\Models\Client;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function settingView(){
        $settings = Main::first();
        return view('backend.setting.setting_view', compact('settings'));
    }

    public function settingStore(Request $request){
        $request->validate(
            [
                'site_logo' => 'required',
                'site_title' => 'required',
                'site_about' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'address' => 'required',
                'left_image' => 'required',
                'top_left_image' => 'required',
                'top_right_image' => 'required',
                'bottom_image' => 'required',
                'full_bg_image' => 'required',
                'stock_name' => 'required',
                'stock_category_id' => 'required',


            ],
            [
                'site_logo.required' => 'Upload site logo ',
                'site_title.required' => 'Input site title',
                'site_about.required' => 'Input site about',
                'phone.required' => 'Input phone',
                'email.required' => 'Input email',
                'address.required' => 'Input address',
                'left_image.required' => 'Upload left image',
                'top_left_image.required' => 'Upload top left ',
                'top_right_image.required' => 'Upload top right ',
                'bottom_image.required' => 'Upload top bottom ',
                'full_bg_image.required' => 'Upload top bottom ',
                'stock_name.required' => 'Input stock_name',
                'stock_category_id.required' => 'Input stock_name',


            ]
        );
//site logo
        $site_logo = $request->file('site_logo');

        $site_logo_name = Str::random(20);
        $ext = strtolower($site_logo->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $site_logo_full_name = $site_logo_name . '.' . $ext;
        $upload_path = 'upload/brand/site_logo/';    //Creating Sub directory in Public folder to put logo
        $save_url_site_logo = $upload_path . $site_logo_full_name;
        $success = $site_logo->move($upload_path, $site_logo_full_name);
        //and logo
//left start
        $left_image = $request->file('left_image');

        $left_image_name = Str::random(20);
        $ext = strtolower($left_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $left_image_full_name = $left_image_name . '.' . $ext;
        $upload_path = 'upload/brand/left_image/';    //Creating Sub directory in Public folder to put logo
        $save_url_left_image = $upload_path . $left_image_full_name;
        $success = $left_image->move($upload_path, $left_image_full_name);
        //end left image
//top left start
        $top_left_image = $request->file('top_left_image');

        $top_left_image_name = Str::random(20);
        $ext = strtolower($top_left_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $top_left_image_full_name = $top_left_image_name . '.' . $ext;
        $upload_path = 'upload/brand/top_left_image/';    //Creating Sub directory in Public folder to put logo
        $save_url_top_left_image = $upload_path . $top_left_image_full_name;
        $success = $top_left_image->move($upload_path, $top_left_image_full_name);
        //end top left
//top right start
$top_right_image = $request->file('top_right_image');

$top_right_image_name = Str::random(20);
$ext = strtolower($top_right_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
$top_right_image_full_name = $top_right_image_name . '.' . $ext;
$upload_path = 'upload/brand/top_right_image/';    //Creating Sub directory in Public folder to put logo
$save_url_top_right_image = $upload_path . $top_right_image_full_name;
$success = $top_right_image->move($upload_path, $top_right_image_full_name);
//end top right
//start bottom image
$bottom_image = $request->file('bottom_image');

$bottom_image_name = Str::random(20);
$ext = strtolower($bottom_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
$bottom_image_full_name = $bottom_image_name . '.' . $ext;
$upload_path = 'upload/brand/bottom_image/';    //Creating Sub directory in Public folder to put logo
$save_url_bottom_image = $upload_path . $bottom_image_full_name;
$success = $bottom_image->move($upload_path, $bottom_image_full_name);
//end bottom image
// full_bg_image start
$full_bg_image = $request->file('full_bg_image');

$full_bg_image_name = Str::random(20);
$ext = strtolower($full_bg_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
$full_bg_image_full_name = $full_bg_image_name . '.' . $ext;
$upload_path = 'upload/brand/full_bg_image/';    //Creating Sub directory in Public folder to put logo
$save_url_full_bg_image = $upload_path . $full_bg_image_full_name;
$success = $full_bg_image->move($upload_path, $full_bg_image_full_name);
// end full_bg_image
        Main::create([
            'site_logo' => $save_url_site_logo,
            'site_title' => $request->site_title,
            'site_about' => $request->site_about,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'left_image' => $save_url_left_image,
            'top_left_image' => $save_url_top_left_image,
            'top_right_image' => $save_url_top_right_image,
            'bottom_image' => $save_url_bottom_image,
            'full_bg_image' => $save_url_full_bg_image,
            'stock_name' => $request->stock_name,
            'stock_category_id' => $request->stock_category_id,

            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added  successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function settingEdit($id){
        $settings = Main::where('id', $id)->first();
        return view('backend.setting.setting_edit', compact('settings'));
    }

    public function settingUpdate(Request $request, $id){
        $request->validate(
            [

                'site_logo' => 'required',
                'site_title' => 'required',
                'site_about' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'address' => 'required',
                'left_image' => 'required',
                'top_left_image' => 'required',
                'top_right_image' => 'required',
                'bottom_image' => 'required',
                'full_bg_image' => 'required',
                'stock_name' => 'required',
                'stock_category_id' => 'required',

            ],
            [


                'site_logo.required' => 'Upload site logo ',
                'site_title.required' => 'Input site title',
                'site_about.required' => 'Input site about',
                'phone.required' => 'Input phone',
                'email.required' => 'Input email',
                'address.required' => 'Input address',
                'left_image.required' => 'Upload left image',
                'top_left_image.required' => 'Upload top left ',
                'top_right_image.required' => 'Upload top right ',
                'bottom_image.required' => 'Upload top bottom ',
                'full_bg_image.required' => 'Upload top bottom ',
                'stock_name.required' => 'Input stock_name',
                'stock_category_id.required' => 'Input stock_name',



            ]
        );
        $settings = Main::where('id', $id)->first();
        $site_logo = $request->file('site_logo');
        if ($site_logo){

        $site_logo_name = Str::random(20);
        $ext = strtolower($site_logo->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $site_logo_full_name = $site_logo_name . '.' . $ext;
        $upload_path = 'upload/brand/site_logo/';    //Creating Sub directory in Public folder to put logo
        $save_url_site_logo = $upload_path . $site_logo_full_name;
        $success = $site_logo->move($upload_path, $site_logo_full_name);
        }else{
            $save_url_site_logo = $settings->site_logo;
        }
        //left image
        $settings = Main::where('id', $id)->first();
        $left_image = $request->file('left_image');
        if ($left_image){
            $left_image_name = Str::random(20);
            $ext = strtolower($left_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $left_image_full_name = $left_image_name . '.' . $ext;
            $upload_path = 'upload/brand/left_image/';    //Creating Sub directory in Public folder to put logo
            $save_url_left_image = $upload_path . $left_image_full_name;
            $success = $left_image->move($upload_path, $left_image_full_name);

        }else{
            $save_url_left_image = $settings->left_image;
        }
        //top left image
        $settings = Main::where('id', $id)->first();
        $top_left_image = $request->file('top_left_image');
        if ($top_left_image){
            $top_left_image_name = Str::random(20);
            $ext = strtolower($top_left_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $top_left_image_full_name = $top_left_image_name . '.' . $ext;
            $upload_path = 'upload/brand/top_left_image/';    //Creating Sub directory in Public folder to put logo
            $save_url_top_left_image = $upload_path . $top_left_image_full_name;
            $success = $top_left_image->move($upload_path, $top_left_image_full_name);

        }else{
            $save_url_top_left_image = $settings->top_left_image;
        }
        // top right
        $settings = Main::where('id', $id)->first();
        $top_right_image = $request->file('top_right_image');
        if ($top_right_image){

            $top_right_image_name = Str::random(20);
            $ext = strtolower($top_right_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $top_right_image_full_name = $top_right_image_name . '.' . $ext;
            $upload_path = 'upload/brand/top_right_image/';    //Creating Sub directory in Public folder to put logo
            $save_url_top_right_image = $upload_path . $top_right_image_full_name;
            $success = $top_right_image->move($upload_path, $top_right_image_full_name);
        }else{
            $save_url_top_right_image = $settings->top_right_image;
        }
        //bottom image
        $settings = Main::where('id', $id)->first();
        $bottom_image = $request->file('bottom_image');
        if ($bottom_image){
            $bottom_image_name = Str::random(20);
            $ext = strtolower($bottom_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $bottom_image_full_name = $bottom_image_name . '.' . $ext;
            $upload_path = 'upload/brand/bottom_image/';    //Creating Sub directory in Public folder to put logo
            $save_url_bottom_image = $upload_path . $bottom_image_full_name;
            $success = $bottom_image->move($upload_path, $bottom_image_full_name);

        }else{
            $save_url_bottom_image = $settings->bottom_image;
        }
        //full bg images
        $settings = Main::where('id', $id)->first();
        $full_bg_image = $request->file('full_bg_image');
        if ($full_bg_image){

            $full_bg_image_name = Str::random(20);
            $ext = strtolower($full_bg_image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $full_bg_image_full_name = $full_bg_image_name . '.' . $ext;
            $upload_path = 'upload/brand/full_bg_image/';    //Creating Sub directory in Public folder to put logo
            $save_url_full_bg_image = $upload_path . $full_bg_image_full_name;
            $success = $full_bg_image->move($upload_path, $full_bg_image_full_name);
        }else{
            $save_url_full_bg_image = $settings->full_bg_image;
        }


        $settings->update([
            'site_logo' => $save_url_site_logo,
            'site_title' => $request->site_title,
            'site_about' => $request->site_about,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'left_image' => $save_url_left_image,
            'top_left_image' => $save_url_top_left_image,
            'top_right_image' => $save_url_top_right_image,
            'bottom_image' => $save_url_bottom_image,
            'full_bg_image' => $save_url_full_bg_image,
            'stock_name' => $request->stock_name,
            'stock_category_id' => $request->stock_category_id,

        ]);


        $notification = array(
            'message' => 'Added successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.setting')->with($notification);
    }
  
}
