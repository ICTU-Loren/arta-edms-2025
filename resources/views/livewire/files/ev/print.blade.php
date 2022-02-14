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

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 mb-3">
                        <img src="{{ asset('/images/ARTA-OP.png') }}" style="top:-50px;width:250px;height:80px;float:right;margin-botton:30px;" alt="" title="">
                    </div>

                    <div class="col-lg-8 col-md-12 col-sm-12 table-responsive">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th width="25%">DTS No.</th>
                                <td>DTS No. EX2021-00{{ $externals->id }}</td>
                            </tr>
                            <tr>
                                <th>Document Status</th>
                                <td>{{ $externals->status }}</td>
                            </tr>
                        </table>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                <p class="my-0 mb-0"><i class="fas fa-file-alt mr-2"></i> Document Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Addressed to</th>
                                <td>
                                    @if($externals->personnel > 0)
                                        {{ $externals->personnel }} <br />
                                    @endif
                                                                
                                    @if($externals->div_unit > 0)
                                        {{ $externals->div_unit }} <br />
                                    @endif
                                                                        
                                    @if($externals->office > 0)
                                        {{ $externals->office }} <br />
                                    @endif

                                    @if($externals->department > 0)
                                        {{ $externals->department }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{ $externals->subject }}</td>
                            </tr>
                            <tr>
                                <th>Classification</th>
                                <td>{{ $externals->doc_class }}</td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td>{{ $externals->doc_type }}</td>
                            </tr>
                        </table>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                <p class="my-0 mb-0"><i class="fas fa-user-tie mr-2"></i> Sender's Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Name</th>
                                <td>{{ $externals->s_name }}</td>
                            </tr>
                            <tr>
                                <th>Profile</th>
                                <td>{{ $externals->s_profile }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $externals->s_address }}</td>
                            </tr>
                            <tr>
                                <th>Contact Details</th>
                                <td>{{ $externals->s_email }} <br /> {{ $externals->s_contact }}</td>
                            </tr>
                            <tr>
                                <th>Mode of Transmittal</th>
                                <td>{{ $externals->mode_of_trans }}</td>
                            </tr>
                        </table>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                    <p class="my-0 mb-0"><i class="fas fa-user-edit mr-2"></i> Receiver's Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Received by</th>
                                <td>{{ $externals->received_by }} <br /> {{ $externals->received_by_div_unit }}</td>
                            </tr>
                            <tr>
                                <th>Date & Time received</th>
                                <td>{{ $externals->date_received }} {{ $externals->time_received }}</td>
                            </tr>
                            <tr>
                                <th>Remarks</th>
                                <td>{{ $externals->comment }}</td>
                            </tr>
                        </table>
                                                        
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 table-responsive">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th width="25%">Created by</th>
                                <td>{{ $externals->created_by }} <br /> {{ $externals->created_by_div_unit }}</td>
                            </tr>
                            <tr>
                                <th>Date & Time created</th>
                                <td>{{ $externals->created_at }}</td>
                            </tr>
                        </table>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th width="25%">Modified by</th>
                                <td>{{ $externals->modified_by }} <br /> {{ $externals->modified_by_div_unit }}</td>
                            </tr>
                            <tr>
                                <th>Date & Time modified</th>
                                <td>{{ $externals->updated_at }}</td>
                            </tr>
                        </table>
                        
                    </div>
                </div>
            </div>
        </section>

<script>
    function goBack() {
        window.history.back();
    }
</script>

<script>
  window.addEventListener("load", window.print());
</script>
 

@endsection