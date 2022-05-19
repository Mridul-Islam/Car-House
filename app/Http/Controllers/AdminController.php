<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
        $users = User::all();
        $brands = Brand::all();
        $cars = Car::all();
        $orders = Order::all();

        return view('admin.index', compact('users', 'brands', 'cars', 'orders'));
    }


}// End of class
