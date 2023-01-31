@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Books Add') }}
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
                    <form method="POST" action="{{ route('add') }}">
                        @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" aria-describedby="titleHelp" placeholder="Enter Title" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" name="author" placeholder="Enter Author" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" class="form-control" name="genre" placeholder="Enter Genre" required>
                            </div>
                            <div class="form-group">
                                <label for="isbn">ISBN</label>
                                <input type="text" class="form-control" name="isbn" placeholder="Enter ISBN" required>
                            </div>
                            <div class="form-group">
                                <label for="publisher">Publisher</label>
                                <input type="text" class="form-control" name="publisher" placeholder="Enter Publisher" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
