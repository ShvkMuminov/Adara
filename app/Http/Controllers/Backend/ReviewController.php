<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReviewController extends Controller
{

    public function reviewView(){
        $reviews = Review::get();
        return view('backend.review.review_view', compact('reviews'));
    }

    public function reviewAdd(){
        return view('backend.review.review_add');
    }

    public function reviewStore(Request $request){
        $request->validate(
            [
             'product_id' => 'required',
             'client_id' => 'required',
                'rating' => 'required',
                'comment' => 'required',
            ],
            [
                'product_id.required' => 'Input product id',
                'client_id.required' => 'Input client id',
                'rating.required' => 'Input rating',
                'comment.required' => 'Input comment',
            ]
        );



        Review::create([
         'product_id' => $request->product_id,
         'client_id' => $request->client_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added succsesfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.review')->with($notification);
    }

    public function reviewEdit($id){
        $reviews = Review::where('id', $id)->first();
        return view('backend.review.review_edit', compact('reviews'));
    }

    public function reviewUpdate(Request $request, $id){
        $request->validate(
            [
                'product_id' => 'required',
                'client_id' => 'required',
                   'rating' => 'required',
                   'comment' => 'required',
            ],
            [
                'product_id.required' => 'Input product id',
                'client_id.required' => 'Input client id',
                'rating.required' => 'Input rating',
                'comment.required' => 'Input comment',
            ]
        );
        $reviews = Review::where('id', $id)->first();


        $reviews->update([
            'product_id' => $request->product_id,
            'client_id' => $request->client_id,
               'rating' => $request->rating,
               'comment' => $request->comment,

        ]);


        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.review')->with($notification);
    }

    public function reviewDelete($id){
        $reviews = Review::where('id', $id)->first();
        unlink($reviews->image);
        $reviews->delete();

        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

