<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
class FoodController extends Controller
{
    public function index(){
        return view("frontend.food");
    }

    public function get()
{
    
    $foods = Food::all();

    
    foreach ($foods as $food) {
       
          
            $food->image_url = asset('frontend/images/' . $food->image);
    }

    
    return view('frontend.food', compact('foods'));
}

}
