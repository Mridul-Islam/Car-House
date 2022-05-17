<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $cars = Car::all();
        return view('index', compact('cars'));
    }

    public function car_detail($id){
        $car = Car::findOrFail($id);
        return view('car', compact('car'));
    }



}// End of class
