@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Book</div>
                    <div class="card-body">
                        <a href="{{ url('/book/create') }}" class="btn btn-success btn-sm" title="Add New Book">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/book') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Title</th><th class="d-none">Content</th><th>Year</th><th>Price</th><th>Isbn</th><th>Author Id</th><th>Publisher Id</th><th>Photo</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($book as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td><td class="d-none">{{ $item->content }}</td><td>{{ $item->year }}</td><td>{{ $item->price }}</td><td>{{ $item->isbn }}</td><td>{{ $item->author_id }}</td><td>{{ $item->publisher_id }}</td><td><img src="{{ asset("/storage/{$item->photo}") }}" width="100"  height="150"></td>
                                        <td>
                                            <a href="{{ url('/book/' . $item->id) }}" title="View Book"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/book/' . $item->id . '/edit') }}" title="Edit Book"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/book' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Book" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $book->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
