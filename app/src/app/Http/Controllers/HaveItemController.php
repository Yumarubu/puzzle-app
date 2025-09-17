<?php

namespace App\Http\Controllers;

use App\Models\HaveItem;
use Illuminate\Http\Request;

class HaveItemController extends Controller
{
    public  function index()
    {
        $haveItems = HaveItem::select(['have_items.id as id', 'users.name as user_name', 'items.item_name as item_name', 'amount'])
        ->join('users', 'users.id', '=', 'have_items.user_id')
        ->join('items', 'items.id', '=', 'have_items.item_id')
        ->get();
        return view('haveItems/index',['haveItems' => $haveItems]);
    }
}
