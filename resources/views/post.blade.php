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
                <form action="{{ route('create-post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control fs-5" name="user_name" id="user_name" placeholder="username" value="{{ Auth::user()->name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control fs-5" name="title" id="title" placeholder="title" >
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control fs-5" name="description" id="description" rows="3" placeholder="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control fs-5" name="post_image" id="post_image">
                    </div>
                    <div class="d-grid gap-2 pt-2">
                        <button class="btn btn-outline-secondary fw-bolder fs-5" type="submit">Create Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection