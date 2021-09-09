<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Model\Category;
use App\model\Subcategory;
use App\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $category = Category::with('Subcategories')->with('Subsubcategories')->where('status', 1)->orderBy('id', 'desc')->get();

        return view('frontend.index', compact('slider', 'category'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function test()
    {
        return view('frontend.pages.test');
    }
}
