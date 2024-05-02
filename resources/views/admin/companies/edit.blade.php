@extends('admin.layouts.master')

@section('title')
    Edit company
@endsection

@section('css')
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@endsection

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        company
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Companies</a></li>
                        <li class="breadcrumb-item active">
                            company
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                company
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" method="POST"
                            action="{{ route('companies.update', ['company' => $company->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="InputName">Name</label>
                                    <input type="text" name="name" value="{{ $company->name }}"
                                        class="form-control @if ($errors->has('name')) is-invalid @endif"
                                        id="InputName" placeholder="Enter name" aria-describedby="NameError"
                                        aria-invalid="true">
                                    <span id="NameError" class="error invalid-feedback">
                                        @if ($errors->has('name'))
                                            {{ $errors->first('name') }}
                                        @endif
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">Email</label>
                                    <input type="email" name="email" value="{{ $company->email }}"
                                        class="form-control @if ($errors->has('email')) is-invalid @endif"
                                        id="InputEmail" placeholder="Enter email" aria-describedby="NameError"
                                        aria-invalid="true">
                                    <span id="NameError" class="error invalid-feedback">
                                        @if ($errors->has('email'))
                                            {{ $errors->first('email') }}
                                        @endif
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="InputLogo">Logo</label>
                                    @if ($company->logo)
                                        <img src="{{ asset($company->logo) }}" width="75px" height="75px"
                                            alt="{{ $company->logo }}">
                                        &nbsp &nbsp
                                    @endif
                                    <input type="file" name="logo"
                                        class="form-control @if ($errors->has('logo')) is-invalid @endif"
                                        id="InputLogo" placeholder="Enter logo" aria-describedby="ImageError"
                                        aria-invalid="true">
                                    <span id="ImageError" class="error invalid-feedback">
                                        @if ($errors->has('logo'))
                                            {{ $errors->first('logo') }}
                                        @endif
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="InputWebsite">Website</label>
                                    <input type="text" name="website" value="{{ $company->website }}"
                                        class="form-control @if ($errors->has('website')) is-invalid @endif"
                                        id="InputWebsite" placeholder="Enter website" aria-describedby="NameError"
                                        aria-invalid="true">
                                    <span id="NameError" class="error invalid-feedback">
                                        @if ($errors->has('website'))
                                            {{ $errors->first('website') }}
                                        @endif
                                    </span>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
@endsection
