<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;
use Illuminate\Support\Facades\Auth;

class AddtoCartController extends Controller
{
   
    
    public function showCart(){
        return view('user.cart');
    }
    public function add_cart_ajax(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = $request->session()->get('cart');
        if($cart==true){
            $is_available = 0;
            $key_available = 0;
            foreach($cart as $key => $val){
                // dd($val['product_id']);
                // dd($data['cart_product_id']);
                if($val['product_id']==$data['cart_product_id']){
                    $key_available= $key;
                    $is_available++;
                }
            }
            if($is_available == 0){
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_name' => $data['cart_product_name'],
                    'product_id' => $data['cart_product_id'],
                    'product_code' => $data['cart_product_code'],
                    'product_img' => $data['cart_product_img'],
                    'product_quantity' => $data['cart_product_quantity'],
                    'product_price' => $data['cart_product_price'],
                    'product_storage'=> $data['cart_product_storage']
                );
                $request->session()->put('cart', $cart);
            }else{
                $cart[$key_available]['product_quantity']++;
                $request->session()->put('cart', $cart);
            }
        }else{
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_name' => $data['cart_product_name'],
                    'product_id' => $data['cart_product_id'],
                    'product_code' => $data['cart_product_code'],
                    'product_img' => $data['cart_product_img'],
                    'product_quantity' => $data['cart_product_quantity'],
                    'product_price' => $data['cart_product_price'],
                    'product_storage'=> $data['cart_product_storage']
                );
                $request->session()->put('cart', $cart);
            }
        return response()->json($cart);
    }
    // public function show_cart_live_view(Request $request){
    //     $cart = $request->session()->get('cart');
    //     if($cart==true){
    //         return $cart;
    //     }
    // }
        
    public function delete_cart_product(Request $request, $session_id){
        $cart = $request->session()->get('cart');
        if($cart==true){
            foreach($cart as $key => $val){
                if($val['session_id']==$session_id){
                    unset($cart[$key]);
                }
            }
            $request->session()->put('cart', $cart);
            return redirect()->back()->with('msg','Deleted Success !!!');
        }else{
            return redirect()->back()->with('msg','Deleted Fail !!!');
        }
    }
    public function update_cart(Request $request){
        $data = $request->all();
        $cart = $request->session()->get('cart');
        
        if($cart==true){
            foreach($data['cart_quantity'] as $key => $quantity){
                foreach($cart as $session => $val){
                    if($val['session_id']==$key){
                        $cart[$session]['product_quantity'] = $quantity;
                    }
                }
            }
            $request->session()->put('cart', $cart);
            return redirect()->back()->with('msg','Updated Success !!!');
        }else{
            return redirect()->back()->with('msg','Update Fail !!!');
        }
    }
    public function delete_all_product(Request $request){
        $cart = $request->session()->get('cart');
        if($cart==true){
            $request->session()->forget('cart');
            return redirect()->back()->with('msg','Cleared Success !!!');
        }
    }
}
