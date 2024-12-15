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
                        <!-- <button type="button" class="btn btn-secondary float-right" onclick="goBack()">Back</button> -->
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
                        <button type="button" class="btn btn-secondary mt-3" onclick="goBack()">Back</button>
                        <img src="{{ asset('/images/ARTA-OP.png') }}" style="top:-50px;width:250px;height:80px;float:right;margin-botton:30px;" alt="" title="">
                    </div>

                    @foreach ($inroute as $inroute)

                        @if($inroute->open_at > 0)
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th width="25%">eDMS No.</th>
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
                                                        IPRD
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
                                                        HEA
                                                    @elseif ($inroute->div_unit == '2')
                                                        EA
                                                    @elseif ($inroute->div_unit == '3')
                                                        AA
                                                    @elseif ($inroute->div_unit == '4')
                                                        PO
                                                    @elseif ($inroute->div_unit == '5')
                                                        IO
                                                    @elseif ($inroute->div_unit == '6')
                                                        PO
                                                    @elseif ($inroute->div_unit == '7')
                                                        EA
                                                    @elseif ($inroute->div_unit == '8')
                                                        AA
                                                    @elseif ($inroute->div_unit == '9')
                                                        PO
                                                    @elseif ($inroute->div_unit == '10')
                                                        FAO-OD
                                                    @elseif ($inroute->div_unit == '11')
                                                        AA
                                                    @elseif ($inroute->div_unit == '12')
                                                        PO
                                                    @elseif ($inroute->div_unit == '13')
                                                        FD
                                                    @elseif ($inroute->div_unit == '14')
                                                        GSD
                                                    @elseif ($inroute->div_unit == '15')
                                                        HRDD
                                                    @elseif ($inroute->div_unit == '16')
                                                        ITO
                                                    @elseif ($inroute->div_unit == '17')
                                                        PO
                                                    @elseif ($inroute->div_unit == '18')
                                                        PlanOff
                                                    @elseif ($inroute->div_unit == '19')
                                                        EA
                                                    @elseif ($inroute->div_unit == '20')
                                                        AA
                                                    @elseif ($inroute->div_unit == '21')
                                                        PO
                                                    @elseif ($inroute->div_unit == '22')
                                                        IELO-OD
                                                    @elseif ($inroute->div_unit == '23')
                                                        AA
                                                    @elseif ($inroute->div_unit == '24')
                                                        PO
                                                    @elseif ($inroute->div_unit == '25')
                                                        IED
                                                    @elseif ($inroute->div_unit == '26')
                                                        LitDiv
                                                    @elseif ($inroute->div_unit == '27')
                                                        LPAO-OD
                                                    @elseif ($inroute->div_unit == '28')
                                                        AA
                                                    @elseif ($inroute->div_unit == '29')
                                                        PO
                                                    @elseif ($inroute->div_unit == '30')
                                                        LegDiv
                                                    @elseif ($inroute->div_unit == '31')
                                                        PAD
                                                    @elseif ($inroute->div_unit == '32')
                                                        EA
                                                    @elseif ($inroute->div_unit == '33')
                                                        AA
                                                    @elseif ($inroute->div_unit == '34')
                                                        PO
                                                    @elseif ($inroute->div_unit == '35')
                                                        BRO-OD
                                                    @elseif ($inroute->div_unit == '36')
                                                        AA
                                                    @elseif ($inroute->div_unit == '37')
                                                        PO
                                                    @elseif ($inroute->div_unit == '38')
                                                        BRO A
                                                    @elseif ($inroute->div_unit == '39')
                                                        BRO B
                                                    @elseif ($inroute->div_unit == '40')
                                                        BRO C
                                                    @elseif ($inroute->div_unit == '41')
                                                        BRO D
                                                    @elseif ($inroute->div_unit == '42')
                                                        DBD
                                                    @elseif ($inroute->div_unit == '43')
                                                        RMTD
                                                    @elseif ($inroute->div_unit == '44')
                                                        CMEO-OD
                                                    @elseif ($inroute->div_unit == '45')
                                                        AA
                                                    @elseif ($inroute->div_unit == '46')
                                                        PO
                                                    @elseif ($inroute->div_unit == '47')
                                                        CMEO A
                                                    @elseif ($inroute->div_unit == '48')
                                                        CMEO B
                                                    @elseif ($inroute->div_unit == '49')
                                                        CMEO C
                                                    @else ($inroute->div_unit == '50')
                                                        CMEO D
                                                @endif
                                            @endif
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Remarks / Instructions</th>
                                        <td>{{ $inroute->note_comment_routed }}</td>
                                    </tr>
                                    <tr>
                                        <th>Action Requested</th>
                                        <td>{{ $inroute->action_req }}</td>
                                    </tr>
                                    <tr>
                                        <th>Deadlinee</th>
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
