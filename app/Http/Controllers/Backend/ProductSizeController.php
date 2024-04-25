<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProductSize;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductSizeController extends Controller
{

    public function product_sizeView(){
        $product_sizes = ProductSize::get();
        return view('backend.product_size.product_size_view', compact('product_sizes'));
    }

    public function product_sizeAdd(){
        return view('backend.product_size.product_size_add');
    }

    public function product_sizeStore(Request $request){
        $request->validate(
            [

                'name' => 'required',
            ],
            [

                'name.required' => 'Input name',
            ]
        );



        ProductSize::create([

            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added succsesfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.product_size')->with($notification);
    }

    public function product_sizeEdit($id){
        $product_sizes = ProductSize::where('id', $id)->first();
        return view('backend.product_size.product_size_edit', compact('product_sizes'));
    }

    public function product_sizeUpdate(Request $request, $id){
        $request->validate(
            [

                   'name' => 'required',
            ],
            [

                'name.required' => 'Input name',
            ]
        );
        $product_sizes = ProductSize::where('id', $id)->first();


        $product_sizes->update([

               'name' => $request->name,

        ]);


        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product_size')->with($notification);
    }

    public function product_sizeDelete($id){
        $product_sizes = ProductSize::where('id', $id)->first();
        // unlink($product_size->image);
        $product_sizes->delete();

        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

