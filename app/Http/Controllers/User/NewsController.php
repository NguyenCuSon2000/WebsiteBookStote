<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryProducts;
use App\Models\Products;
use App\Models\OrderDetails;
use App\Models\News;
use Cart;

class NewsController extends Controller
{
    //
    public function index(Request $request)
    {
        $categories = CategoryProducts::all();
        $cart = Cart::content();
        $product_pay = OrderDetails::groupBy('ProductId')       // PRODUCT PAY
                        ->selectRaw('sum(Quantity) as amount, ProductId')
                        ->orderBy('amount','desc')->limit(10)->get();
        $keywords = $request->txtSearch;
        if ($keywords == "") {
            $search_product = Products::limit(0)->get();
        }
        else {
            $search_product = Products::where("ProductName","LIKE","%".$keywords."%")->get();
        }
        $product_count = Products::groupBy('Cate_Id')                             // COUNT PRODUCT
                                ->selectRaw('count(id) as count, Cate_Id')
                                ->get();
        $news = News::paginate(3);
        return view("user.new", 
                    compact("categories",
                            "cart",
                            "product_pay",
                            "search_product",
                            "product_count",
                            "news"));
    }
    public function new_detail(Request $request, $id)
    {
        $categories = CategoryProducts::all();
        $cart = Cart::content();
        $product_pay = OrderDetails::groupBy('ProductId')       // PRODUCT PAY
                        ->selectRaw('sum(Quantity) as amount, ProductId')
                        ->orderBy('amount','desc')->limit(10)->get();
        $keywords = $request->txtSearch;
        if ($keywords == "") {
            $search_product = Products::limit(0)->get();
        }
        else {
            $search_product = Products::where("ProductName","LIKE","%".$keywords."%")->get();
        }
        $product_count = Products::groupBy('Cate_Id')                             // COUNT PRODUCT
                                ->selectRaw('count(id) as count, Cate_Id')
                                ->get();

        $news = News::find($id);

        return view("user.new_detail", 
                    compact("categories",
                            "cart",
                            "product_pay",
                            "search_product",
                            "product_count",
                            "news"));
    }
}
