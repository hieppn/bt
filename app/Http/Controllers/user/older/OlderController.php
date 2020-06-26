<?php

namespace App\Http\Controllers\user\older;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use Illuminate\Support\Facades\Auth;

class OlderController extends Controller
{
   function index(){
   	$idu = Auth::user()->id;
   	 $carts=Cart::where('id_user', '=', $idu)->get();
   	foreach($carts as $cart){
                $cart->product;
                $cart->user;
            }
    //echo "<pre>".json_encode($carts,JSON_PRETTY_PRINT)."</pre>";
   	return view('user.older',['carts'=>$carts]);
   }
}
