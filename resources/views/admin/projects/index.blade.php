@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>Projects' list</h2>

        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Data</th>
                    <th scope="col">Content</th>
                    <th scope="col">Comment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->created_at }}</td>
                        <td>{{ $project->content }}</td>
                        <td>{{ $project->comment }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
