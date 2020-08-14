@extends('bootstrap-theme')
@section('title','Create New Covid Record')
@section('content')
<h1>Create New Covid Record</h1>
<form method="POST" action="{{ url('/covid19') }}" enctype="multipart/form-data" style="width:50%">
    {{ method_field('POST') }}
    {{ csrf_field() }}

    @include ('covid19.form')

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Create">
    </div>
</form>
@endsection