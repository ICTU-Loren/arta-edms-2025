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

                    <div class="col-7 table-responsive">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                <p class="my-0 mb-0">Document Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th>DTS No.</th>
                                <th>IN2022-00{{ $internals->id}}</th>
                            </tr>
                            <tr>
                                <th width="20%">Addressed to</th>
                                <td>
                                    @if($internals->personnel > 0)
                                        {{ $internals->personnel }} <br />
                                    @endif
                                    <span class="ml-0" style="font-size:14px;">
                                        @if($internals->department > 0)
                                            @if ($internals->department == '1')
                                                    Office of the Director General (ODG)
                                                @elseif ($internals->department == '2')
                                                    Office of the Deputy Director General for Administration & Finance (ODDGAF)
                                                @elseif ($internals->department == '3')
                                                    Office of the Deputy Director General for Legal (ODDGL)
                                                @else ($internals->department == '4')
                                                    Office of the Deputy Director General for Operations (ODDGO)
                                            @endif <br />
                                        @endif
                                                                    
                                        @if($internals->office > 0)
                                            @if ($internals->office == '1')
                                                Special Project Management Office (SPMO)        
                                                @elseif ($internals->office == '2')
                                                    Finance and Administrative Office (FAO)
                                                @elseif ($internals->office == '3')
                                                    Investigation, Enforcement and Litigation Office (IELO)     
                                                @elseif ($internals->office == '4')
                                                    Legal and Public Assistance Office (LPAO)       
                                                @elseif ($internals->office == '5')
                                                    Better Regulations Office (BRO)     
                                                @else ($internals->office == '6')
                                                    Compliance Monitoring and Evaluation Office (CMEO)
                                            @endif <br />
                                        @endif

                                        @if($internals->div_unit > 0)
                                            {{ $internals->div_unit }}
                                        @endif
                                    </span>
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
                                   <p class="my-0 mb-0">Sending Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th width="20%">From</th>
                                <td>{{ $internals->s_name }} <br /> 
                                    <span class="ml-0" style="font-size:14px;"> {{ $internals->created_by_div_unit }}</td>
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
                                <td>{{ $internals->comment }}</td>
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
                                <th width="30%">Closed by</th>
                                <td>{{ $internals->modified_by }}}<br /> 
                                    <span class="ml-0" style="font-size:14px;">{{ $internals->modified_by_div_unit }}</td>
                            </tr>
                            <tr>
                                <th>Date & Time modified</th>
                                <td>{{ $internals->updated_at }}</td>
                            </tr>
                            <tr>
                                <th rowspan="2">URL</th>
                                <td><span class="">{!! QrCode::size(70)->backgroundColor(255,255,255)->generate('ARTA-EDTS URL:' .' http://127.0.0.1:8000/files/iv/'.$internals->id) !!}</span></td>
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