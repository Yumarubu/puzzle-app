<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AuthControlloer extends Controller
{
    //アカウント一覧を表示する
    public function index(Request $request)
    {
        $title = 'アカウント一覧';

        $data = [[
            'name' => 'テストさん',
            'password' => '$3$3kdiei2',
        ],[
            'name' => '<h1>jobi</h1>',
            'password' => '$9$s#2kdie',
        ]];

        //テーブルの全てのレコードを取得
        $accounts = Account::All();

        //テーブルのレコード数を取得
        $count = Account::count();

        //idで検索,見つからなかったら404エラー
        $account = Account::findOrFail(1);

        //条件を指定して取得
        $account = Account::where('name', '=', 'jobi')->get();

        //複数の条件を指定して取得
        $account = Account::where('name', '=', 'jobi')->where('created_at', '>=', '2024-06-08')->get();

        return  view('accounts/index',
            ['title' => $title, 'accounts' => $data]);
    }

}
