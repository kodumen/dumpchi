<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show My Window</title>
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="window" style="background-image: url('{{ asset($photo) }}');"></div>
</body>
</html>