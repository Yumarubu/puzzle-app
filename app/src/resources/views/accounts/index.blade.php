<html lang="ja">
<body>
<h1>・{{$title}}</h1>

<ul>
    @foreach($accounts as $account)
        <li>名前:{{$account['name']}} パス:{{$account['password']}}</li>
    @endforeach
</ul>

</body>
</html>
