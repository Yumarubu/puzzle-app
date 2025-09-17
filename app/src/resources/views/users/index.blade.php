<html lang="ja">
<h1>・ユーザー一覧・</h1>
<body>
    <input type="text" placeholder="名前を入力">
    <input type="submit" value="検索">
    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>レベル</th>
            <th>経験値</th>
        </tr>

        @foreach($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td> {{$user['name']}}</td>
                <td> {{$user['level']}}</td>
                <td> {{$user['evolutionPoint']}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
