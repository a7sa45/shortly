@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-4">
        <div class="col-12 col-lg-8">
            <div class="card shadow p-3 p-md-4">
                <div class="card-header border-0 bg-white p-0">
                    <div class="post-meta">
                        <div class="media d-flex align-items-center justify-content-between">
                            <div class="post-group">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="23k followers" data-original-title="23k followers">
                                    <img class="avatar-sm me-2 img-fluid rounded-circle" src="../../assets/img/team/profile-picture-2.jpg" alt="Jose portrait">
                                    {{ $video->user->name }}
                                </a>
                            </div>
                            @auth
                            @if(Auth::user()->id == $video->user_id)
                            <div class="d-flex align-items-center">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="icon icon-sm"><span class="fas fa-ellipsis-h icon-secondary"></span> </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0" style="">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-edit me-2"></span>Edit post</a> 
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fa fa-trash me-2" aria-hidden="true"></span>Delete post</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="card-body py-4 px-0">
                    <a href="#">
                        <video class="card-img-top rounded mb-3" controls>
                            <source src="videos/{{ $video->video_path }}" type="video/mp4">
                            <source src="videos/{{ $video->video_path }}" type="video/ogg">
                        </video>
                        <h3 class="h4">{{ $video->title }}</h3>
                    </a>
                    <p class="card-text mb-2">{{ $video->text }}</p>
                </div>
                <div class="card-footer bg-white pb-0 px-0">
                    <div class="d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between">
                        <div class="post-details mb-3 mb-lg-0">
                            <button class="btn btn-sm btn-primary animate-hover me-2"><span class="fas fa-arrow-up me-2 animate-up-2"></span> 4</button> 
                            <button class="btn btn-sm btn-danger animate-hover"><span class="fas fa-arrow-down me-2 animate-down-2"></span> 1</button>
                        </div>
                        <div class="post-meta"><a class="text-dark me-3" href="#">
                            <span class="far fa-comments me-2"></span>33.7k</a> 
                            <button class="btn me-3 btn-link text-primary"><span class="fas fa-share me-2"></span>Share</button> 
                            <button class="btn btn-secondary"><span class="far fa-save me-2"></span>Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
