<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>テスト</h1>
    <form action="{{ route('pdf.test') }}" method="GET">
        <label for="name">名前</label>
        <input type="text" name="name">
        <br>
        <label for="age">年齢</label>
        <input type="text" name="age">
        <br>
        <button type="submit">PDF出力</button>
    </form>

</body>
</html>