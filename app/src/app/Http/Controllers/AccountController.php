<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //アカウント一覧を表示する
    public function index(Request $request){

        //テーブルの全てのレコードを取得
        $accounts = Account::All();

        //テーブルのレコード数を取得
        $count = Account::count();
        return view('account/index', ['accounts' => $accounts]);

        //idで検索、見つからなかったら404エラー
        $accounts = Account::findOrFail(1);

        //条件を指定して取得
        $accounts = Account::where('name', '=', 'jobi')->get();

        //複数の条件を指定して取得
        $accounts = Account::where('name', '=', 'jobi')->where('created_at', '>=', '2025-06-13')->get();

//        $title = 'アカウント一覧';
//
//        $data = [[
//            'name' => 'テストさん',
//            'password' => '$3$3kdiei2',
//        ],[
//            'name' => '<h1>jobi</h1>',
//            'password' => '$9$s#2kdie',
//        ]];
//
//        return view('accounts/index', ['title' => $title, 'accounts' => $data]);
    }

    //ログイン画面を表示する
    public function login(){
        return view('login');
    }

    public function dologin(Request $request){
        //フォームから送られた値を取得
//        $passName = 'jobi';
//        $passPassWord = 'jobi';

        $name = $request->input('name');
        $password = $request->input('password');

        //次回はここを修正すること
        if ($name === 'jobi' && $password === 'jobi')
        {
            return redirect('accounts/index');
        }
        else
        {
            return redirect('/', ['error' => 'ログインに失敗しました']);
        }
    }
}
