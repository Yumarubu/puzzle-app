<html lang="ja">
<body>
<h1>・{{$title}}</h1>

<ul>
    <a href="">ユーザー一覧はこちら</a>
    <br>
    <a href="">スコア一覧はこちら</a>
    @foreach($accounts as $account)
        <li>名前:{{$account['name']}}　パス:{{$account['password']}}</li>
    @endforeach
</ul>
</body>
</html>
