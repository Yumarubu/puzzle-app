<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public  function index(Request $request)
    {
        $items = Items::All();

        return view('items/index' , ['items' => $items]);
    }
}
