@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h4 class="m-0">Print Preview</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-secondary float-right" onclick="goBack()">Back</button>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

    @if(count($exroute) > 0)

        <section class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-12 mb-3">
                        <img src="{{ asset('/images/ARTA-OP.png') }}" style="top:-50px;width:250px;height:80px;float:right;margin-botton:30px;" alt="" title="">
                    </div>

                    @foreach ($exroute as $exroute)

                        @if($exroute->open_at > 0)

                            <div class="col-lg-8 col-md-12 col-sm-12 table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th width="25%">DTS No.</th>
                                        <td>DTS No. EX2021-00{{ $exroute->dts_no }}</td>
                                    </tr>
                                </table>

                                <table class="table table-bordered table-striped">
                                    <!-- <tr>
                                        <th width="25%">Control Number</th>
                                        <td>{{ request()->route('id') }}</td>
                                    </tr> -->
                                        <tr>
                                            <th width="25%">Assigned to</th>
                                            <td>{{ $exroute->personnel }} <br /> {{ $exroute->div_unit }}</td>
                                        </tr>
                                        <tr>
                                            <th>Action Required</th>
                                            <td>{{ $exroute->action_req }}</td>
                                        </tr>
                                        <tr>
                                            <th>Due Date</th>
                                            <td>{{ $exroute->due_date }}</td>
                                        </tr>
                                        <tr>
                                            <th>Mode of Transmittal</th>
                                            <td>{{ $exroute->modeoftrans }}</td>
                                        </tr>
                                        <tr>
                                            <th>File Upload</th>
                                            @if(Auth::check() && (Auth::user()->name == $exroute->personnel))
                                                <td><a href="{{ asset('/storage/'.$exroute->file_upload) }}" target="_blank" >View</a></td>
                                                    @else <td>View</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td>{{ $exroute->note_comment }}</td>
                                        </tr>
                                </table>
                            </div>
                            
                            <div class="col-lg-4 col-md-12 col-sm-12 table-responsive">
                                <!-- <table class="table table-bordered table-striped">
                                    <tr>
                                        <th width="35%">Open at</th>
                                        <td>{{ $exroute->open_at }}</td>
                                    </tr>
                                </table> -->

                                @if(Auth::check() && (Auth::user()->name == $exroute->personnel))
                                <form action="{{ route('forward.exroute.update',$exroute->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                <p class="my-0 mb-0"><i class="fas fa-edit mr-2"></i> To be filled out by the Assigned Personnel</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width:25%">Status</th>
                                            <td>{{ $exroute->status }}</td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                                <td>{{ $exroute->doc_class }}</td>
                                            <tr>
                                                <th>Last modified</th>
                                                <td>{{ $exroute->modified_at }}</td>
                                            </tr>
                                        </tr>
                                        <!-- <tr>
                                            <th>Date & Time Received</th>
                                            <td>
                                                <input type="text" name="sent_date" id="sent_date" class="form-control" placeholder="mm/dd/yy" value="{{ $exroute->sent_date }}">
                                                    @error('sent_date')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                <input type="text" name="sent_time" id="sent_time" class="form-control" placeholder="--:-- --" value="{{ $exroute->sent_time }}">
                                                    @error('sent_time')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </td>
                                        </tr> -->
                                    </table>

                                    @else   
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                <p class="my-0 mb-0"><i class="fas fa-edit mr-2"></i> To be filled out by the Assigned Personnel</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="25%">Status</th>
                                            <td>{{ $exroute->status }}</td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                            <td>{{ $exroute->doc_class }}</td>
                                        </tr>
                                        <tr>
                                            <th>Last modified</th>
                                            <td>{{ $exroute->modified_at }}</td>
                                        </tr>
                                    </table>
                                </form>
                                @endif

                                <div class="mb-4 mt-0">
                                    <p class="my-0" style="color:#D9D9D9;"><span class="text-muted well well-sm shadow-none" style="font-size:13px;font-style:italic;">Opened at: {{ $exroute->open_at }}</span></p>
                                </div>

                            </div>

                            @else
                            
                                @if(Auth::check() && (Auth::user()->name == $exroute->personnel))
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <form action="{{ route('forward.exroute.open',$exroute->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        
                                            <div class="callout callout-light" align="center">
                                                <h5>This document has been assigned to you.</h5>
                                                    <p>Open to see new details.</p>
                                                    <div class="col-lg-2 col-md-6 col-sm-6 mt-4">
                                                        <button type="submit" class="btn btn-danger btn-block btn-sm"><i class="fas fa-envelope-open-text mr-2"></i> Open</button>
                                                    </div>
                                            </div>
                                    </form>
                                </div>
                                    @else
                                    <div class="callout callout-light col-lg-12 col-md-12 col-sm-12" align="center">
                                        <h5>This route has not yet been open.</h5>
                                        <p>Assigned to {{ $exroute->personnel }} ({{ $exroute->div_unit }})</p>
                                    </div>
                                @endif

                        @endif

                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-2">
                            <p class="my-0" style="color:#D9D9D9;"><i class="fas fa-level-up-alt fa-lg"></i> <span class="text-muted well well-sm shadow-none ml-3" style="font-size:13px;font-style:italic;">Routed at: {{ $exroute->created_at }} / by {{ $exroute->routed_by }} ({{ $exroute->routed_by_div_unit }})</span></p>
                        </div>

                    @endforeach

                </div>

            </div>
        </section>

        @else
            <p class="ml-4">No Route History.</p>
    @endif

<script>
    function goBack() {
        window.history.back();
    }
</script>

<script>
  window.addEventListener("load", window.print());
</script>

@endsection