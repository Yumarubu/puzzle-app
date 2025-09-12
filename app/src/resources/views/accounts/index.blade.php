<html lang="ja">
<body>
<h1>・{{$title}}</h1>

    <ul>
        <!--<a href="../users/index">ユーザー一覧はこちら</a>
        <br>
        <a href="../score/index">スコア一覧はこちら</a>-->

        @foreach($accounts as $account)
            <li>名前:{{$account['name']}}　パス:{{$account['password']}}</li>
        @endforeach

        <br><br>
        <form method="get" action="{{url('/')}}">
        <button type="submit" name="login">ログアウト</button>
        <!--<a href="../">[ログアウト]</a>-->
        </form>
    </ul>

</body>
</html>
