@extends('layouts.load_excel_file')

@section('content')
    <form method="post" action="{{route('index')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if ($errors->has('name_file'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('name_file') }}
            </div>
        @endif
        <div class="form-group">
            <label class="custom-file">
                <input type="file" name="name_file" class="custom-file-input">
                <span class="custom-file-control"></span>
            </label>
        </div>
        <button type="submit" class="btn btn-success">Send file</button>
    </form>
@endsection

{{--<form action="{{route('index')}}" class="was-validated" method="post" enctype="multipart/form-data">--}}

    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
    {{--<div class="custom-file">--}}
        {{--<input type="file" class="custom-file-input" id="validatedCustomFile" name="name_file" >--}}
        {{--<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>--}}
        {{--<div class="invalid-feedback">Виберіть файл!</div>--}}
        {{--<button class="btn btn-success" type="submit">Send</button>--}}
    {{--</div>--}}

{{--</form>--}}
