<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class MainController extends Controller
{

    public function home()
    {

        return Inertia::render('home') ;
    }
}
