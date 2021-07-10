<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data =  product::find($id);

        return view('detail',['product'=>$data]);
    }

    function addToCart(Request $req)
    {


        if($req->session()->has('userData'))
        {
            $cart = new cart;
            $cart->user_id=$req->session()->get('userData')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');

        }
        else
        {
            return redirect('login');
        }
    }


    static function cartItem()
    {
            $userId = Session::get('userData')['id'];

            return cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        $userId = Session::get('userData')['id'];
        $products = DB::table('carts')->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)->select('products.*','carts.id as cart_id')->get();
        return view('cartList',["products"=>$products]);
    }

    function removeFromCart($id)
    {
        cart::destroy($id);
        return redirect('cartList');
    }

    function orderNow()
    {
        $userId = Session::get('userData')['id'];
        $total= $products = DB::table('carts')->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)->sum('products.price');
        return view('ordernow',["total"=>$total]);
    }
}
