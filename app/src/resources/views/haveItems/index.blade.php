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

    @foreach($have_items as $have_item)
        <tr>
            <td>{{$have_item['id']}}</td>
            <td>{{$have_item['user_name']}}</td>
            <td>{{$have_item['item_name']}}</td>
            <td>{{$have_item['amount']}}</td>
        </tr>
    @endforeach

</table>
</body>
</html>
