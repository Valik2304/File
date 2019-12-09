<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</header>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{--валідація працює, хоч і не дуже коректно--}}
<div class="d-flex justify-content-center align-items-center" style="height: 100%">
    <form action="{{route('index')}}" class="was-validated" method="post" enctype="multipart/form-data">
        <br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="custom-file"><br>
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="name_file" >
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <div class="invalid-feedback">Виберіть файл!</div>
            <button class="btn btn-success" type="submit">Send</button>
        </div>

    </form>
</div>




</body>
</html>
