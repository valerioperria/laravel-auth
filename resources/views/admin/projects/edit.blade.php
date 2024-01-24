@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>Change project</h2>
        <form action="">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content">{{ $project->content }}</textarea>
            </div>

            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea class="form-control" id="comment" rows="3" name="comment">{{ $project->comment }}</textarea>
            </div>

            <button class="btn btn-success" type="submit">Save changes</button>
        </form>
    </div>
@endsection
