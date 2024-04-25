<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProducSetSize;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductSetSizeController extends Controller
{

    public function product_set_sizeView(){
        $product_set_sizes = ProducSetSize::get();
        return view('backend.product_set_size.product_set_size_view', compact('product_set_sizes'));
    }

    public function product_set_sizeAdd(){
        return view('backend.product_set_size.product_set_size_add');
    }

    public function product_set_sizeStore(Request $request){
        $request->validate(
            [

                'product_id' => 'required',
                'size_id' => 'required',
            ],
            [
                'product_id.required' => 'Input product id',
                'size_id.required' => 'Input size id',
            ]
        );



        ProducSetSize::create([

            'product_id' => $request->product_id,
            'size_id' => $request->size_id,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added succsesfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.product_set_size')->with($notification);
    }

    public function product_set_sizeEdit($id){
        $product_set_sizes = ProducSetSize::where('id', $id)->first();
        return view('backend.product_set_size.product_set_size_edit', compact('product_set_sizes'));
    }

    public function product_set_sizeUpdate(Request $request, $id){
        $request->validate(
            [

                   'product_id' => 'required',
                   'size_id' => 'required',
            ],
            [
                'product_id.required' => 'Input product id',
                'size_id.required' => 'Input size id',
            ]
        );
        $product_set_sizes = ProducSetSize::where('id', $id)->first();


        $product_set_sizes->update([

               'product_id' => $request->product_id,
               'size_id' => $request->size_id,

        ]);


        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product_set_size')->with($notification);
    }

    public function product_set_sizeDelete($id){
        $product_set_sizes = ProducSetSize::where('id', $id)->first();
        // unlink($product_set_sizes->image);
        $product_set_sizes->delete();

        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

