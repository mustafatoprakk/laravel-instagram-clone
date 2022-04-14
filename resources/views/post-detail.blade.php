@extends("layouts.app")

@section("content")

<div class="container">
    <div class="col-md-6 offset-md-3">
        <div class="card shadow-sm p-3 mb-5  rounded">

            @if(Session::has("message"))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{Session::get("message")}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="m-3">
                <form action="{{ route('post-update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $posts->id }}">
                    <div class="mb-3">
                        <input type="text" class="form-control fs-5" name="title" id="title" placeholder="title" value="{{ $posts->title }}">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control fs-5" name="description" id="description" placeholder="description" value="{{ $posts->description }}">
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control fs-5" name="post_image" id="post_image">
                    </div>
                      <button type="submit" class="btn btn-success">Update Post</button>
                      <a href="{{ route('post-delete', $posts->id) }}" class="btn btn-danger">Delete Post</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection