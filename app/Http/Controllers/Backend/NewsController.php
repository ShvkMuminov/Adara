<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{

    public function newsView(){
        $news = Category::get();
        return view('backend.news.news_view', compact('news'));
    }

    public function newsAdd(){
        return view('backend.news.news_add');
    }

    public function newsStore(Request $request){
        $request->validate(
            [
                'image' => 'required',
                'parent_id' => 'required',
                'name' => 'required'

            ],
            [
                'image.required' => 'Upload image',
                'parent_id.required' => 'Input Parent_id',
                'name.required' => 'Input name'
            ]
        );

        $image = $request->file('image');

        $image_name = Str::random(20);
        $ext = strtolower($image->getClientOriginalExtension()); // You can use also getClientOriginalName()
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = 'upload/news/image/';    //Creating Sub directory in Public folder to put image
        $save_url_image = $upload_path . $image_full_name;
        $success = $image->move($upload_path, $image_full_name);

        Category::create([
            'image' => $save_url_image,
            'parent_id' => $request->parent_id,
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Added succsessfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.news')->with($notification);
    }

    public function newsEdit($id){
        $news = Category::where('id', $id)->first();
        return view('backend.news.news_edit', compact('news'));
    }

    public function newsUpdate(Request $request, $id){
        $request->validate(
            [
                'image' => 'required',
                'parent_id' => 'required',
                'name' => 'required'
            ],
            [
                'image.required' => 'Upload image',
                'parent_id.required' => 'Input Parent_id',
                'name.required' => 'Input name'
            ]
        );
        $news = Category::where('id', $id)->first();
        $image = $request->file('image');
        if ($image){
            unlink($news->image);
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension()); // You can use also getClientOriginalName()
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/news/image/';    //Creating Sub directory in Public folder to put image
            $save_url_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
        }else{
            $save_url_image = $news->image;
        }

        $news->update([
            'image' => $save_url_image,
            'parent_id' => $request->parent_id,
            'name' => $request->name,
        ]);


        $notification = array(
            'message' => 'Added succsessfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.news')->with($notification);
    }

    public function newsDelete($id){
        $news = Category::where('id', $id)->first();
        unlink($news->image);
        $news->delete();

        $notification = array(
            'message' => 'Новости успешно удалено!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
