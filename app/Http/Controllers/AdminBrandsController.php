<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use App\Models\Image;
use Illuminate\Http\Request;

class AdminBrandsController extends Controller
{

    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('admin.brands.index', compact('brands'));
    }


    public function create()
    {
        return view('admin.brands.create');
    }


    public function store(CreateBrandRequest $request)
    {
        $input = $request->all();
        if($file = $request->file('image_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $image = Image::create(['name'=>$name]);
            $input['image_id'] = $image->id;
        }
        Brand::create($input);
        return redirect('/admin/brands');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
    }


    public function update(UpdateBrandRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('image_id')){
            // delete previous image
            if($brand->image_id){
                unlink(public_path() . "/images/" . $brand->image->name);
                $brand->image->delete();
            }
            // save new image
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $image = Image::create(['name'=>$name]);
            $input['image_id'] = $image->id;
        }
        $brand->update($input);
        return redirect('/admin/brands');
    }


    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        if($brand->image_id){
            unlink(public_path() . "/images/". $brand->image->name);
            $brand->image->delete();
        }
        $brand->delete();
        return redirect('/admin/brands');
    }
}
