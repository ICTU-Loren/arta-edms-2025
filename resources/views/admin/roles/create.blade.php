@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="m-1">Create New Role</h4>
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
                                    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 ">
                                        <div class="form-group d-flex">
                                            <strong>Permission:</strong>
                                            &nbsp&nbsp
                                            @foreach($permission as $value)
                                                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }} 
                                                    {{ $value->name }} &nbsp&nbsp&nbsp
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="button" class="btn btn-secondary" onclick="goBack()">Cancel</button>
                                <button type="reset" class="btn btn-secondary">Clear all</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
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