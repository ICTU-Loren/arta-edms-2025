@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h4 class="m-1">Account Management</h4>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end">
                      @role('SuperAdmin')
                        <a class="btn btn-primary" href="{{ route('users.create') }}"><i class="fa fa-plus-circle mr-1"></i> Create New User</a>
                        <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createUser"><i class="fa fa-plus-circle mr-1"></i> Create New User</button> -->
                      @endrole
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

                        <table id="usermanage" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th hidden>ID</th>
                              <th>Name</th>
                              <th>Email Address</th>
                              <th>Role</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          @foreach ($data as $key => $user)

                            <tr>
                              <td>{{ ++$i }}</td>
                              <td hidden>{{ $user->id }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
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
                                  @elseif ($user->approved == 'active')
                                    <label class="badge badge-success"> {{ $user->approved}} </label>
                                  @else
                                    <label class="badge badge-secondary"> {{ $user->approved}} </label>
                                @endif
                              </td>
                              <td>
                                <!-- <a class="btn btn-info btn-sm mr-0" href="{{ route('users.show',$user->id) }}">View</a> -->
                                @hasanyrole('SuperAdmin|Admin')
                                  <a  class="btn btn-primary btn-sm mr-0" href="{{ route('users.edit',$user->id) }}" title="View / Edit">View / Edit</i></a>
                                @endhasanyrole
                                
                                @role('SuperAdmin')
                                  {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline', 'title'=>'Delete']) !!}
                                      {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] ) !!}
                                  {!! Form::close() !!}
                                @endrole
                              </td>
                            </tr>

                          @endforeach

                        </table>

                        {!! $data->render() !!}

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