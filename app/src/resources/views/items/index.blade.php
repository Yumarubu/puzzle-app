<html lang="ja">
<h1>・アイテム一覧</h1>
<body>

<table border="1">
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>種別</th>
        <th>効果値</th>
        <th>説明</th>
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
