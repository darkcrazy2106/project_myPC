<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class OrdersController extends Controller
{
    public function showCheckOutForm(){
        return view('user.checkout');
    }
    public function confirm_success(Request $request){
        return view('user.confirmsuccess');
    }
    public function confirm_checkout(Request $request){
        $order_code = 'AP-'.date('YmdHis');
        $carts = $request->session()->get('cart');
        $order = new Orders();
        $order->order_code = $order_code;
        if(Auth::guard('user')->check()){
            $user = Auth::guard('user')->user();
            if($user->fullname==null or $user->address==null){
                $order->customer_id = $user->id;
                $order->customer_name = $request->customer_name;
                $order->customer_address = $request->customer_address;
                $order->customer_phone = $request->customer_phone;
                $order->status ='0';
            }else{
                $order->customer_id = $user->id;
                $order->customer_name = $user->fullname;
                $order->customer_address = $user->address;
                $order->customer_phone = $user->phone;
                $order->status ='0';
            }
        }
        else
        {
            $order->customer_name = $request->customer_name;
            $order->customer_address = $request->customer_address;
            $order->customer_phone = $request->customer_phone;
            $order->status ='0';
        }
        $order->created_at = now();
        $order->save();

        $order_id = $order->id;

        // dd($order_id);
        if($carts==true){
            foreach($carts as $key => $cart){
                $product_id = $cart['product_id'];
                $order_detail = new OrderDetail();
                $order_detail->order_id = $order_id;
                $order_detail->product_code = $cart['product_code'];
                $order_detail->product_name = $cart['product_name'];
                $order_detail->product_price = $cart['product_price'];
                $order_detail->product_quantity_sale = $cart['product_quantity'];
                $order_detail->product_img = $cart['product_img'];
                $order_detail->save();
                
            }
        }

        $request->session()->forget('cart');
        return redirect()->route('confirm-success')->with('msg','Your order was recorded successful and Your tracking code is: '.$order_code);
    }
    public function showAllOrders(){
        if(Auth::guard('admin')->check()){
            $orders = DB::table('orders')->select('*')->orderBy('order_id','DESC')->get();
            $order_details = DB::table('orders')
                ->select('*')
                ->join('order_details', 'order_details.order_id', '=','orders.order_id')
                ->get();
            return view('manager.orders')->with(compact('orders'))->with(compact('order_details'));
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
    }
    public function set_Status_Delivering_ByID($id){
        if(Auth::guard('admin')->check()){
            $order = DB::table('orders')->select()->where('order_id','=',$id)->get();
            $order_details = DB::table('order_details')->where('order_id','=',$id)
                ->select('*')
                ->get();
            if (!empty($id)){
                if (!empty($order)&&!empty($order_details)){
                    DB::table('orders')->where('order_id','=',$id)
                    ->update([
                        'status'=>'1'
                    ]);
                    $msg = 'Update Status Successful';
                    foreach($order_details as $key => $product)
                    {
                        $product_code = $product->product_code;
                        $productQuantity = DB::table('products')->where('product_code','=',$product_code)->select('quantity')->first();
                        $currentQuantity = $productQuantity->quantity;
                        DB::table('products')->where('product_code','=',$product->product_code)->update([
                            'quantity'=> $currentQuantity-$product->product_quantity_sale,
                        ]);
                    }
                    
                }else{
                    $msg = 'Order is not available';
                }
            }else{
                $msg = 'The connection is not available';
            }
            return redirect()->route('admin.order.index')->with('msg',$msg);
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
    }
    public function set_Status_Received_ByID($id){
        if(Auth::guard('admin')->check()){
            $order = DB::table('orders')->select()->where('order_id','=',$id);
            if (!empty($id)){
                if (!empty($order)){
                    DB::table('orders')->where('order_id','=',$id)
                    ->update([
                        'status'=>'2'
                    ]);
                    $msg = 'Update Status Successful';
                }else{
                    $msg = 'Order is not available';
                }
            }else{
               $msg = 'The connection is not available';
            }
            return redirect()->route('admin.order.index')->with('msg',$msg);
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
    }
}
