@extends('layouts.app')

@section('content')

        <style>
        .table td, .table th {
            color:#000;
        }
        </style>

       <!-- Content Header (Page header) -->
       <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h5 class="mr-0">Document Profile <span class="ml-2" style="font-size:18px;color:#737373;">DTS No. IN2021-00{{ $internals->id }}</span></h5>
                    </div><!-- /.col -->

                    <div class="col-sm-4" >
                        
                    </div>


                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{Session::get('message')}}
                        </div>
                      @endif

                      @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{ $message }}
                        </div>
                      @endif

                    <div class="card card-outline card-info">
                        <div class="card-header p-0 p-1 border-bottom-0">

                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#summary" data-toggle="tab">Overview</a></li>
                                <li class="nav-item"><a class="nav-link" href="#route" data-toggle="tab">Route History</a></li>
                            </ul>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Summary Start -->
                                <div class="active tab-pane" id="summary">
                                    <!-- Post -->
                                    <div class="post">

                                        <div class="row">
                                            <div class="col-lg-8 col-md-12 col-sm-12 table-responsive">
                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                           <p class="my-0 mb-0"><i class="fas fa-file-alt mr-2"></i> Document Details</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%">Addressed to</th>
                                                        <td>{{ $internals->personnel }} <br /> {{ $internals->div_unit }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Subject</th>
                                                        <td>{{ $internals->subject }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Classification</th>
                                                        <td>{{ $internals->doc_class }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Type</th>
                                                        <td>{{ $internals->doc_type }}</td>
                                                    </tr>
                                                </table>
                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                           <p class="my-0 mb-0"><i class="fas fa-user-tie mr-2"></i> Sender's Details</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%">From</th>
                                                        <td>{{ $internals->s_name }} <br \> {{ $internals->s_address }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>{{ $internals->s_email }} <br /> {{ $internals->s_contact }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time Sent</th>
                                                        <td>{{ $internals->created_at }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Mode of Transmittal</th>
                                                        <td>{{ $internals->mode_of_trans }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Remarks</th>
                                                        <td height="100px">{{ $internals->comment }}</td>
                                                    </tr>
                                                </table>
                                                
                                            </div>

                                            <div class="col-lg-4 col-md-12 col-sm-12 table-responsive">
                                                <form action="{{ route('iv.update',$internals->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <table class="table table-bordered table-striped">
                                                        <tr>
                                                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                                <p class="my-0 mb-0">
                                                                    @if ($internals->status <> 'Closed')
                                                                        <i class="fas fa-folder-open mr-2"></i>
                                                                        @else
                                                                            <i class="fas fa-folder mr-2"></i>
                                                                    @endif

                                                                Document Status</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            @if ($internals->status <> 'Closed')
                                                            <td><select name="status" class="form-control">
                                                                    <option value="{{ $internals->status }}" selected>{{ $internals->status }}</option>
                                                                    <option value="Open">Open</option>
                                                                    <option value="Closed">Closed</option>
                                                                </select>
                                                            </td>
                                                            @else
                                                            <td><select name="status" class="form-control" disabled>
                                                                    <option value="{{ $internals->status }}" selected>{{ $internals->status }}</option>
                                                                </select>
                                                            </td>
                                                            @endif
                                                            @if ($internals->status <> 'Closed')
                                                                <td style="width:40%;">
                                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-save mr-2"></i> Save</button>
                                                                </td>
                                                                @else
                                                                <td style="width:40%;">
                                                                    <button type="submit" class="btn btn-secondary btn-sm" disabled><i class="fas fa-save mr-2"></i> Save</button>
                                                                </td>
                                                            @endif
                                                        </tr>
                                                        
                                                    </table>
                                                </form>

                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <th width="40%">Modified by</th>
                                                        <td>{{ $internals->title }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time modified</th>
                                                        <td>{{ $internals->updated_at }}</td>
                                                    </tr>
                                                </table>

                                                <!-- <a href="/files/iv/qr-code/{{ $internals->id }}" class="edit btn btn-primary"><i class="fas fa-qrcode"></i> Generate QR Code</i></a> -->
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#QRModal" data-whatever="@getbootstrap"><i class="fas fa-qrcode"></i> Generate QR Code</button>

                                            </div>

                                        </div>

                                    </div>
                                    <!-- /.post -->
                                </div>
                                <!-- /.Summary-tab-pane -->

                                <!-- Route Start -->
                                <div class="tab-pane" id="route">
                                    @include('livewire.files.forward.inroute.show')
                                </div>
                                <!-- /.Route-tab-pane -->

                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Back</button>
                            
                            @if ($internals->status <> 'Closed')
                                    @if(Auth::check() && (Auth::user()->name == $internals->created_by))
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-share-square"></i> Add Route</button>
                                        @else <!-- <button type="button" class="btn btn-secondary btn-sm float-right" disabled><i class="fas fa-edit"></i> Update</button> -->
                                    @endif
                                @else <button type="button" class="btn btn-secondary btn-sm" disabled><i class="fas fa-share-square"></i> Add Route</button>
                            @endif

                            <div class="float-right">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle float-right" data-toggle="dropdown">
                                    <i class="fas fa-print"></i> Print
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="/files/iv/print/{{ $internals->id }}" class="btnprn btn"> Overview</a></li>
                                    <li class="dropdown-item"><a href="/files/forward/inroute/print/{{ $internals->id }}" class="btnprn btn"> Route History</a></li>
                                </ul>
                            </div>

                            <div class="float-right mr-1">
                                <a href="/files/iv/pdf/{{ $internals->id }}" class="edit btn btn-primary btn-sm" title="PDF"><i class="fas fa-file-download"></i> Export to PDF</a>
                            </div>

                        </div>
                        <!-- Modal for Forward To -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">ADD ROUTE</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    @livewire('files.forward.forward-in-docs')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for QR Code -->
                        <div class="modal fade" id="QRModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">GENERATE QR CODE</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        @include('livewire.files.iv.qrcode')

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.col -->

                <br>
            </div>
        </div>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>

@endsection