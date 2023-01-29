@extends('layouts.app')

@section('content')
<div class="section-header section-image bg-white p-0">
    <div class="container z-2">
        <div class="row my-5 justify-content-center text-center">
            <div class="col-lg-8">
                <img src="../../assets/img/team/profile-picture-1.jpg" class="rounded-circle img-thumbnail image-lg border-secondary p-2" alt="Joseph Avatar">
                <h1 class="my-4">{{ $username->name }}</h1>
                <h2 class="h5 fw-normal text-gray mb-4"><span class="fas fa-map-marker-alt me-2"></span>king khalid university, KSA</h2>
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
    <div class="nav-wrapper position-relative mb-2">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-bs-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-bs-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">Q&A</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-3-tab" data-bs-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false">Messages</a>
            </li>
        </ul>
    </div>
    <div class="card border-0">
        <div class="card-body p-0">
            <div class="tab-content" id="tabcontent1">
                <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8"><div class="card shadow p-3 p-md-4"><div class="card-header border-0 bg-white p-0"><div class="post-meta"><div class="media d-flex align-items-center justify-content-between"><div class="post-group"><a href="#" data-toggle="tooltip" data-placement="top" title="23k followers" data-original-title="23k followers"><img class="avatar-sm me-2 img-fluid rounded-circle" src="../../assets/img/team/profile-picture-2.jpg" alt="Jose portrait"> posted by Jose Leos</a></div><div class="d-flex align-items-center"><div class="btn-group"><button class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><span class="icon icon-sm"><span class="fas fa-ellipsis-h icon-secondary"></span> </span><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu py-0" style=""><a class="dropdown-item rounded-top" href="#"><span class="fas fa-edit me-2"></span>Edit post</a> <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fa fa-trash me-2" aria-hidden="true"></span>Delete post</a></div></div></div></div></div></div><div class="card-body py-4 px-0"><a href="#"><img src="../../assets/img/blog/image-1.jpg" class="card-img-top rounded mb-3" alt="Webdeveloper desk"><h3 class="h4">List of public corporations by market capitalization</h3></a><p class="card-text mb-2">All of the world's 10 largest companies as measured by market capitalization are American. Market capitalization is the total value of a company's entire purchased shares of stock. While these companies have their roots in the U.S. and are the embodiment of ...</p></div><div class="card-footer bg-white pb-0 px-0"><div class="d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between"><div class="post-details mb-3 mb-lg-0"><button class="btn btn-sm btn-primary animate-hover me-2"><span class="fas fa-arrow-up me-2 animate-up-2"></span> 4</button> <button class="btn btn-sm btn-danger animate-hover"><span class="fas fa-arrow-down me-2 animate-down-2"></span> 1</button></div><div class="post-meta"><a class="text-dark me-3" href="#"><span class="far fa-comments me-2"></span>33.7k</a> <button class="btn me-3 btn-link text-primary"><span class="fas fa-share me-2"></span>Share</button> <button class="btn btn-secondary"><span class="far fa-save me-2"></span>Save</button></div></div></div></div></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <div>
                                <div class="mt-5">
                                    <div class="card bg-gray-200 border-gray-300 rounded p-4 mb-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <span class="font-small">
                                                <a href="#">
                                                    <img class="avatar-sm img-fluid rounded-circle me-2" src="../../assets/img/team/profile-picture-1.jpg" alt="avatar"> 
                                                    <span class="fw-bold">John Doe</span>
                                                </a>
                                                <span class="ms-2">2 min ago</span>
                                            </span>
                                            <div>
                                                <button class="btn btn-link text-danger" aria-label="report button">
                                                    <span class="far fa-flag"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <p class="m-0">I really like that the Pixel uses a lot of Bootstrap 4's classes to position elements across the website. I also like the fact that we can get a version of the code without Sass if needed.<br><br>When is the next product coming? :)</p>
                                        <div class="mt-4 mb-3 d-flex justify-content-between">
                                            <div>
                                                <span class="far fa-thumbs-up text-action text-success me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Like comment" data-bs-original-title="Like comment" aria-label="Like comment"></span> 
                                                <span class="far fa-thumbs-down text-action text-danger me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Dislike comment" data-bs-original-title="Dislike comment" aria-label="Dislike comment"></span> 
                                                <span class="font-small fw-light">4 likes</span>
                                            </div>
                                            <a class="text-action fw-light font-small" data-bs-toggle="collapse" role="button" href="#replyContainer1" aria-expanded="false" aria-controls="replyContainer1">
                                                <span class="fas fa-reply me-2"></span> Reply</a>
                                            </div>
                                            <div class="collapse" id="replyContainer1">
                                                <label class="mb-4 d-none" for="exampleFormControlTextarea10">Replay</label> 
                                                <textarea class="form-control border" id="exampleFormControlTextarea10" placeholder="Reply to John Doe" rows="6" data-bind-characters-target="#charactersRemainingReply" maxlength="1000"></textarea>
                                                <div class="d-flex justify-content-between mt-3">
                                                    <small class="fw-light"><span id="charactersRemainingReply">1000</span> characters remaining</small> 
                                                    <button class="btn btn-primary btn-sm animate-up-2">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="extraContent" style="display: none;">
                                            <div class="card bg-gray-200 border-gray-300 p-4 mb-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <span class="font-small">
                                                        <a href="#"><img class="avatar-sm img-fluid rounded-circle me-2" src="../../assets/img/team/profile-picture-2.jpg" alt="Neil avatar"> <span class="fw-bold">Neil Sims</span> </a>
                                                        <span class="ms-2">2 min ago</span>
                                                    </span>
                                                    <div>
                                                        <button class="btn btn-link text-danger" aria-label="report button">
                                                            <span class="far fa-flag"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="m-0">I really like that the Pixel uses a lot of Bootstrap 4's classes to position elements across the website. I also like the fact that we can get a version of the code without Sass if needed.<br><br>When is the next product coming? :)</p>
                                                <div class="mt-4 mb-3 d-flex justify-content-between"><div>
                                                    <span class="far fa-thumbs-up text-action text-success me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Like comment" data-bs-original-title="Like comment" aria-label="Like comment"></span> 
                                                    <span class="far fa-thumbs-down text-action text-danger me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Dislike comment" data-bs-original-title="Dislike comment" aria-label="Dislike comment"></span> 
                                                    <span class="font-small fw-light">4 likes</span></div><a class="text-action fw-light font-small" data-bs-toggle="collapse" role="button" href="#replyContainer4" aria-expanded="false" aria-controls="replyContainer4"><span class="fas fa-reply me-2"></span> Reply</a>
                                                </div>
                                                <div class="collapse" id="replyContainer4">
                                                    <label class="mb-4 d-none" for="exampleFormControlTextarea13">Replay</label> 
                                                    <textarea class="form-control border" id="exampleFormControlTextarea13" placeholder="Reply to John Doe" rows="6" data-bind-characters-target="#charactersRemainingReply4" maxlength="1000"></textarea><div class="d-flex justify-content-between mt-3"><small class="fw-light"><span id="charactersRemainingReply4">1000</span> characters remaining</small> <button class="btn btn-primary btn-sm animate-up-2">Send</button></div></div></div><div class="card bg-gray-200 rounded border-gray-300 p-4 ms-5 mb-4"><div class="d-flex justify-content-between mb-4"><span class="font-small"><a href="#"><img class="avatar-sm img-fluid rounded-circle me-2" src="../../assets/img/team/profile-picture-5.jpg" alt="Jose avatar"> <span class="fw-bold">Jose Leos</span> </a><span class="ms-2">2 min ago</span></span><div><button class="btn btn-link text-danger" aria-label="report button"><span class="far fa-flag"></span></button></div></div><p class="m-0">Hi John Doe,<br><br>We're happy to hear you like our product. A new one will come soon enough!</p><div class="mt-4 mb-3 d-flex justify-content-between"><div><span class="far fa-thumbs-up text-action text-success me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Like comment" data-bs-original-title="Like comment" aria-label="Like comment"></span> <span class="far fa-thumbs-down text-action text-danger me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Dislike comment" data-bs-original-title="Dislike comment" aria-label="Dislike comment"></span> <span class="font-small fw-light">2 likes</span></div><a class="text-action fw-light font-small" data-bs-toggle="collapse" role="button" href="#replyContainer5" aria-expanded="false" aria-controls="replyContainer5"><span class="fas fa-reply me-2"></span> Reply</a></div><div class="collapse" id="replyContainer5"><label class="mb-4 d-none" for="exampleFormControlTextarea14">Replay</label> <textarea class="form-control border" id="exampleFormControlTextarea14" placeholder="Reply to John Doe" rows="6" data-bind-characters-target="#charactersRemainingReply5" maxlength="1000"></textarea><div class="d-flex justify-content-between mt-3"><small class="fw-light"><span id="charactersRemainingReply5">1000</span> characters remaining</small> <button class="btn btn-primary btn-sm animate-up-2">Send</button></div></div></div></div><div class="mt-5 text-center"><button id="loadOnClick" class="btn btn-primary btn-loading-overlay me-2 mb-2"><span class="spinner"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> </span><span class="ms-1 btn-inner-text">Load more comments</span></button><p id="allLoadedText" style="display: none;">That's all, Sparky!</p></div></div></div></div></div>
                </div>
                <div class="tab-pane fade" id="tabs-text-3" role="tabpanel" aria-labelledby="tabs-text-3-tab">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 text-center mb-4">
                            <h2>Send Message !</h2>
                            <p>Send Your Message</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <form action="#">
                                <div class="mb-4">
                                    <label for="name">Your Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><span class="fas fa-user-circle"></span></span>
                                         <input type="text" class="form-control" placeholder="e.g. Bonnie Green" id="name" required="">
                                    </div>
                                </div>
                                    <div class="mb-4">
                                        <label for="email">Your Email</label>
                                        <div class="input-group"><span class="input-group-text" id="basic-addon4"><span class="fas fa-envelope"></span>
                                        </span> 
                                        <input type="email" class="form-control" placeholder="example@company.com" id="email" required="">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="message">Your Message</label> 
                                    <textarea placeholder="Your message" class="form-control" id="message" rows="4" required=""></textarea>
                                </div>
                                <div class="d-grid"><button type="submit" class="btn rounded btn-secondary">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
