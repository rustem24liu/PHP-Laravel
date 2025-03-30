<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Assignment</title>
    <!-- Link to the custom CSS file -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Information that passed from controller</h1>
    <p><strong>Title:</strong> {{ $data['title'] }}</p>
    <p><strong>Status:</strong> {{ $data['status'] }}</p>
    <p><strong>Time:</strong> {{ $data['time'] }}</p>
    <p><strong>Author:</strong> {{ $data['author'] }}</p>

    <button id="infoButton">Click Me!</button>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
