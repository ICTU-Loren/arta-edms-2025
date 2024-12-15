@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                <div class="col-sm-6">
                    <h4 class="m-0">Edit Document</h4>
                    <span>DTS No. {{ $internals->dts }}{{ $documents->id }}</span>
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

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" style="margin-bottom:30px">
                          {{ $message }}
                        </div>
                    @endif

                  <!-- Default box -->
                  <div class="card card-outline card-info">
                    <div class="card-body">
                        
                    <form action="{{ route('iv.update',$documents->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-8 table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th style="width:25%">Title</th>
                                        <td><input type="text" name="doc_title" class="form-control" value="{{ $documents->doc_title }}">
                                             @error('doc_title')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                             @enderror</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td><textarea type="text" name="subject" class="form-control" row="4">{{ $documents->subject }}</textarea>
                                            @error('subject')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                             @enderror</td>
                                    </tr>
                                    <tr>
                                        <th>Document Type</th>
                                        <td><select name="doc_type" class="form-control">
                                                <option value="{{ $documents->doc_type }}" selected>{{ $documents->doc_type }}</option>
                                                <option value="Confidential">Confidential</option>
                                                <option value="Department Order">Department Order</option>
                                                <option value="E-mail">E-mail</option>
                                                <option value="Forms">Forms</option>
                                                <option value="Invitation">Invitation</option>
                                                <option value="Joint Memorandum Circular">Joint Memorandum Circular</option>
                                                <option value="Letter">Letter</option>
                                                <option value="Magazine">Magazine</option>
                                                <option value="Memorandum Circular">Memorandum Circular</option>
                                                <option value="News Print">News Print</option>
                                                <option value="Office Order">Office Order</option>
                                                <option value="Sealed">Sealed</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Document Date</th>
                                        <td><input type="text" name="text" class="form-control" value="{{ $documents->date_received }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>Uploaded file</th>
                                        <td><a href="{{ asset('/storage/'.$documents->filename) }}" target="_blank" ><input type="text" name="filename" class="form-control" value="{{ $documents->doc_title }}" disabled></a>
                                    </td>    

                                </table>
                            </div>

                            <div class="col-4 table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th style="width:35%">Status</th>
                                        <td><select name="status" class="form-control">
                                                <option value="{{ $documents->status }}" selected>{{ $documents->status }}</option>
                                                <option value="Open">Open</option>
                                                <option value="In-process">In-process</option>
                                                <option value="Closed">Closed</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Classification</th>
                                        <td><input type="text" name="" class="form-control" value="{{ $documents->doc_class }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>EDMS No.</th>
                                        <td><input type="text" name="" class="form-control" value="IN2025-01-000{{ $documents->id }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>Created by</th>
                                        <td><input type="text" name="name" class="form-control" value="{{ $documents->name }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>Date & Time created</th>
                                        <td><input type="text" name="" class="form-control" value="{{ $documents->created_at }}" disabled></td>
                                    </tr>

                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                            <button type="button" class="btn btn-secondary" onclick="goBack()">Cancel</button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                        </div>
                    </form>

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
