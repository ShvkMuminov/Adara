<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProductColor;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductColorController extends Controller
{

    public function product_colorView(){
        $product_colors = ProductColor::get();
        return view('backend.product_color.product_color_view', compact('product_colors'));
    }

    public function product_colorAdd(){
        return view('backend.product_color.product_color_add');
    }

    public function product_colorStore(Request $request){
        $request->validate(
            [

                'color' => 'required',
            ],
            [

                'color.required' => 'Input color',
            ]
        );



        ProductColor::create([

            'color' => $request->color,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added succsesfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.product_color')->with($notification);
    }

    public function product_colorEdit($id){
        $product_colors = ProductColor::where('id', $id)->first();
        return view('backend.product_color.product_color_edit', compact('product_colors'));
    }

    public function product_colorUpdate(Request $request, $id){
        $request->validate(
            [

                   'color' => 'required',
            ],
            [

                'color.required' => 'Input color',
            ]
        );
        $product_colors = ProductColor::where('id', $id)->first();


        $product_colors->update([

               'color' => $request->color,

        ]);


        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product_color')->with($notification);
    }

    public function product_colorDelete($id){
        $product_colors = ProductColor::where('id', $id)->first();
        // unlink($product_colors->image);
        $product_colors->delete();

        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
