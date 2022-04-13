@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            @foreach ($posts as $post )
                
            <div class="card mt-4">
                <div class="row mt-3 ms-2">
                    <div class="col-md-1">
                        <img src="uploads/profiles/{{ $post->profile_image }}" class="rounded-circle" width="40px" height="40px" alt="profile">
                    </div>
                    <div class="col-md mt-2">
                        <span class="fw-bolder">{{ $post->user_name }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <img src="uploads/posts/{{ $post->post_image }}" alt="..." class="card-img mt-2 ">
                    </div>
                </div>
                <div class="row ms-2 mt-4">
                    <div class="fw-bold mb-2">{{ $post->title }}</div>
                    <div class="mb-2">{{ $post->description }}</div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>

@endsection
