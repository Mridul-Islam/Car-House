<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use function Sodium\compare;

class CartController extends Controller
{

    public function add_to_cart($id, Request $request){
        $car = Car::findOrFail($id);
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['car_id'] = $car->id;
        Cart::create($input);
        Session::flash('cart_added', 'This product has been added to your cart list');
        return redirect()->back();
    }

    public function cart_list($id){
        $user = User::findOrFail($id);
        $brands = Brand::all();
        $carts = Cart::whereUserId($user->id)->get();
        //dd($carts);
        return view('cart_list', compact('carts', 'brands'));
    }

    public function cart_delete($id){
        $user = Auth::user();
        $cart = Cart::findOrFail($id);
        $cart->delete();
        Session::flash('cart_deleted', 'The product has been deleted successfully from the cart list.');
        return redirect(route('cart_list', $user->id));
    }




}// End  of class
