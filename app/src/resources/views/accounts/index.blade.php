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

        <a href="../users/index">ユーザー一覧へ</a>
        <br><br>

        <a href="../items/index">アイテム一覧へ</a>
        <br><br>

        <a href="../have-items/index">所持アイテム一覧へ</a>
        <br><br>

        <a href="../score/index">スコア一覧へ</a>
        <br><br>

        <a href="../userInfo/index">ユーザー全情報一覧へ</a>
        <br><br>

        <form method="get" action="{{url('/')}}">
            <button type="submit">ログアウト</button>
        </form>
    </ul>

</body>
</html>
