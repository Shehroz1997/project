@extends('admin.layouts.master')

@section('title')
    Employees
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
                    <h1>Employees</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Employees</li>
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
                            <h3 class="card-title">All Employees</h3>
                            {{-- <a href="{{ route('admin.archive') }}" class="btn btn-primary float-right">
                                Archive</a> --}}


                            <a href="{{ route('employees.create') }}" class="btn btn-primary float-right"> Add
                                employe</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employe)
                                        <tr>
                                            <td>{{ $employe->first_name }}</td>
                                            <td>{{ $employe->last_name }}</td>

                                            <td>
                                                {{ $employe->company->name ?? '-' }}
                                            </td>

                                            <td>
                                                {{ $employe->email }}
                                            </td>
                                            <td>
                                                {{ $employe->phone }}
                                            </td>
                                            <td>
                                                <a class="btn btn-primary"
                                                    href="{{ route('employees.edit', ['employee' => $employe->id]) }}">Edit</a>


                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deleteModal{{ $employe->id }}">
                                                    Delete
                                                </button>
                                                <div class="modal fade" id="deleteModal{{ $employe->id }}"
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
                                                                <p> Are You Sure , You want to
                                                                    delete this employe?</p>
                                                            </div>
                                                            <form
                                                                action="{{ route('employees.destroy', ['employee' => $employe->id]) }}"
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
                                {{-- <tfoot>
                                    <tr>
                                      <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot> --}}
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
