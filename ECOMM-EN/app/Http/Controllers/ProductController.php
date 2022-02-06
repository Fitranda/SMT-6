<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\product;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = product::all();
        return view('product',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        $data= product::find($id);
        return view('detail',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request)
    {
        if ($request->session()->has('user')) {
            $cart = new Cart();
            $cart->user_id = $request->session()->get('user')->id;
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        }else {
            return redirect('/login');
        }

    }

    public static function cartItem()
    {
        if (session()->has('user')) {
            $user_id=session('user')->id;
        }else {
            $user_id = 0;
        }

        return Cart::where('user_id',$user_id)->count();
        // return $user_id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cartList()
    {
        $user_id = session()->get('user')->id;
        $data=DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$user_id)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartlist',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        Cart::destroy($id);
        return redirect('/cartList');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orderplace(Request $request)
    {
        $user_id=session()->get('user')->id;
        $allcart = Cart::where('user_id',$user_id)->get();
        foreach ($allcart as $item) {
            $order = new Order();
            $order->product_id = $item->product_id;
            $order->user_id = $item->user_id;
            $order->status = "pending";
            $order->payment_mehod = $request->payment;
            $order->payment_status = "pending";
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id',$user_id)->delete();
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function order()
    {
        $user_id = session()->get('user')->id;
        $total=DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$user_id)
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');
        return view('order',compact('total'));
    }

    public function myorder()
    {
        $user_id = session()->get('user')->id;
        $total=DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$user_id)
        ->get();
        return view('myorder',compact('total'));
    }
}
