<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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
        $brands = Brand::all();
        return view('index', compact('cars', 'brands'));
    }

    public function car_detail($id){
        $car = Car::findOrFail($id);
        $brands = Brand::all();
        return view('car', compact('car', 'brands'));
    }

    // show brand wise car list
    public function brand_cars($id){
        $brands = Brand::all();
        $cars = Car::where('brand_id', $id)->get();
        //dd($cars);
        return view('brandCarsList', compact('cars', 'brands'));
    }



}// End of class
