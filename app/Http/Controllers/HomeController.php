<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\User;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        foreach($products as $product){
          $product->category;
        }
        $id_user= Auth::user()->id;
        $carts = Cart::where('id_user', '=', $id_user)->get();
       return view('home',['products'=>$products,'carts'=>$carts]);
    }
    function show($id,Request $Request){
   	 $product = Product::find($id);
  		return view("user/detail",["product" => compact('product')]);
   }
    public function admin(Request $req){
        return view('middleware')->withMessage("Admin");
    }
    public function member(Request $req){
        return view('middleware')->withMessage("User");
    }

}
