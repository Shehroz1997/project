@extends('admin.layouts.master')

@section('title')
    Edit Employee
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
                        Employee
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Employes</a></li>
                        <li class="breadcrumb-item active">
                            Employee
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
                                Employee
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" method="POST"
                            action="{{ route('employees.update', ['employee' => $employee->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="InputName">First Name</label>
                                    <input type="text" name="first_name" value="{{ $employee->first_name }}"
                                        class="form-control @if ($errors->has('first_name')) is-invalid @endif"
                                        id="InputName" placeholder="Enter first_name" aria-describedby="NameError"
                                        aria-invalid="true">
                                    <span id="NameError" class="error invalid-feedback">
                                        @if ($errors->has('first_name'))
                                            {{ $errors->first('first_name') }}
                                        @endif
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="InputName">Last Name</label>
                                    <input type="text" name="last_name" value="{{ $employee->last_name }}"
                                        class="form-control @if ($errors->has('last_name')) is-invalid @endif"
                                        id="InputName" placeholder="Enter last_name" aria-describedby="NameError"
                                        aria-invalid="true">
                                    <span id="NameError" class="error invalid-feedback">
                                        @if ($errors->has('last_name'))
                                            {{ $errors->first('last_name') }}
                                        @endif
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">Email</label>
                                    <input type="email" name="email" value="{{ $employee->email }}"
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
                                    <label>Company</label>
                                    <select class="form-control  @if ($errors->has('company_id')) is-invalid @endif"
                                        name="company_id" aria-describedby="CategoryError" id="CategoryError">
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}"
                                                @if ($employee->company_id == $company->id) selected @endif>{{ $company->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span id="CategoryError" class="error invalid-feedback">
                                        @if ($errors->has('company_id'))
                                            {{ $errors->first('company_id') }}
                                        @endif
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="InputPhone">Phone</label>
                                    <input type="tel" name="phone" value="{{ $employee->phone }}"
                                        class="form-control @if ($errors->has('phone')) is-invalid @endif"
                                        id="InputPhone" placeholder="Enter phone" aria-describedby="NameError"
                                        aria-invalid="true">
                                    <span id="NameError" class="error invalid-feedback">
                                        @if ($errors->has('phone'))
                                            {{ $errors->first('phone') }}
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
