<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    //一覧表示
    public function index(Request $request)
    {
        //モデル表示
        $stages = Stage::All();
        return view('stages/index',
        ['stages' => $stages]);
    }
}
