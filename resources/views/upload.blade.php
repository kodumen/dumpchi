<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>
<form action="{{ action('UploadController@postPhoto') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="file" name="photo" id="photo" accept="image/jpeg, image/png"/>
    <button type="submit">Upload</button>
</form>
@foreach($errors as $error)
    {{ $error }}
@endforeach
</body>
</html>