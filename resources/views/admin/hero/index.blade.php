@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Hero Section</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Hero Section</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.hero.update', 1) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Null check for $hero -->
                                @if ($hero)
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="title" class="form-control" value="{{ $hero->title }}">
                                        </div>
                                    </div>

                                    <!-- Other form fields -->
                                @else
                                    <p>No hero section found.</p>
                                @endif

                                <!-- Form submission button -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
