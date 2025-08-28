<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
@extends('layouts.app')
@section('title','ログイン画面')
@section('main')

<h1>・ログイン画面</h1>
<form method="post" action="{{url('dologin')}}">
    @csrf
    <p><input type="text" name="name" placeholder="ユーザー名を入力"></p>
    <p><input type="text" name="password" placeholder="パスワードを入力"></p>

    <a href="accounts/index">次へ</a>
    <!--<input type="submit" value="ログイン">-->

    @if (!empty($error))
        {{$error}}
    @endif
</form>
</div>
@endsection
