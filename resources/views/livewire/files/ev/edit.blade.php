@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                <div class="col-sm-6">
                    <h4 class="m-0">Edit Document</h4>
                    <span>DTS No. EX2021-00{{ $externals->id }}</span>
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
                        
                    <form action="{{ route('ev.update',$externals->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-8 table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th style="width:25%">Addressed to</th>
                                        <td><input type="text" name="personnel" class="form-control" value="{{ $externals->personnel }}">
                                             @error('doc_title')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                             @enderror</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td><textarea type="text" name="subject" class="form-control" row="4">{{ $externals->subject }}</textarea>
                                            @error('subject')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                             @enderror</td>
                                    </tr>
                                    <tr>
                                        <th>Document Type</th>
                                        <td><select name="doc_type" class="form-control">
                                                <option value="{{ $externals->doc_type }}" selected>{{ $externals->doc_type }}</option>
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
                                    <th>Date & Time received</th>
                                        <td><input type="text" name="" class="form-control" value="{{ $externals->date_received }} {{ $externals->time_received }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>From</th>
                                        <td><input type="text" name="s_name" class="form-control" value="{{ $externals->s_name }}">
                                            @error('s_name')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                            <select name="s_profile" class="form-control">
                                                <option value="{{ $externals->s_profile }}" selected>{{ $externals->s_profile }}</option>
                                                <option value="Government-Owned and Controlled Corporation (GOCC)">Government-Owned and Controlled Corporation (GOCC)</option>
                                                <option value="Local Government Unit (LGU)">Local Government Unit (LGU)</option>
                                                <option value="National Government Agency (NGA)">National Government Agency (NGA)</option>
                                                <option value="Private">Private</option>
                                                <option value="State Universities and Colleges (SUC)">State Universities and Colleges (SUC)</option>
                                            </select> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td><textarea type="text" name="s_address" class="form-control" row="4">{{ $externals->s_address }}</textarea>
                                            @error('s_address')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror</td>
                                        </td>
                                    </tr>
                                    <th>Mode of Delivery</th>
                                        <td>
                                        <select name="mod" class="form-control">
                                            <option value="{{ $externals->mod }}" selected>{{ $externals->mod }}</option>
                                            <option value="Courier">Courier</option>
                                            <option value="E-mail">E-mail</option>
                                            <option value="Messenger">Messenger</option>
                                            <option value="Personal">Personal</option>
                                            <option value="Snail Mail">Snail Mail</option>
                                        </select>
                                        </td>
                                    <tr>
                                    <th>Uploaded file</th>
                                        <td><a href="{{ asset('/storage/'.$externals->filename) }}" target="_blank" ><input type="text" name="filename" class="form-control" value="{{ $externals->doc_title }}" disabled></a>
                                    </td>    

                                </table>
                            </div>

                            <div class="col-4 table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th style="width:35%">Status</th>
                                        <td><select name="status" class="form-control">
                                                <option value="{{ $externals->status }}" selected>{{ $externals->status }}</option>
                                                <option value="Open">Open</option>
                                                <option value="In-process">In-process</option>
                                                <option value="Closed">Closed</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Classification</th>
                                        <td><input type="text" name="" class="form-control" value="{{ $externals->doc_class }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>DTS No.</th>
                                        <td><input type="text" name="" class="form-control" value="EX2021-00{{ $externals->id }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>Received byllll</th>
                                        <td><input type="text" name="name" class="form-control" value="{{ $externals->name }}" disabled></td>
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