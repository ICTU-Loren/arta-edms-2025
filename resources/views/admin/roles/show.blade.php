@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h5 class="m-1">Role Details <span class="ml-2" style="font-size:18px;color:#737373;">{{ $role->name }}</span></h5>
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
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card card-outline card-info">
                            <div class="card-body">

                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="60px;">Name</th>
                                            <td>{{ $role->name }}</td>
                                        </tr>
                                        <tr>
                                            <th width="60px;">Permission</th>
                                            <td>
                                                @if(!empty($rolePermissions))
                                                    @foreach($rolePermissions as $v)
                                                        <strong> {{ $v->name }} </strong> |
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                    </thead>
                                </table>

                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-secondary" onclick="goBack()">Back</button>
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