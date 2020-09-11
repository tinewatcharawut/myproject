@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Book {{ $book->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/book') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/book/' . $book->id . '/edit') }}" title="Edit Book"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('book' . '/' . $book->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Book" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $book->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $book->title }} </td></tr><tr><th> Content </th><td> {{ $book->content }} </td></tr><tr><th> Year </th><td> {{ $book->year }} </td></tr><tr><th> Price </th><td> {{ $book->price }} </td></tr><tr><th> Isbn </th><td> {{ $book->isbn }} </td></tr><tr><th> Author Id </th><td> {{ $book->author_id }} </td></tr><tr><th> Publisher Id </th><td> {{ $book->publisher_id }} </td></tr><tr><th> Photo </th><td> {{ $book->photo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
