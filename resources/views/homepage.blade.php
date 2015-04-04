<!doctype html>
<html lang="en" style="background-image: url('{{ asset($photo) }}');">
<head>
    <meta charset="UTF-8">
    <title>Show My Window</title>
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
</head>
<body>
<h1 class="text-shadow">outside the window</h1>
<div id="footer">
    <div id="container">
        <div class="control">
            <a href="#" class="btn">upload</a>
        </div>
        <div class="control pull-right">
            <a href="{{ url('/') }}" class="btn">next</a>
        </div>
    </div>
</div>
</body>
</html>