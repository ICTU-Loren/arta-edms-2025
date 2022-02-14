@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                <div class="col-sm-6">
                    <h4 class="m-1">Edit Document</h4>
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

                    @if(session('status'))
                        <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">

                    <form action="{{ route('files.update',  $documents->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-8 table-responsive">
                                <div class="card">
                                    <div class="card-body">

                                        <table class="table table-striped">
                                            <tr>
                                                <th style="width:25%">Title:</th>
                                                <td><input type="text" name="doc_title" value="{{ $documents->doc_title }}" class="form-control" placeholder="Enter title">
                                                    @error('doc_title')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Subject:</th>
                                                <td><input type="text" name="subject" value="{{ documents->subject }}" class="form-control" placeholder="Enter subject">
                                                    @error('subject')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Document Type:</th>
                                                <td><input type="text" name="doc_type" value="{{ $documents->doc_type }}" class="form-control" placeholder="Enter document type">
                                                    @error('doc_type')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>From:</th>
                                                <td><input type="text" name="s_name" value="{{ $documents->s_name }}" class="form-control" placeholder="Enter sender's name">
                                                    @error('s_name')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Address:</th>
                                                <td><input type="text" name="s_profile" value="{{ $documents->s_profile }}" class="form-control" placeholder="Enter sender's profile">
                                                    <input type="text" name="s_address" value="{{ $documents->s_address }}" class="form-control" placeholder="Enter sender's address">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Mode of Delivery:</th>
                                                <td><input type="text" name="mod" value="{{ $documents->mod }}" class="form-control" placeholder="Enter mode of delivery">
                                                    @error('mod')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>

                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="col-4 table-responsive">
                                <div class="card">
                                    <div class="card-body">

                                        <table class="table table-striped">
                                            <tr>
                                                <th style="width:25%">Status</th>
                                                <td><input type="text" name="status" value="Open" class="form-control" placeholder="Enter status"></td>
                                            </tr>
                                            <tr>
                                                <th>DTS No.</th>
                                                <td><input type="text" name="id" class="form-control" value="EX2021-00{{ $documents->id }}" disabled></td>
                                            </tr>
                                            <tr>
                                                <th>Created by:</th>
                                                <td><input type="text" name="name" class="form-control" value="{{ $documents->name }}" disabled></td>
                                            </tr>
                                            <tr>
                                                <th>Date & Time received:</th>
                                                <td><input type="text" name="received" value="{{ $documents->date_received }} {{ $documents->time_received }}" class="form-control"></td>
                                            </tr>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                                
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary ml-3" onclick="goBack()">Cancel</button>
                            <button type="submit" class="btn btn-primary ml-3">Update</button>
                        </div>
                    </form>

                    </div>

                  <!-- /.card-outline -->
                </div>
              </div>
            </div>
        </section>
        <!-- /.1stcontent -->

<script>
    function goBack() {
        window.history.back();
    }
</script>
 

@endsection