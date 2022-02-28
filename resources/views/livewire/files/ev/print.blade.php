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

                    <div class="col-12 mb-4">
                        <img src="{{ asset('/images/ARTA-OP.png') }}" style="top:-50px;width:250px;height:80px;float:right;margin-botton:30px;" alt="" title="">
                    </div>

                    <div class="col-7 table-responsive">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                <p class="my-0 mb-0">Document Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th>DTS No.</th>
                                <th>EX2022-00{{ $externals->id}}</th>
                            </tr>
                            <tr>
                                <th width="20%">Addressed to</th>
                                <td>
                                    @if($externals->personnel > 0)
                                        {{ $externals->personnel }} <br />
                                    @endif
                                    <span class="ml-0" style="font-size:14px;">
                                        @if($externals->department > 0)
                                            @if ($externals->department == '1')
                                                    Office of the Director General (ODG)
                                                @elseif ($externals->department == '2')
                                                    Office of the Deputy Director General for Administration & Finance (ODDGAF)
                                                @elseif ($externals->department == '3')
                                                    Office of the Deputy Director General for Legal (ODDGL)
                                                @else ($externals->department == '4')
                                                    Office of the Deputy Director General for Operations (ODDGO)
                                            @endif <br />
                                        @endif
                                                                    
                                        @if($externals->office > 0)
                                            @if ($externals->office == '1')
                                                Special Project Management Office (SPMO)        
                                                @elseif ($externals->office == '2')
                                                    Finance and Administrative Office (FAO)
                                                @elseif ($externals->office == '3')
                                                    Investigation, Enforcement and Litigation Office (IELO)     
                                                @elseif ($externals->office == '4')
                                                    Legal and Public Assistance Office (LPAO)       
                                                @elseif ($externals->office == '5')
                                                    Better Regulations Office (BRO)     
                                                @else ($externals->office == '6')
                                                    Compliance Monitoring and Evaluation Office (CMEO)
                                            @endif <br />
                                        @endif

                                        @if($externals->div_unit > 0)
                                            {{ $externals->div_unit }}
                                        @endif
                                    </span>
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
                                <p class="my-0 mb-0">Sender's Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th width="20%">Name</th>
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
                                    <p class="my-0 mb-0">Receiver's Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th width="20%">Received by</th>
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

                    <div class="col-5 table-responsive">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                    <p class="my-0 mb-0">ARTA-EDTS Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Document Status</th>
                                <td>{{ $externals->status }}</td>
                            </tr>
                            <tr>
                                <th width="30%">Created by</th>
                                <td>{{ $externals->created_by }}<br /> 
                                    <span class="ml-0" style="font-size:14px;"> {{ $externals->created_by_div_unit }}</td>
                            </tr>
                            <tr>
                                <th>Date & Time created</th>
                                <td>{{ $externals->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Closed by</th>
                                <td>{{ $externals->modified_by }}<br /> 
                                    <span class="ml-0" style="font-size:14px;">{{ $externals->modified_by_div_unit }}</td>
                            </tr>
                            <tr>
                                <th>Date & Time modified</th>
                                <td>{{ $externals->updated_at }}</td>
                            </tr>
                            <tr>
                                <th rowspan="2">URL</th>
                                <td><span class="">{!! QrCode::size(70)->backgroundColor(255,255,255)->generate('ARTA-EDTS URL:' .' http://127.0.0.1:8000/files/ev/'.$externals->id) !!}</span></td>
                            </tr>
                        </table>
                        
                    </div>
                </div>
            </div>
        </section>
         
        <br /><br /><br />

<script>
    function goBack() {
        window.history.back();
    }
</script>

<script>
  window.addEventListener("load", window.print());
</script>
 

@endsection