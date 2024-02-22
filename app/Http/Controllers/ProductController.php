<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function categories(string $category = null){
    //     $categories = array("food-beverage", "beauty-health", "home-care", "baby-kid");
    //     foreach ($categories as $categoryList) {
    //         if($category == $categoryList){
    //             $category = ucwords(str_replace("-", " ", $category));
    //             return view('products')->with(['category' => $category]);
    //         }
    //     }
    //     return 'Category not found';
    // }

    public function foodBeverage(){
        return view("category.food-beverage");
    }

    public function beautyHealth(){
        return view('category.beauty-health');
    }

    public function babyKid(){
        return view('category.baby-kid');
    }

    public function homeCare(){
        return view('category.home-care');
    }

}

