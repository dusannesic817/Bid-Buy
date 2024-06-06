<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    

    public function index()
    {

        $categories= Category::all();
        $auctions = Auction::take(5)->get();

        
        return view('welcome',[
        'categories'=>$categories,
        'auctions'=>$auctions
        
        ]
    );
    }
}
