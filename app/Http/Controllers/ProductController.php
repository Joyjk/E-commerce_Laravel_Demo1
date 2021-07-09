<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use App\Models\cart;
use Session;
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
}
