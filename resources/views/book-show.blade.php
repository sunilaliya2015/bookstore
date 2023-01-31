@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card1">
                <div class="card-header">{{ __('Books List') }}
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>ISBN</th>
                <th>Publisher</th>
                
                
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <td>{{$books->id}}
                <td>{{$books->title}}</td>
                <td>{{$books->author}}</td>
                <td>{{$books->genre}}</td>
                <td>{{$books->isbn}}</td>
                <td>{{$books->publisher}}</td>
                </tr>
          
        </tbody>
       
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
