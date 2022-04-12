@extends("layouts.app")

@section("content")

<style>

</style>

<!-- user profile -->
<div class="container mt-5">
   <div class="row my-5 col-md-6 offset-md-3">
    <div class="col-md-4 text-center">
            <img src="uploads/profiles/{{ Auth::user()->profile_image }}" style="width: 150px; height: 150px" class="rounded-circle mx-auto d-block" alt="...">
         
    </div>
    <div class="col-md-8 ps-5">
            <div class="pb-3">
                <span class="fw-bolder">{{ Auth::user()->name }}</span>
                <button type="button" class="btn btn-sm btn-outline-secondary ms-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit Profile</button>
            </div>
            <span class="fw-normal">Web Developer</span><br>
            <span class="fw-normal">I am a student</span><br>
            <span class="fw-normal">{{ Auth::user()->email }}</span>
    </div>
   </div>

   <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">User Profile</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            @if(Session::has("message"))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{Session::get("message")}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="modal-body">
              <form action="{{ route('profile-update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                <div class="mb-3">
                    <input type="text" class="form-control fs-5" name="name" id="name" placeholder="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control fs-5" name="job" id="job" placeholder="Job" value="{{ Auth::user()->job }}">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control fs-5" name="about" id="about" placeholder="about" value="{{ Auth::user()->about }}">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control fs-5" name="profile_image" id="profile_image">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
            </form>
            </div>
          </div>
        </div>
    </div>

   <!-- posts -->
   <div class="row mt-5">
        <div class="col-12 mb-3">
            <h1 class="text-center"><b>Post</b></h1>
        </div>
        <div class="col-10 offset-md-1">
            <div class="row">
              @foreach ($posts as $post)
                
                <div class="col-md-4 text-center mt-3">
                    <img src="uploads/posts/{{ $post->post_image }}" width="320px" height="320px" alt="">
                </div>

              @endforeach
            </div>
        </div>
   </div>
</div>

@endsection