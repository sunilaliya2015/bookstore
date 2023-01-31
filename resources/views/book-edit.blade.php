@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Books Edit') }}
                <a class="float-right" href="javascript:history.back()" style="float:right">Back</a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                    <form method="POST" action="{{ route('books.update',$books->id) }}">
                        @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" value="{{$books->title}}" name="title" aria-describedby="titleHelp" placeholder="Enter Title" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" name="author" value="{{$books->author}}"  placeholder="Enter Author" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" class="form-control" value="{{$books->genre}}"  name="genre" placeholder="Enter Genre" required>
                            </div>
                            <div class="form-group">
                                <label for="isbn">ISBN</label>
                                <input type="text" class="form-control" value="{{$books->isbn}}"  name="isbn" placeholder="Enter ISBN" required>
                            </div>
                            <div class="form-group">
                                <label for="publisher">Publisher</label>
                                <input type="text" class="form-control" value="{{$books->publisher}}" name="publisher" placeholder="Enter Publisher" required>
                            </div><br/>
                            <div class="form-group">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
