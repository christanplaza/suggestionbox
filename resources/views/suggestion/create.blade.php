@extends('welcome')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card shadow">
            <div class="card-header">
                Create a Suggestion
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="content">Content: </label>
                        <input type="text" class="form-control" name="content" id="content">
                    </div>
                    <div class="form-group">
                        <label for="author">Author: </label>
                        <input type="text" name="author" id="author" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success float-right">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection