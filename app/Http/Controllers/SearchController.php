<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        echo $request->worktype;
        echo $request->area;
        return view('search.index')->with('location', $request->area);
    }
}
