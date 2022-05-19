<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Image;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.create', compact('roles'));
    }


    public function store(UserCreateRequest $request)
    {
        $input = $request->all();
        if($file = $request->file('image_id')){
            $name = time() . $file->getClientOriginalName();
            // save image to the server
            $file->move('images', $name);
            // save image to the image table
            $image = Image::create(['name'=>$name]);
            $input['image_id'] = $image->id;
        }
        $input['role_id'] = $request->role_id;
        $input['password'] = bcrypt($request->password);
        User::create($input);
        Session::flash('user_created', 'The user has been created successfully');
        return redirect('/admin/users');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.edit', compact('user', 'roles'));
    }


    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();
        // image checking for user
        if($file = $request->file('image_id')){
            // delete previous image
            if($user->image_id){
                unlink(public_path() . "/images/{$user->image->name}");
                $user->image->delete();
            }
            // save the new image
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $image = Image::create(['name'=> $name]);
            $input['image_id'] = $image->id;
        }
        // check pasword
        if($request->password = ''){
            $input['password'] = $user->password;
        }
        else{
            $input['password'] = bcrypt($request->password);
        }
        $user->update($input);
        Session::flash('user_updated', 'The user has been updated successfully');
        return redirect('/admin/users');

    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user->image_id){
            unlink(public_path() . "/images/{$user->image->name}" );
            $user->image->delete();
        }
        $user->delete();
        return redirect('/admin/users');
    }


}// End of class
