<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductImageController extends Controller
{

    public function product_imageView(){
        $product_images = ProductImage::get();
        return view('backend.product_image.product_image_view', compact('product_images'));
    }

    public function product_imageAdd(){
        return view('backend.product_image.product_image_add');
    }

    public function product_imageStore(Request $request){
        $request->validate(
            [
                'product_id' => 'required',
                'image' => 'required',

            ],
            [
                'product_id.required' => 'Input product id',
                'image.required' => 'Upload image',

            ]
        );

        $image = $request->file('image');

        $image_name = Str::random(20);
        $ext = strtolower($image->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = 'upload/productImage/image/';    //Creating Sub directory in Public folder to put image
        $save_url_image = $upload_path . $image_full_name;
        $success = $image->move($upload_path, $image_full_name);

        ProductImage::create([
            'product_id' => $request->product_id,
            'image' => $save_url_image,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added succsesfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.product_image')->with($notification);
    }

    public function product_imageEdit($id){
        $product_images = ProductImage::where('id', $id)->first();
        return view('backend.product_image.product_image_edit', compact('product_images'));
    }

    public function product_imageUpdate(Request $request, $id){
        $request->validate(
            [
                'product_id' => 'required',
                'image' => 'required',

            ],
            [
                'product_id.required' => 'Input product id',
                'image.required' => 'Upload image',

            ]
        );
        $product_images = ProductImage::where('id', $id)->first();
        $image = $request->file('image');
        if ($image){
            unlink($product_images->image);
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/partner/image/';    //Creating Sub directory in Public folder to put image
            $save_url_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
        }else{
            $save_url_image = $product_images->image;
        }

        $product_images->update([
            'product_id' => $request->product_id,
            'image' => $save_url_image,

        ]);


        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product_image')->with($notification);
    }

    public function product_imageDelete($id){
        $product_images= ProductImage::where('id', $id)->first();
        unlink($product_images->image);
        $product_images->delete();

        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
