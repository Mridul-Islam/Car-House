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
        $brand = Brand::where('id', $id)->get();
        $cars = $brand->cars;
        dd($cars);
        //$brands = Brand::all();
        //return view('brandCarsList', compact('cars'));
    }



}// End of class
