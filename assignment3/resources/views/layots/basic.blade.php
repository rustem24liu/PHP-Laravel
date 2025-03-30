<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Welcome Page')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">My Laravel App</a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer class="text-center mt-5 p-3 bg-dark text-white">
    &copy; 2025 My Laravel App. All rights reserved.
</footer>
</body>
</html>
