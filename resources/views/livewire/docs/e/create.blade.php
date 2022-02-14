@extends('layouts.app')

@section('content')
  
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                <div class="col-sm-6">
                    <h5 class="m-0">Create New <span class="ml-2" style="font-size:18px;color:#737373;">External Document</span></h5>
                </div><!-- /.col -->
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
                    @if (session()->has('message'))
                      <div class="alert alert-success">
                        {{ session('message') }}
                      </div>
                    @endif
                    
                    @livewire('docs.e.create-new')

                  </div>
                  <!-- /.card-outline -->
                </div>
              </div>
            </div>
        </section>
        <!-- /.1stcontent -->
        
@endsection