@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="m-1">Create New Role</h5>
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

                        @if (count($errors) > 0)
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>- {{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Default box -->
                        <div class="card card-outline card-info">
                            <div class="card-body">

                                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                                <div class="form-row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <strong>Name</strong>
                                            {!! Form::text('name', null, array('placeholder' => 'name','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-6 col-xs-12 col-sm-12 col-md-12 ">
                                        <div class="form-group">
                                            <strong>Permissions</strong>
                                            <p class="mt-2">
                                                @foreach($permission as $value)
                                                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }} 
                                                        {{ $value->name }} &nbsp&nbsp&nbsp
                                                    </label>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 col-md-12">
                                        <div class="form-group">
                                        <strong>Descriptions</strong>
                                            <ul class="mt-2">
                                                <span class="mb-2" style="font-size:13px;color:#737373;"><i class="icon fas fa-exclamation-circle"></i> </i>DEFAULT PERMISSION <i>important.</i></span>
                                                    <li><b>dashboard-view</b> - have access to Dashboard External and Internal Assigned Documents and My Files.</li>
                                                    <li><b>sidebar-view</b> - have access to Sidebar Menu.</li>
                                                    <li><b>user-view</b> - have access to URLs.</li>
                                                <span class="mb-2" style="font-size:13px;color:#737373;">MANAGE ROLES</span>
                                                    <li><b>role-list</b> - have access in /admin/roles.</li>
                                                    <li><b>role-create</b> - have access in /admin/roles/create.</li>
                                                    <li><b>role-edit</b> - have access in /admin/roles/{id}/edit.</li>
                                                    <li><b>role-delete</b> - can delete roles.</li>
                                                <span class="mb-2" style="font-size:13px;color:#737373;">MANAGE ACCOUNTS</span>
                                                    <li><b>user-list</b> - have access in /admin/users.</li>
                                                    <li><b>user-create</b> - have access in /admin/users/create.</li>
                                                    <li><b>user-edit</b> - have access in /admin/users/{id}/edit.</li>
                                                    <li><b>user-delete</b> - can delete users.</li>
                                                <span class="mb-2" style="font-size:13px;color:#737373;">DASHBOARD GRAPH STATUS</span>
                                                    <li><b>department-status</b> - have access to External and Internal Department Status.</li>
                                                    <li><b>office-status</b> - have access to External and Internal Office Status.</li>
                                                    <li><b>div_unit-status</b> - have access to External and Internal Divsion/Unit Status.</li>
                                                <span class="mb-2" style="font-size:13px;color:#737373;">APP LAYOUT</span>
                                                    <li><b>guest-view</b> - <i>not in use.</i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Cancel</button>
                                <button type="reset" class="btn btn-secondary btn-sm">Clear all</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
                            </div>
                                
                            {!! Form::close() !!}
                            
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