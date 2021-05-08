<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>My Todo list</title>

    
</head>
<body>
@include('inc.navbar')
    <div class="container">
        @yield('content')
    </div>
    <footer id="footer" class="text-center">
    <p>Cppyright @ 2017 | Todo list</p>
    </footer>
</body>
</html>