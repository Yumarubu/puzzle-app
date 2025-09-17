<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'name' => 'jobi'],
            ['id' => 2, 'name' => 'shichinohe'],
            ['id' => 3, 'name' => 'hoge']
        ];

        return view('userInfo/index', ['users' => $data]);
    }
}
