<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

    public function add_order($car, Request $request){
        $input = $request->all();
        $car = Car::findOrFail($car);
        $user = Auth::user();

        $input['buyer_name']    = $user->name;
        $input['product_name']  = $car->model_name;
        if($car->image_id){
            $input['product_image'] = $car->image->name;
        }
        else{
            $input['product_image'] = null;
        }
        $input['product_price'] = $car->price;

        Order::create($input);

        Session::flash('add_order', 'Your order has been completed successfully');
        return redirect()->back();
    }




}// End of class
