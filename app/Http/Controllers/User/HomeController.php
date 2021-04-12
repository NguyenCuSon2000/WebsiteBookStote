<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryProducts;
use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    {
        $categories = CategoryProducts::all();
        $products = Products::limit(6)->get();
        return view("user.index", compact("categories", "products"));
    }
}
