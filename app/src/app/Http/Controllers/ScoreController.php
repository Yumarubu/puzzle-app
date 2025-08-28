<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index()
    {
        $deta = [
            ['id' => 1, 'name' => 'jobi', 'score' => 100],
            ['id' => 2, 'name' => 'shichinohe', 'score' => 300],
            ['id' => 3, 'name' => 'shichinoheSub', 'score' => 150],
            ['id' => 4, 'name' => 'hoge', 'score' => 800],
        ];

        return view('score/index', ['scoreInfo' => $deta]);
    }
}
