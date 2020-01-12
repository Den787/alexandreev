<!DOCTYPE html>
<html>
<head>
    <link href="{{ mix('/css/app.css') }}">
</head>
<body>
    <div>Шапка</div>
    <div>@yield('content')</div>
    <div>Подвал</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
