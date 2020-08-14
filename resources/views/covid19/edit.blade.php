@extends('bootstrap-theme')
@section('title','Edit Covid19 Recrod')
@section('content')
<h1>Edit Covid19 Recrod #{{ $covid19->id }}</h1>
<form method="POST" action="{{ url('/covid19/' . $covid19->id) }}" enctype="multipart/form-data" style="width:50%">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    @include ('covid19.form')

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Update">
    </div>

</form>
@endsection
