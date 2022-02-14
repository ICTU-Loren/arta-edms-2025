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
                                <td>DTS No. IN2021-00{{ $internals->id }}</td>
                            </tr>
                            <tr>
                                <th>Document Status</th>
                                <td>{{ $internals->status }}</td>
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
                                    @if($internals->personnel > 0)
                                        {{ $internals->personnel }} <br />
                                    @endif
                                                                
                                    @if($internals->div_unit > 0)
                                        {{ $internals->div_unit }} <br />
                                    @endif
                                                                        
                                    @if($internals->office > 0)
                                        {{ $internals->office }} <br />
                                    @endif

                                    @if($internals->department > 0)
                                        {{ $internals->department }}
                                    @endif
                                </td>
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
                                <td>{{ $internals->comment }}</td>
                            </tr>
                        </table>
                                                        
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 table-responsive">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th width="25%">Modified by</th>
                                <td>{{ $internals->modified_by }} <br /> {{ $internals->modified_by_div_unit }}</td>
                            </tr>
                            <tr>
                                <th>Date & Time modified</th>
                                <td>{{ $internals->updated_at }}</td>
                            </tr>
                        </table>
                        
                    </div>
                </div>

            </div>
        </section>

        <!-- <div class="col-12">
            <img src="{{ asset('/images/footer-logo.jpg') }}" style="margin:100px 0;left:0;right:0;height:30px;width:100%;" alt="" title="">
        </div> -->

<script>
    function goBack() {
        window.history.back();
    }
</script>

<script>
  window.addEventListener("load", window.print());
</script>
 

@endsection