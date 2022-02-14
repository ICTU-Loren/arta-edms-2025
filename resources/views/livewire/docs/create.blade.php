@extends('layouts.app')

@section('content')
  
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create New Document</h1>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        @livewire('docdropdown')
                        @livewire('docs.create-new')
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
@endsection