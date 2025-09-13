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

    @foreach($items as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['item_name']}}</td>
            <td>{{$item['type']}}</td>
            <td>{{$item['effect']}}</td>
            <td>{{$item['comment']}}</td>
        </tr>
    @endforeach

</table>
</body>
</html>
