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
        <form method="get" action="{{url('users/index')}}">
            <button type="submit" name="index">ユーザー一覧</button>
        </form>

        <form method="get" action="{{url('items/index')}}">
            <button type="submit" name="index">アイテム一覧</button>
        </form>

        <form method="get" action="{{url('score/index')}}">
            <button type="submit" name="index">スコア一覧</button>
        </form>

        <form method="get" action="{{url('/')}}">
        <button type="submit" name="index">ログアウト</button>
        </form>
    </ul>

</body>
</html>
