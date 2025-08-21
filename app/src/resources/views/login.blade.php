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

    <input type="submit" value="ログイン">
</form>
</div>
@endsection
