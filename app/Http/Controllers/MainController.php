<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home_page()
    {
        return view('user.pages.index');
    }
    public function page_404()
    {
        return view('user.pages.404');
    }
    public function about_page()
    {
        return view('user.pages.about');
    }
    public function cart_page()
    {
        return view('user.pages.cart');
    }
    public function checkout_page()
    {
        return view('user.pages.checkout');
    }
    public function contact_page()
    {
        return view('user.pages.contact');
    }
    public function news_page()
    {
        return view('user.pages.news');
    }
    public function shop_page()
    {
        $categories = Category::paginate(10);
        $products = Product::with('category')->paginate(10);

        return view('user.pages.shope' , compact('categories', 'products'));
    }
    public function single_news_page()
    {
        return view('user.pages.single_news');
    }
    public function single_product_page()
    {
        return view('user.pages.single_product');
    }
}
