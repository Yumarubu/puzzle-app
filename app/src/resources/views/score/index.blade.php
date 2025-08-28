<html lang="ja">
<h1>・スコア一覧</h1>
    <body>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>ユーザー名</th>
            <th>スコア</th>
        </tr>

        @foreach($scoreInfo as $scoreValue)
            <tr>
                <td>{{$scoreValue['id']}}</td>
                <td>{{$scoreValue['name']}}</td>
                <td>{{$scoreValue['score']}}</td>
            </tr>
        @endforeach

    </table>
    </body>
</html>
