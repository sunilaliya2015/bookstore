@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Books List') }}
                <a class="float-right" href="{{ url('book/add') }}" style="float:right">Add Books</a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table id="example1" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>ISBN</th>
                <th>Publisher</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{$book->id}}
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->genre}}</td>
                <td>{{$book->isbn}}</td>
                <td>{{$book->publisher}}</td>
                <td><a href="{{ route('books.edit',[$book->id]) }}">Edit</a>
                ||<a href="{{ route('books.destroy' ,[ $book->id])  }}" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
            </tr>
           @endforeach 
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>ISBN</th>
                <th>Publisher</th>
                <th>Action</th>
                
            </tr>
        </tfoot>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
