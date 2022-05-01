<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBrandsController extends Controller
{

    public function index()
    {
        return view('admin.brands.index');
    }


    public function create()
    {
        return view('admin.brands.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
