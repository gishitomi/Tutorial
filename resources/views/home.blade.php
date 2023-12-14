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

    <div id="app">
            <div class="m-auto w-50 m-5 p-5">
                <div id='calendar'></div>
            </div>
        </div>

        <script src='{{ asset('fullcalendar-6.1.10/dist/index.global.min.js') }}'></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth'
                });
                calendar.render();
            });
        </script>
</body>
</html>