@extends('welcome')

@section('content')
<div class="col-md-6 mx-auto">
    <div class="card shadow">
        <div class="card-header">
            Edit a Suggestion
        </div>
        <div class="card-body">
            <form action="{{ route('suggestion.update', ['id' => $suggestion->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="content">Content: </label>
                    <input type="text" class="form-control" name="content" id="content" required value="{{ $suggestion->content }}">
                </div>
                <div class="form-group">
                    <label for="author">Author: </label>
                    <input type="text" name="author" id="author" class="form-control" required value="{{ $suggestion->author }}">
                </div>
                <button type="submit" class="btn btn-success float-right">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection