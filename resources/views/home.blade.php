<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <!-- Fonts -->
            <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
        <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
        <!-- Script -->
        <script src="{{ asset('js/app.js') }}"></script>

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
    <table>
        <tr>
            <td class="name">名前１</td>
            <td class="address">住所１</td>
        </tr>
        <tr>
            <td class="name">名前2</td>
            <td class="address">住所２</td>
        </tr>
        <tr>
            <td class="name">名前3</td>
            <td class="address">住所3</td>
        </tr>
    </table>



    <button class="js-modal-button">モーダルボタン</button>
@include('modal.calendar-modal')
<script src="{{ asset('js/calendar.js') }}"></script>
        <script>

            const modal = document.querySelector('.js-modal'); // layer要素に付与したjs-modalクラスを取得し変数に格納
const modalButton = document.querySelector('.js-modal-button'); // button要素に付与したjs-modal-buttonクラスを取得し、変数に格納
const modalClose = document.querySelector('.js-close-button');　

// モーダルボタンをクリックしたときのイベントを登録
modalButton.addEventListener('click', () => {
  modal.classList.add('is-open');
});
modalClose.addEventListener('click', () => { // xボタンをクリックしたときのイベントを登録
  modal.classList.remove('is-open'); 

});
</script>
</body>
</html>