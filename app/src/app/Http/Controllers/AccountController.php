<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //アカウント一覧を表示する
    public function index(Request $request){
        $title = 'アカウント一覧';

        $data = [[
            'name' => 'テストさん',
            'password' => '$3$3kdiei2',
        ],[
            'name' => '<h1>jobi</h1>',
            'password' => '$9$s#2kdie',
        ]];

        return view('accounts/index', ['title' => $title, 'accounts' => $data]);
    }

    //ログイン画面を表示する
    public function login(){
        return view('login');
    }

    public function dologin(Request $request){
        //if ('name' == 'jobi' && 'password' == 'jobi') {
            redirect('accounts/index');
        //}
    }
}
