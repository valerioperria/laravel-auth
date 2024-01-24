@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        @include('partials.previous_button')
        
        <h2 class="text-center">Make new project</h2>

        <form class="mt-5" action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3 has-validation">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3 has-validation">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control  @error('content') is-invalid @enderror" id="content" rows="3" name="content">{{ old('content') }}</textarea>
                @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>      

            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea class="form-control" id="comment" rows="3" name="comment">{{ old('comment') }}</textarea>
            </div>  
            
            <button class="btn btn-success" type="submit">Salva</button>

        </form>
    </div>
@endsection