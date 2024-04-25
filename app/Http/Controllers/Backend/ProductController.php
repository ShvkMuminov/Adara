<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function productView(){
        $products = Product::get();
        return view('backend.product.product_view', compact('products'));
    }

    public function productAdd(){
        return view('backend.product.product_add');
    }

    public function productStore(Request $request){
        $request->validate(
            [
                'category_id' => 'required',
                'image' => 'required',
                'name' => 'required',
                'about' => 'required',
                'description' => 'required',
                'price' => 'required',
                'discount' => 'required',
                'caunt' => 'required',
                'type' => 'required',
                'sizeable' => 'required'
            ],
            [
                'image.required' => 'Upload image ',
                'name.required' => 'Input name',
                'abaut.required' => 'Input about',
                'description.required' => 'Input description',
                'price.required' => 'Input description',
                'discount.required' => 'Input discaunt',
                'caunt.required' => 'Input caunt',
                'type.required' => 'Input type',
                'sizeable.required' => 'Input sizeable',
            ]
        );

        $image = $request->file('image');

        $image_name = Str::random(20);
        $ext = strtolower($image->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = 'upload/product/image/';    //Creating Sub directory in Public folder to put image
        $save_url_image = $upload_path . $image_full_name;
        $success = $image->move($upload_path, $image_full_name);

        Product::create([
            'category_id' => $request->category_id,
            'image' => $save_url_image,
            'name' => $request->name,
            'about' => $request->about,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'caunt' => $request->caunt,
            'type' => $request->type,
            'sizeable' => $request->sizeable,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added succsesfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.product')->with($notification);
    }

    public function productEdit($id){
        $products = Product::where('id' , $id)->with('reviews')->first();
        return view('backend.product.product_edit', compact('products'));
    }

    public function productUpdate(Request $request, $id){
        $request->validate(
            [
                'category_id' => 'required',
                'image' => 'required',
                'name' => 'required',
                'about' => 'required',
                'description' => 'required',
                'price' => 'required',
                'discount' => 'required',
                'caunt' => 'required',
                'type' => 'required',
                'sizeable' => 'required',
            ],
            [
                'image.required' => 'Upload image ',
                'name.required' => 'Input name',
                'abaut.required' => 'Input about',
                'description.required' => 'Input description',
                'price.required' => 'Input description',
                'discount.required' => 'Input discaunt',
                'caunt.required' => 'Input caunt',
                'type.required' => 'Input type',
                'sizeable.required' => 'Input sizeable',
            ]
        );
        $products = Product::where('id', $id)->first();
        $image = $request->file('image');
        if ($image){
            // unlink($products->image);
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/product/image/';    //Creating Sub directory in Public folder to put image
            $save_url_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
        }else{
            $save_url_image = $products->image;
        }

        $products->update([
            'category_id' => $request->category_id,
            'image' => $save_url_image,
            'name' => $request->name,
            'about' => $request->about,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'caunt' => $request->caunt,
            'type' => $request->type,
            'sizeable' => $request->sizeable,
        ]);


        $notification = array(
            'message' => 'Update succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product')->with($notification);
    }

    public function productDelete($id){
        $products = Product::where('id', $id)->first();
        unlink($products->image);
        $products->delete();

        $notification = array(
            'message' => 'Delete succssesfully product!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    // public function shuffleProducts(){
    //     $product = Product::shuffle()->get();
    // }
}
