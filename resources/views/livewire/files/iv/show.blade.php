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
                        <h5 class="mr-0">Document Profile <span class="ml-2" style="font-size:18px;color:#737373;">eDMS No. {{ $internals->dts }}{{ $internals->id }}</span></h5>
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

                        <!-- Document Profile -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Overview tab -->
                                <div class="active tab-pane" id="summary">
                                    <div class="post">

                                        <div class="row">
                                            <!-- Right side -->
                                            <div class="col-lg-8 col-md-12 col-sm-12 table-responsive">
                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                           <p class="my-0 mb-0"><i class="fas fa-file-alt mr-2"></i> Document Details</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%">Addressed to</th>
                                                        <td>{{ $internals->personnel }} <br />
                                                        <span class="ml-0" style="font-size:14px;">
                                                            @if($internals->department > 0)
                                                                @if ($internals->department == '1')
                                                                        Office of the Director General (ODG)
                                                                    @elseif ($internals->department == '2')
                                                                        Office of the Deputy Director General for Administration & Finance (ODDGAF)
                                                                    @elseif ($internals->department == '3')
                                                                        Office of the Deputy Director General for Legal (ODDGL)
                                                                    @elseif ($internals->department == '4')
                                                                        Office of the Deputy Director General for Operations (ODDGO)
                                                                    @else ($internals->department == '5')
                                                                        All Offices
                                                                @endif <br />
                                                            @endif
                                                                
                                                            @if($internals->office > 0)
                                                                @if ($internals->office == '1')
                                                                        ODG
                                                                    @elseif ($internals->office == '2')
                                                                        Information and Public Relations Division (IPRD)
                                                                    @elseif ($internals->office == '3')
                                                                        ODDGAF
                                                                    @elseif ($internals->office == '4')
                                                                        Finance and Administrative Office (FAO)
                                                                    @elseif ($internals->office == '5')
                                                                        Information and Communications Technology Unit (ICTU)
                                                                    @elseif ($internals->office == '6')
                                                                        Planning Unit (PU)
                                                                    @elseif ($internals->office == '7')
                                                                        ODDGL
                                                                    @elseif ($internals->office == '8')
                                                                        Investigation, Enforcement and Litigation Office (IELO)
                                                                    @elseif ($internals->office == '9')
                                                                        Legal and Public Assistance Office (LPAO)
                                                                    @elseif ($internals->office == '10')
                                                                        ODDGO
                                                                    @elseif ($internals->office == '11')
                                                                        Better Regulations Office (BRO)
                                                                    @else ($internals->office == '12')
                                                                        Compliance Monitoring and Evaluation Office (CMEO)
                                                                        
                                                                @endif <br />
                                                            @endif

                                                            @if($internals->div_unit > 0)
                                                                {{ $internals->div_unit }}
                                                            @endif
                                                        </span></td>
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
                                                           <p class="my-0 mb-0"><i class="fas fa-info-circle"></i> Sending Details</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%">From</th>
                                                        <td>{{ $internals->s_name }} <br /> 
                                                        <span class="ml-0" style="font-size:14px;">{{ $internals->created_by_div_unit }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email Address</th>
                                                        <td>{{ $internals->s_email }}</td>
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

                                            <!-- Left side -->
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
                                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#indocstatusSave" data-whatever="@getbootstrap"><i class="fas fa-save mr-2"></i> Save</button>
                                                                    <!-- <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-save mr-2"></i> Save</button> -->
                                                                </td>
                                                                @else
                                                                <td style="width:40%;">
                                                                    <button type="submit" class="btn btn-secondary btn-sm" disabled><i class="fas fa-save mr-2"></i> Save</button>
                                                                </td>
                                                            @endif
                                                        </tr>

                                                        <!-- Modal for Doc Status Save Button -->
                                                        <div class="modal fade" id="indocstatusSave" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-danger">
                                                                        <h5 class="modal-title" id="ModalLabel">Document Status</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Do you want to save this status?</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary btn-sm close-btn float-right" data-dismiss="modal">Cancel</button>
                                                                        <button type="submit" class="btn btn-danger btn-sm"> Confirm</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </table>
                                                </form>

                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <th width="40%">Closed by</th>
                                                        <td>{{ $internals->modified_by }} <br /> 
                                                        <span class="ml-0" style="font-size:14px;">{{ $internals->modified_by_div_unit }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time modified</th>
                                                        <td>{{ $internals->updated_at }}</td>
                                                    </tr>
                                                </table>

                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#QRModal" data-whatever="@getbootstrap"><i class="fas fa-qrcode"></i> Generate QR Code</button>
                                                <!-- <a href="/files/iv/qr-code/{{ $internals->id }}" class="edit btn btn-primary"><i class="fas fa-qrcode"></i> Generate QR Code</i></a> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Route History Tab -->
                                <div class="tab-pane" id="route">
                                    @include('livewire.files.forward.inroute.show')
                                </div>

                            </div>
                        </div>
                        
                        <!-- Footer buttons -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Back</button>
                            
                            @if ($internals->status <> 'Closed')
                                    @if(Auth::check() && (Auth::user()->name == $internals->created_by))
                                        @if(count($inroute) > 0)
                                            <button type="button" class="btn btn-secondary btn-sm" disabled><i class="fas fa-share-square"></i> Add Route</button>
                                            @else <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-share-square"></i> Add Route</button>
                                        @endif
                                        @else <!-- <button type="button" class="btn btn-secondary btn-sm float-right" disabled><i class="fas fa-edit"></i> Update</button> -->
                                    @endif
                                @else <button type="button" class="btn btn-secondary btn-sm" disabled><i class="fas fa-share-square"></i> Add Route</button>
                            @endif

                            <!-- <div class="float-right">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle float-right" data-toggle="dropdown">
                                    <i class="fas fa-print"></i> Print
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="/files/iv/print/{{ $internals->id }}" class="btnprn btn"> Overview</a></li>
                                    <li class="dropdown-item"><a href="/files/forward/inroute/print/{{ $internals->id }}" class="btnprn btn"> Route History</a></li>
                                </ul>
                            </div> -->

                            <div class="float-right mr-1">
                                <a href="/files/iv/pdf/{{ $internals->id }}" class="edit btn btn-primary btn-sm" title="PDF"><i class="fas fa-file-download"></i> Export to PDF</a>
                            </div>

                        </div>

                        <!-- Modal for Add Route -->
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
