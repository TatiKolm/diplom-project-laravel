<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Throwable;

class OrderController extends Controller
{
    public function checkoutPage()
    {
        $currentUser = auth()->user();
        if(!$currentUser){
            $cart = Cart::where('session_id', session()->getId())->first();
        } else {
            $cart = $currentUser->cart;
        }
        return view('checkout',[
            'cart' => $cart,
        ]);
        
    }

    public function storeOrder(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_street' => 'required',
            'user_house' => 'required', 
            'phone' => 'required',
            'email' => 'required',
        ]);

        $currentUser = auth()->user();
        if(!$currentUser){
            $cart = Cart::where('session_id', session()->getId())->first();
        } else {
            $cart = $currentUser->cart;
        }
        
        try{
            
            $order = Order::add($request->all());

            foreach($cart->items as $item){
                OrderItem::add($item, $order);
            }

            $order->total_sum = $cart->getTotalPrice();
            $order->save();

            $cart->delete(); 

            // Mail::to($order->email)->send(new OrderSuccess($order));
            // Mail::to('laravel-project-seo@yandex.ru')->send(new OrderSuccessToAdmin($order));

        } catch (Throwable $e){
            report($e);
            return false;
        };
        
        return redirect()->route('app.order-thankyou', $order);
    }

    public function thankyouPage(Order $order)
    {
        return view('order-success', [
            'order' => $order,
        ]);
    }

  
    
}
