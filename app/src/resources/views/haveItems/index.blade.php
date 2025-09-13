<html lang="ja">
<h1>・所持アイテム一覧</h1>
<body>

<table border="1">
    <tr>
        <th>ID</th>
        <th>ユーザー名</th>
        <th>アイテム名</th>
        <th>所持個数</th>
    </tr>

    @foreach($haveItems as $haveItem)
        <tr>
            <td>{{$haveItem['id']}}</td>
            <td>{{$haveItem['user_name']}}</td>
            <td>{{$haveItem['item_name']}}</td>
            <td>{{$haveItem['have_count']}}</td>
        </tr>
    @endforeach

</table>
</body>
</html>
