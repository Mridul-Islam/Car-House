<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\Translation\t;

class AdminCarsController extends Controller
{

    public function index()
    {
        $cars = Car::orderBy('id', 'desc')->get();
        return view('admin.cars.index', compact('cars'));
    }


    public function create()
    {
        $brands = Brand::pluck('brand_name', 'id')->all();
        return view('admin.cars.create', compact('brands'));
    }


    public function store(CreateCarRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        if($file = $request->file('image_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $image = Image::create(['name'=>$name]);
            $input['image_id'] = $image->id;
        }
        Car::create($input);
        return redirect('/admin/cars');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $brands = Brand::pluck('brand_name', 'id')->all();
        return view('admin.cars.edit', compact('car', 'brands'));
    }


    public function update(UpdateCarRequest $request, $id)
    {
        $car = Car::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('image_id')){
            // delete old image
            if($car->image_id){
                unlink(public_path() . "/images/" . $car->image->name );
                $car->image->delete();
            }
            // save new image
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $image = Image::create(['name'=>$name]);
            $input['image_id'] = $image->id;
        }
        $car->update($input);
        return redirect('/admin/cars');
    }


    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        if($car->image_id){
            unlink(public_path() . "/images/" . $car->image->name );
            $car->image->delete();
        }
        $car->delete();
        return redirect('/admin/cars');
    }
}
