@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h5 class="m-0">Dashboard</h5>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        @if(Session::has('message'))
          <div class="alert alert-success alert-dismissible mb-3">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('message')}}
          </div>
        @endif

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              
                <div class="col-12">

                      <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-info"></i> Welcome!</h5>
                        Please wait 10-15 minutes for the Administrator to verify and activate your account. Thank you.
                      </div>

                </div>
              
            </div>
            <!-- /.row -->
          </div>
        </section>
        <!-- /.main-content -->
        
@endsection


