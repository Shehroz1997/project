@extends('admin.layouts.master')

@section('title')
    companies
@endsection

@section('css')
    @include('admin.includes.datatable_css')
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>companies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">companies</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title">All companies</h3>
                            <a href="{{ route('companies.create') }}" class="btn btn-primary float-right"> Add
                                company</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>Email</th>
                                        <th>Logo</th>
                                        <th>Website</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companies as $company)
                                        <tr>
                                            <td>{{ $company->name }}</td>
                                            <td>{{ $company->email }}</td>

                                            <td>
                                                @if ($company->logo)
                                                    <img src="{{ asset($company->logo) }}" width="75px" height="75px"
                                                        alt="{{ $company->logo }}">
                                                    &nbsp &nbsp
                                                @else
                                                    -
                                                @endif
                                            </td>


                                            <td>{{ $company->website }}</td>
                                            <td>
                                                <a class="btn btn-primary"
                                                    href="{{ route('companies.edit', ['company' => $company->id]) }}">Edit</a>

                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deleteModal{{ $company->id }}">
                                                    Delete
                                                </button>
                                                <div class="modal fade" id="deleteModal{{ $company->id }}"
                                                    style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Warning</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>This action is irreversible. Are You Sure , You want to
                                                                    delete this company permanently ?</p>
                                                            </div>
                                                            <form
                                                                action="{{ route('companies.destroy', ['company' => $company->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>NAME</th>
                                        <th>Email</th>
                                        <th>Logo</th>
                                        <th>Website</th>
                                        <th>Action</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    @include('admin.includes.datatable_scripts')
@endsection
