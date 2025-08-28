<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            ['id' => 1, 'name' => 'jobi'],
            ['id' => 2, 'name' => 'shichinohe'],
            ['id' => 3, 'name' => 'hoge']
        ];

        return view('users/index', ['users' => $data]);
    }
}
