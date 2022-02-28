@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h5 class="m-1">Role Management</h5>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end">
                        @can('role-create')
                            <a class="btn btn-primary btn-sm" href="{{ route('roles.create') }}"><i class="fa fa-plus-circle mr-1"></i> Create New Role</a>
                        @endcan
                    </div>
                    <!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible mb-3">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ $message }}
                        </div>
                        @endif

                        <!-- Default box -->
                        <div class="card card-outline card-info">
                            <div class="card-body">

                                <table id="rolemanage" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                    </thead>

                                    @foreach ($roles as $key => $role)

                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                <!-- <a class="btn btn-info btn-sm" href="{{ route('roles.show',$role->id) }}" title="View">View</i></a> -->
                                                @can('role-edit')
                                                    <a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}" title="View / Edit">View / Edit</i></a>
                                                @endcan

                                                @can('role-delete')
                                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline', 'title'=>'Delete']) !!}
                                                        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] ) !!}
                                                    {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        </tr>
                                        @endforeach
                                </table>

                                {!! $roles->render() !!}
                            
                            </div>

                            <div class="card-footer">
                                <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Back</button>
                            </div>

                        </div>
                        <!-- /.card-outline -->

                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->

        <script>
            function goBack() {
                window.history.back();
            }
        </script>

@endsection