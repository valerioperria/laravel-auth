@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        @include('partials.previous_button')

        <h2>{{ $project->title }}</h2>

        <div class="mt-4">
            {{ $project->created_at }}
        </div>

        <div class="mt-4">
           Slug: {{ $project->slug }}
        </div>

        <h5 class="mt-4">
            {{ $project->content }}
        </h5>

        <p class=mt-4>
            {{ $project->comment }}
        </p>
    </div>
@endsection
