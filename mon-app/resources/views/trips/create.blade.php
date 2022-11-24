<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title', 'Bienvenue')</title>
</head>
<body>
    <main>
    <form action="/store" method="POST">
        <input type="text">
        <input type="text">
        <select name="" id="">
            <option value="">France</option>
            <option value="">Espagne</option>
        </select>
    </form>
        @yield('content')
    </main>
    <footer>
        2022 &copy; La Police du Web
    </footer>
</body>
</html>