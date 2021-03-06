<!doctype html>
<html lang="en" style="background-image: url('{{ url($photo) }}');">
<head>
    <meta charset="UTF-8">
    <title>post moe</title>
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
</head>
<body>
<h1 class="text-shadow">post moe</h1>
<div id="footer">
    <div id="container">
        <div id="errors" class="text-shadow">
            @foreach($errors->all() as $error)
                <br>{{ $error }}
            @endforeach
        </div>
        <div id="upload-form">
            <form action="{{ action('HomepageController@postUpload') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="file" name="photo" id="photo" accept="image/jpeg, image/png"/>
                <div class="btn"><button type="button" id="custom-file">browse</button></div>
                <div id="filename-box" class="text-shadow"><div></div></div>
                <div class="btn">
                    <button type="submit">upload</button>
                </div>
            </form>
        </div>
        <div class="btn">
            <a id="form-toggle" href="#">upload</a>
        </div>
        <div class="btn pull-right">
            <a href="{{ url('/') }}">next</a>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>