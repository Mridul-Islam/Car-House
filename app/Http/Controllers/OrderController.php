<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

    public function add_order($id, Request $request){
        $input = $request->all();
        $car = Car::findOrFail($id);
        $user = Auth::user();
        $input['user_id'] = $user->id;
        $input['car_id']  = $car->id;
        Order::create($input);
        Session::flash('add_order', 'Your order has been completed successfully');
        return redirect()->back();
    }




}// End of class
