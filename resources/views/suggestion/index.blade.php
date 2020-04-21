@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">List all the Suggestions</h1>
            <p class="text-center text-primary">
                <a href="{{ route('suggestion.create') }}">Add a Suggestion</a>
            </p>
        </div>
        <div class="col-md-12">
            <div class="card shadow">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Content</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suggestions as $suggestion)
                            <tr>
                                <td scope="row">{{ $suggestion->id }}</td>
                                <td>{{ $suggestion->author }}</td>
                                <td>{{ $suggestion->content }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection