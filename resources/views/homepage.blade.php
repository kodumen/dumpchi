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
<div id="upload-form">
    <form action="{{ action('HomepageController@postUpload') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input type="file" name="photo" id="photo" accept="image/jpeg, image/png"/>
        <button type="submit">Upload</button>
    </form>
</div>
<div id="footer">
    <div id="container">
        <div class="control">
            <a id="form-toggle" href="#" class="btn">upload</a>
        </div>
        <div class="control pull-right">
            <a href="{{ url('/') }}" class="btn">next</a>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>