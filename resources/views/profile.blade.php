@extends('layouts.app')

@section('content')
<div class="section-header section-image bg-white p-0">
    <div class="container z-2">
        <div class="row my-5 justify-content-center text-center">
            <div class="col-lg-8">
                <img src="../../assets/img/team/profile-picture-1.jpg" class="rounded-circle img-thumbnail image-lg border-secondary p-2" alt="Joseph Avatar">
                <h1 class="my-4">{{ $username->name }}</h1>
                <h2 class="h5 fw-normal text-gray mb-4"><span class="fas fa-map-marker-alt me-2"></span>New York, USA</h2>
                <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0">
                    <li><a href="#" target="_blank" aria-label="facebook social link" class="icon icon-sm text-facebook me-3"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#" target="_blank" aria-label="twitter social link" class="icon icon-sm text-twitter me-3"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#" target="_blank" aria-label="slack social link" class="icon icon-sm text-slack me-3"><span class="fab fa-slack-hash"></span></a></li>
                    <li><a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-sm text-dribbble"><span class="fab fa-dribbble"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8"><div class="card shadow p-3 p-md-4"><div class="card-header border-0 bg-white p-0"><div class="post-meta"><div class="media d-flex align-items-center justify-content-between"><div class="post-group"><a href="#" data-toggle="tooltip" data-placement="top" title="23k followers" data-original-title="23k followers"><img class="avatar-sm me-2 img-fluid rounded-circle" src="../../assets/img/team/profile-picture-2.jpg" alt="Jose portrait"> posted by Jose Leos</a></div><div class="d-flex align-items-center"><div class="btn-group"><button class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><span class="icon icon-sm"><span class="fas fa-ellipsis-h icon-secondary"></span> </span><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu py-0" style=""><a class="dropdown-item rounded-top" href="#"><span class="fas fa-edit me-2"></span>Edit post</a> <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fa fa-trash me-2" aria-hidden="true"></span>Delete post</a></div></div></div></div></div></div><div class="card-body py-4 px-0"><a href="#"><img src="../../assets/img/blog/image-1.jpg" class="card-img-top rounded mb-3" alt="Webdeveloper desk"><h3 class="h4">List of public corporations by market capitalization</h3></a><p class="card-text mb-2">All of the world's 10 largest companies as measured by market capitalization are American. Market capitalization is the total value of a company's entire purchased shares of stock. While these companies have their roots in the U.S. and are the embodiment of ...</p></div><div class="card-footer bg-white pb-0 px-0"><div class="d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between"><div class="post-details mb-3 mb-lg-0"><button class="btn btn-sm btn-primary animate-hover me-2"><span class="fas fa-arrow-up me-2 animate-up-2"></span> 4</button> <button class="btn btn-sm btn-danger animate-hover"><span class="fas fa-arrow-down me-2 animate-down-2"></span> 1</button></div><div class="post-meta"><a class="text-dark me-3" href="#"><span class="far fa-comments me-2"></span>33.7k</a> <button class="btn me-3 btn-link text-primary"><span class="fas fa-share me-2"></span>Share</button> <button class="btn btn-secondary"><span class="far fa-save me-2"></span>Save</button></div></div></div></div></div>
    </div>
</div>
    
@endsection
