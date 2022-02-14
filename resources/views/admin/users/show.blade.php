@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="m-1">User Details<span class="ml-2" style="font-size:18px;color:#737373;">{{ $user->name }}</span></h4>
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

                            <nav aria-label="breadcrumb" class="my-1">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">User ID: {{ $user->id }}</li>
                                </ol>
                            </nav>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Department</th>
                                        <th>Office</th>
                                        <th>Division / Unit</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->department }}</td>
                                        <td>{{ $user->office }}</td>
                                        <td>{{ $user->div_unit }}</td>
                                        <td>
                                            @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $v)
                                                <label class="badge badge-secondary"><i class="fas fa-user mr-1"></i> {{ $v }} </label>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if ($user->approved == 'pending')
                                            <label class="badge badge-warning"> {{ $user->approved}} </label>
                                            @elseif  ($user->approved == 'active') 
                                                <label class="badge badge-success"> {{ $user->approved}} </label>
                                            @else
                                                <label class="badge badge-secondary"> {{ $user->approved}} </label>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
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