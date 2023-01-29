@extends('layouts.app')

@section('content')
<main>



    <!-- Section -->
    <section class="min-vh-100 d-flex align-items-center section-image overlay-soft-dark" data-background="https://images.unsplash.com/photo-1636971828014-0f3493cba88a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" style="background: url('https://images.unsplash.com/photo-1618329027137-a520b57c6606?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="signin-inner my-4 my-lg-0 bg-white shadow-soft border rounded border-gray-300 p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Uplode a Video</h1>
                        </div>
                        <form action="{{ route('video.uplode') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="video" class="form-label">Select Video</label>
                                <input class="form-control" name="video" type="file" id="video">
                                <small id="titleHelp" class="form-text text-gray">Video no longer than a minute.</small>
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="title">Video Title</label>
                                    <input type="text" name="title" class="form-control" id="title">
                                </div>
                                <!-- End of Form -->
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="textarea">Video description</label>
                                    <textarea class="form-control" name="text" placeholder="Enter your description..." id="textarea" rows="2"></textarea> 
                                </div>
                                <!-- End of Form -->
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Uplode</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
