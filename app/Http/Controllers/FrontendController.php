<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::with(['gallery'])->latest()->get();

        return view('', compact('products'));
    }

    public function cartAdd(Request $request, $id) {
        Cart::create([
            'id_user' => Auth::user()->id,
            'id_product' => $id
        ]);
        return redirect();
    }

    public function cartDelete(Request $request, $id) {
        Cart::findOrFail($id)->delete();

        return redirect();
    }

    public function category($id) {
        $categories = Category::all();
        $products = Products::where('category_id', $id)->get();

        return view();
    }
}
