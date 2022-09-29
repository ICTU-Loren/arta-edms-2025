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

    @if(count($inroute) > 0)

        <section class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-12 mb-3">
                        <img src="{{ asset('/images/ARTA-OP.png') }}" style="top:-50px;width:250px;height:80px;float:right;margin-botton:30px;" alt="" title="">
                    </div>

                    @foreach ($inroute as $inroute)

                        @if($inroute->open_at > 0)
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th width="25%">DTS No.</th>
                                        <td>{{ $inroute->dts }}{{ $inroute->dts_no }}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%">Assigned to</th>
                                        <td>{{ $inroute->personnel }} <br />
                                            <span class="ml-0" style="font-size:14px;">
                                            @if($inroute->department > 0)
                                                @if ($inroute->department == '1')
                                                        ODG
                                                    @elseif ($inroute->department == '2')
                                                        ODDGAF
                                                    @elseif ($inroute->department == '3')
                                                        ODDGL
                                                    @else ($inroute->department == '4')
                                                        ODDGO
                                                @endif /
                                            @endif
                                                                                
                                            @if($inroute->office > 0)
                                                @if ($inroute->office == '1')
                                                    ODG - Personnel
                                                    @elseif ($inroute->office == '2')
                                                        PRU
                                                    @elseif ($inroute->office == '3')
                                                        ODDGAF - Personnel
                                                    @elseif ($inroute->office == '4')
                                                        FAO
                                                    @elseif ($inroute->office == '5')
                                                        ICTU
                                                    @elseif ($inroute->office == '6')
                                                        PU
                                                    @elseif ($inroute->office == '7')
                                                        ODDGL - Personnel
                                                    @elseif ($inroute->office == '8')
                                                        IELO
                                                    @elseif ($inroute->office == '9')
                                                        LPAO
                                                    @elseif ($inroute->office == '10')
                                                        ODDGO - Personnel
                                                    @elseif ($inroute->office == '11')
                                                        BRO
                                                    @else ($inroute->office == '12')
                                                        CMEO
                                                @endif /
                                            @endif

                                            @if($inroute->div_unit > 0)
                                                @if ($inroute->div_unit == '1')
                                                Head Executive Assistant (HEA)
                                                @elseif ($inroute->div_unit == '2')
                                                    Executive Assistant (EA)
                                                @elseif ($inroute->div_unit == '3')
                                                    Administrative Officer
                                                @elseif ($inroute->div_unit == '4')
                                                    PRU - Personnel
                                                @elseif ($inroute->div_unit == '5')
                                                    Executive Assistant (EA)
                                                @elseif ($inroute->div_unit == '6')
                                                    Administrative Officer
                                                @elseif ($inroute->div_unit == '7')
                                                    Director
                                                @elseif ($inroute->div_unit == '8')
                                                    Administrative Officer
                                                @elseif ($inroute->div_unit == '9')
                                                    Finance Division
                                                @elseif ($inroute->div_unit == '10')
                                                    General Services Division (GSD)
                                                @elseif ($inroute->div_unit == '11')
                                                    Human Resource Development Division (HRDD)
                                                @elseif ($inroute->div_unit == '12')
                                                    ICTU - Personnel
                                                @elseif ($inroute->div_unit == '13')
                                                    PU - Personnel
                                                @elseif ($inroute->div_unit == '14')
                                                    Executive Assistant (EA)
                                                @elseif ($inroute->div_unit == '15')
                                                    Administrative Officer
                                                @elseif ($inroute->div_unit == '16')
                                                    Director
                                                @elseif ($inroute->div_unit == '17')
                                                    Administrative Officer
                                                @elseif ($inroute->div_unit == '18')
                                                    Investigation and Enforcement Division (IED)
                                                @elseif ($inroute->div_unit == '19')
                                                    Litigation Division
                                                @elseif ($inroute->div_unit == '20')
                                                    Director
                                                @elseif ($inroute->div_unit == '21')
                                                    Administrative Officer
                                                @elseif ($inroute->div_unit == '22')
                                                    Legal Division
                                                @elseif ($inroute->div_unit == '23')
                                                    Public Assistance Division (PAD)
                                                @elseif ($inroute->div_unit == '24')
                                                    Executive Assistant (EA)
                                                @elseif ($inroute->div_unit == '25')
                                                    Administrative Officer
                                                @elseif ($inroute->div_unit == '26')
                                                    Director
                                                @elseif ($inroute->div_unit == '27')
                                                    Administrative Officer
                                                @elseif ($inroute->div_unit == '28')
                                                    Better Regulation Division A (BRD A)
                                                @elseif ($inroute->div_unit == '29')
                                                    Better Regulation Division B (BRD B)
                                                @elseif ($inroute->div_unit == '30')
                                                    Better Regulation Division C (BRD C)
                                                @elseif ($inroute->div_unit == '31')
                                                    Better Regulation Division D (BRD D)
                                                @elseif ($inroute->div_unit == '32')
                                                    Doing Business Division (DBD)
                                                @elseif ($inroute->div_unit == '33')
                                                    Regulatory Management and Training Division (RMTD)
                                                @elseif ($inroute->div_unit == '34')
                                                    Director
                                                @elseif ($inroute->div_unit == '35')
                                                    Administrative Officer
                                                @elseif ($inroute->div_unit == '36')
                                                    Compliance Monitoring and Evaluation Division A (CMED A)
                                                @elseif ($inroute->div_unit == '37')
                                                    Compliance Monitoring and Evaluation Division B (CMED B)
                                                @elseif ($inroute->div_unit == '38')
                                                    Compliance Monitoring and Evaluation Division C (CMED C)
                                                @else ($inroute->div_unit == '39')
                                                    Compliance Monitoring and Evaluation Division D (CMED D)
                                                @endif
                                            @endif
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Action Required</th>
                                        <td>{{ $inroute->action_req }}</td>
                                    </tr>
                                    <tr>
                                        <th>Due Date</th>
                                        <td>{{ $inroute->due_date }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mode of Transmittal</th>
                                        <td>{{ $inroute->modeoftrans }}</td>
                                    </tr>
                                    <tr>
                                        <th>File Upload</th>
                                        <td>@if($inroute->file_upload > 0)
                                            @if(Auth::check() && (Auth::user()->name == $inroute->personnel))
                                                <a href="{{ asset('/storage/'.$inroute->file_upload) }}" target="_blank" ><i>private</i></a>
                                                    @else <i>private</i>
                                            @endif
                                        @endif</td>
                                    </tr>
                                    <tr>
                                        <th>SharePoint Link</th>
                                        <td>@if($inroute->sharepoint_link > 0)
                                            @if(Auth::check() && (Auth::user()->name == $inroute->personnel))
                                                <a href="{{ $inroute->sharepoint_link }}" target="_blank" ><i>private</i></a>
                                                    @else <i>private</i>
                                            @endif
                                        @endif</td>
                                    </tr>
                                    <tr>
                                        <th>Note / Comment</th>
                                        <td>{{ $inroute->note_comment_routed }}</td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 table-responsive">

                                @if(Auth::check() && (Auth::user()->name == $inroute->personnel))
                                <form action="{{ route('forward.inroute.update',$inroute->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                <p class="my-0 mb-0">To be filled out by the Assigned Personnel</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="35%">Status</th>
                                            <td>{{ $inroute->status }}</td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                            <td>{{ $inroute->outgoing }}</td>
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td>{{ $inroute->note_comment_personnel }}</td>
                                        </tr>
                                        <tr>
                                            <th>Last modified</th>
                                            <td>{{ $inroute->modified_at }}</td>
                                        </tr>
                                        <tr>
                                            <th>Opened at</th>
                                            <td>{{ $inroute->open_at }}</td>
                                        </tr>
                                    </table>

                                    @else   
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                <p class="my-0 mb-0">To be filled out by the Assigned Personnel</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="35%">Status</th>
                                            <td>{{ $inroute->status }}</td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                            <td>{{ $inroute->outgoing }}</td>
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td>{{ $inroute->note_comment_personnel }}</td>
                                        </tr>
                                        <tr>
                                            <th>Last modified</th>
                                            <td>{{ $inroute->modified_at }}</td>
                                        </tr>
                                        <tr>
                                            <th>Opened at</th>
                                            <td>{{ $inroute->open_at }}</td>
                                        </tr>
                                    </table>
                                </form>
                                @endif

                            </div>

                            @else
                            
                                @if(Auth::check() && (Auth::user()->name == $inroute->personnel))
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <form action="{{ route('forward.inroute.open',$inroute->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        
                                        <div class="callout callout-light col-lg-12 col-md-12 col-sm-12" align="center">
                                            <h5>This route has not yet been open.</h5>
                                            <p>Assigned to {{ $inroute->personnel }} ({{ $inroute->div_unit }})</p>
                                        </div>
                                    </form>
                                </div>
                                @endif

                        @endif

                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-2">
                            <p class="my-0" style="color:#BFBFBF;"><i class="fas fa-level-up-alt fa-lg"></i> <span class="text-muted well well-sm shadow-none ml-3" style="font-size:15px;">Routed at: <strong>{{ $inroute->created_at }}</strong> / by <strong>{{ $inroute->routed_by }}</strong> ({{ $inroute->routed_by_div_unit }})</span></p>
                        </div>

                    @endforeach

                </div>

            </div>
        </section>

        @else
            <p class="ml-4">No Route History.</p>
    @endif

    <br /><br />

<script>
    function goBack() {
        window.history.back();
    }
</script>

<script>
  window.addEventListener("load", window.print());
</script>

@endsection