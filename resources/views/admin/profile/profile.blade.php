@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Admin Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ asset('assets/img/SA1.png') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Admin Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, Sunil Adhikari</h2>
            <p class="section-lead">
                Update your admin profile information here.
            </p>

            <div class="row mt-sm-4">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-header">
                            <h4>Profile Information</h4>
                        </div>
                        <form action="{{ route('profile.update') }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="Sunil Adhikari" required="">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="suniladhikari.official@gmail.com" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
