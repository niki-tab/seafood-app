<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    
    public function index()
    {   

        App::setLocale('es');

        $featuredProducts = ProductModel::where('featured', true)->get();

        return view('home', compact('featuredProducts'));

    }

}
