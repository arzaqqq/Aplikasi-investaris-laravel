<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        $productcount = Product::count();
        $categorycount = Category::count();

        return view("pages.dashboard.admin",compact("productcount","categorycount"));
    }
}
