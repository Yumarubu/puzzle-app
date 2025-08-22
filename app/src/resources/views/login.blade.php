<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
@extends('layouts.app')
@section('title','ログイン画面')
@section('main')

<h1>・ログイン画面</h1>
<form method="post" action="{{url('dologin')}}">
    @csrf
    <p><input type="text" name="name"></p>
    <p><input type="text" name="password"></p>

    <a href="accounts/index">次へ</a>
    <!--<input type="submit" value="ログイン">-->

    @if ('name' !== 'jobi' && 'password' !== 'jobi')
        名前とパスワードに誤りがあります。
    @elseif ('name' !== 'jobi' && 'password' == 'jobi')
        名前に誤りがあります。
    @endif
</form>
</div>
@endsection
