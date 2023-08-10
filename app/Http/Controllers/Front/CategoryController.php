<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Satus;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // $category=Category::with([])->latest()->simplePaginate(8);
        // $status=Satus::latest()->simplePaginate(4);
        // return view('front.category',compact('category','status'));



        $mainCategoriesWithChildren = Category::with('subcategories')->latest()->get();

        return view('front.category')->with('mainCategoriesWithChildren', $mainCategoriesWithChildren);
    }
}
