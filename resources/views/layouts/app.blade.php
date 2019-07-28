<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Todo List</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </body>
    <footer class="text-center">
        <p>Copyright &copy; 2019 TodoList</p>
    </footer>
</html>
