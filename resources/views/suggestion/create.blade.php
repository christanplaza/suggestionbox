@extends('welcome')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card shadow">
            <div class="card-header">
                Create a Suggestion
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <ul class="list-group mb-2">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form action="{{ route('suggestion.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="content">Content: </label>
                        <input type="text" class="form-control" name="content" id="content" required value="{{ old('content') }}">
                    </div>
                    <div class="form-group">
                        <label for="author">Author: </label>
                        <input type="text" name="author" id="author" class="form-control" required value="{{ old('author') }}">
                    </div>
                    <button type="submit" class="btn btn-success float-right">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection