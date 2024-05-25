@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>About Section</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update About Section</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.about.update', $about->id ?? 1) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Image Upload Section -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview" style="background-image: url('{{ optional($about)->image ? Storage::url($about->image) : '' }}'); background-size: cover; background-position: center center;">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="image" id="image-upload" />
                                    </div>
                                </div>
                            </div>
                            <!-- Title Input Section -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="title" class="form-control" value="{{ optional($about)->title ?? '' }}">
                                </div>
                            </div>
                            <!-- Description Input Section -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name="description" class="summernote">{{ optional($about)->description ?? '' }}</textarea>
                                </div>
                            </div>
                            <!-- Resume Upload Section -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Resume</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="custom-file">
                                        <input type="file" name="resume" id="customFile" class="custom-file-input">
                                        <label for="customFile" class="custom-file-label">Choose File</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection