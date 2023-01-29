@extends('layouts.app')

@section('content')
<section class="section-header bg-primary text-white pb-10 pb-sm-8 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-4">Explanations for you</h1>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg line-bottom-light">
    <div class="container mt-n10 mt-lg-n12 z-2">
        <div class="row">
            @foreach ($videos as $video)
                @if ($loop->first)
                    <div class="col-lg-12 mb-5">
                        <div class="card shadow bg-white border-gray-300 flex-lg-row align-items-center g-0 p-4">
                            <a href="/video-{{ $video->id }}" class="col-12 col-lg-6">
                                <video class="card-img-top rounded" src="videos/{{ $video->video_path }}" alt="video"></video>
                            </a>
                            <div class="card-body d-flex flex-column justify-content-between col-auto py-4 p-0 p-lg-3 p-xl-5">
                                <a href="/video-{{ $video->id }}">
                                    <h2>{{ $video->title }}</h2>
                                </a>
                                <p>{{ $video->text }}</p>
                                <div class="d-flex align-items-center mt-3">
                                    <img class="avatar avatar-sm rounded-circle" src="../../assets/img/team/profile-picture-1.jpg" alt="Richard avatar">
                                    <h3 class="h6 small ms-2 mb-0">{{ $video->user->name }}</h3>
                                    <span class="h6 text-muted small fw-normal mb-0 ms-auto">
                                        <time datetime="2019-04-25">{{ $video->created_at->format('D, Y h:i A') }}</time>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-5">
                    <div class="card shadow bg-white border-gray-300 p-4 rounded">
                        <a href="/video-{{ $video->id }}">
                            <video class="card-img-top rounded" src="videos/{{ $video->video_path }}" alt="video"></video>
                        </a>
                        <div class="card-body p-0 pt-4">
                            <a href="/video-{{ $video->id }}" class="h4">{{ $video->title }}</a>
                            <div class="d-flex align-items-center my-3">
                                <img class="avatar avatar-sm rounded-circle" src="../../assets/img/team/profile-picture-1.jpg" alt="Jose avatar">
                                <h3 class="h6 small ms-2 mb-0">{{ $video->user->name }}</h3>
                            </div>
                            <p class="mb-0">{{ $video->text }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            
            
            <div class="col-12"><div class="d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
