<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryProducts;
use App\Models\Products;

class ProductDetailController extends Controller
{
    //
    public function index($id)
    {
        $categories = CategoryProducts::all();
        $product = Products::find($id);
        $products_new = Products::limit(6)->get();
        return view("user.product_detail", compact("categories", "product", "products_new"));
    }
}
