<?php

namespace App\Http\Controllers;

use App\Models\HaveItem;
use Illuminate\Http\Request;

class HaveItemController extends Controller
{
    public  function index()
    {
        $haveItems = HaveItem::All();
        return view('haveItems/index',['haveItems' => $haveItems]);
    }
}
