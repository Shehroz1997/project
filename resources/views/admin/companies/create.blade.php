@extends('admin.layouts.master')

@section('title')
    Create Company
@endsection


@section('content')
    @if ($errors->any())
    @endif
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Company
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Companies</a></li>
                        <li class="breadcrumb-item active">
                            Company
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
                                Company
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" method="POST" action="{{ route('companies.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="InputName">NAME</label>
                                    <input type="text" name="name" value="{{ old('name') }}"
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
                                    <input type="email" name="email" value="{{ old('email') }}"
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
                                    <label for="InputLogo">LOGO</label>
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
                                    <label for="InputWesite">WEBSITE</label>
                                    <input type="url" name="website" value="{{ old('website') }}"
                                        class="form-control @if ($errors->has('website')) is-invalid @endif"
                                        id="InputWesite" placeholder="Enter website" aria-describedby="NameError"
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
