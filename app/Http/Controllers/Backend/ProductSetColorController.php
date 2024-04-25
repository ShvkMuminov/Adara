<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProducSetColor;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductSetColorController extends Controller
{

    public function product_set_colorView(){
        $product_set_colors = ProducSetColor::get();
        return view('backend.product_set_color.product_set_color_view', compact('product_set_colors'));
    }

    public function product_set_colorAdd(){
        return view('backend.product_set_color.product_set_color_add');
    }

    public function product_set_colorStore(Request $request){
        $request->validate(
            [

                'product_id' => 'required',
                'color_id' => 'required',
            ],
            [
                'product_id.required' => 'Input product id',
                'color_id.required' => 'Input color id',
            ]
        );



        ProducSetColor::create([

            'product_id' => $request->product_id,
            'color_id' => $request->color_id,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added succsesfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.product_set_color')->with($notification);
    }

    public function product_set_colorEdit($id){
        $product_set_colors = ProducSetColor::where('id', $id)->first();
        return view('backend.product_set_color.product_set_color_edit', compact('product_set_colors'));
    }

    public function product_set_colorUpdate(Request $request, $id){
        $request->validate(
            [

                   'product_id' => 'required',
                   'color_id' => 'required',
            ],
            [
                'product_id.required' => 'Input product id',
                'color_id.required' => 'Input color id',
            ]
        );
        $product_set_colors = ProducSetColor::where('id', $id)->first();


        $product_set_colors->update([

               'product_id' => $request->product_id,
               'color_id' => $request->color_id,

        ]);


        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product_set_color')->with($notification);
    }

    public function product_set_colorDelete($id){
        $product_set_colors = ProducSetColor::where('id', $id)->first();
        unlink($product_set_colors->image);
        $product_set_colors->delete();

        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
