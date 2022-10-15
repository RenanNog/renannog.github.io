<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog.com</title>
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    <header>
        <h1> @yield('h1')</h1>
        <nav>
            <a href="/posts">Postagens</a>
            <a href="/create_post">Criar um novo Post </a>
        </nav>
        <div class="loin_register">
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </div>
        
    </header>
    <section class="content">
        @yield('content')
    <section>
</body>
</html>