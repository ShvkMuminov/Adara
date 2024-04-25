<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
 use App\Models\Category;
 use App\Models\Partner;
 use App\Models\Product;
 use App\Models\Main;
 use App\Models\Client;
 use App\Models\Review;
 use App\Models\Ads;
use App\Models\Order;

class IndexController extends Controller
{
    public function mainPage(){

        $settings = Main::first();
        $offers = Offer::get();

        $products = Product::get();
        $services = Client::get();
         $news = Category::get();
        $partners = Partner::get();
        $reviews = Review::get();
        $ads = Ads::get();

         return view('frontend.main', compact(  'settings', 'offers' ,'products','news','reviews', 'services', 'partners', 'ads'));


    }
public function shopDetailPage($product_id){
    $orders = Order::with('product')->get();
    $products = Product::where('id' , $product_id)->with("category" , "sizes", "images" , "reviews")->first();
    $product = Product::get();
    $product = $product->shuffle()->take(5);

    $settings = Main::first();
    $product_ids = Product::get();
    return view('frontend.shop-details', compact( 'orders', 'products' ,  'product', 'settings' ,  'product_ids'));

}

}
