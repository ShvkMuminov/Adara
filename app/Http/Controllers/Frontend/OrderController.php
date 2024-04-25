<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
   public function addOrder(Request $request){
     $order = Order::create([
        
        'product_id' => $request->product_id,
        'size_id' => $request->sizes,
        'color_id' => $request->color_id,
        'count' => $request->count,
     ]);
     return redirect()->back();
   }
}
