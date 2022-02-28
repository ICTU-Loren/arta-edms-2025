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
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th width="25%">DTS No.</th>
                                        <td>EX2021-00{{ $exroute->dts_no }}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%">Assigned to</th>
                                        <td>{{ $exroute->personnel }} <br />
                                            <span class="ml-0" style="font-size:14px;">
                                            @if($exroute->department > 0)
                                                @if ($exroute->department == '1')
                                                        ODG
                                                    @elseif ($exroute->department == '2')
                                                        ODDGAF
                                                    @elseif ($exroute->department == '3')
                                                        ODDGL
                                                    @else ($exroute->department == '4')
                                                        ODDGO
                                                @endif /
                                            @endif
                                                                                
                                            @if($exroute->office > 0)
                                                @if ($exroute->office == '1')
                                                    SPMO
                                                    @elseif ($exroute->office == '2')
                                                        FAO
                                                    @elseif ($exroute->office == '3')
                                                        IELO
                                                    @elseif ($exroute->office == '4')
                                                        LPAO
                                                    @elseif ($exroute->office == '5')
                                                        BRO
                                                    @else ($exroute->office == '6')
                                                        CMEO
                                                @endif /
                                            @endif

                                            @if($exroute->div_unit > 0)
                                                @if ($exroute->div_unit == '1')
                                                    Security and Intelligence
                                                    @elseif ($exroute->div_unit == '2')
                                                        Special Project Management Teams (SPMT)
                                                    @elseif ($exroute->div_unit == '3')
                                                        Finance Division
                                                    @elseif ($exroute->div_unit == '4')
                                                        General Services Division (GSD)
                                                    @elseif ($exroute->div_unit == '5')
                                                        Human Resource Development Division (HRDD)
                                                    @elseif ($exroute->div_unit == '6')
                                                        Information and Communications Technology Unit (ICTU)
                                                    @elseif ($exroute->div_unit == '7')
                                                        Public Relations Unit (PRU)
                                                    @elseif ($exroute->div_unit == '8')
                                                        Investigation and Enforcement Division (IED)
                                                    @elseif ($exroute->div_unit == '9')
                                                        Litigation Division
                                                    @elseif ($exroute->div_unit == '10')
                                                        Legal Division
                                                    @elseif ($exroute->div_unit == '11')
                                                        Public Assistance Division (PAD)
                                                    @elseif ($exroute->div_unit == '12')
                                                        Better Regulation Division A (BRD A)
                                                    @elseif ($exroute->div_unit == '13')
                                                        Better Regulation Division B (BRD B)
                                                    @elseif ($exroute->div_unit == '14')
                                                        Better Regulation Division C (BRD C)
                                                    @elseif ($exroute->div_unit == '15')
                                                        Better Regulation Division D (BRD D)
                                                    @elseif ($exroute->div_unit == '16')
                                                        Compliance Monitoring and Evaluation Division A (CMED A)
                                                    @elseif ($exroute->div_unit == '17')
                                                        Compliance Monitoring and Evaluation Division B (CMED B)
                                                    @elseif ($exroute->div_unit == '18')
                                                        Compliance Monitoring and Evaluation Division C (CMED C)
                                                    @else ($exroute->div_unit == '19')
                                                        Compliance Monitoring and Evaluation Division D (CMED D)
                                                @endif
                                            @endif
                                            </span>
                                        </td>
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
                                        <td>@if($exroute->file_upload > 0)
                                            @if(Auth::check() && (Auth::user()->name == $exroute->personnel))
                                                <a href="{{ asset('/storage/'.$exroute->file_upload) }}" target="_blank" ><i>private</i></a>
                                                    @else <i>private</i>
                                            @endif
                                        @endif</td>
                                    </tr>
                                    <tr>
                                        <th>SharePoint Link</th>
                                        <td>@if($exroute->sharepoint_link > 0)
                                            @if(Auth::check() && (Auth::user()->name == $exroute->personnel))
                                                <a href="{{ $exroute->sharepoint_link }}" target="_blank" ><i>private</i></a>
                                                    @else <i>private</i>
                                            @endif
                                        @endif</td>
                                    </tr>
                                    <tr>
                                        <th>Note / Comment</th>
                                        <td>{{ $exroute->note_comment_routed }}</td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 table-responsive">

                                @if(Auth::check() && (Auth::user()->name == $exroute->personnel))
                                <form action="{{ route('forward.exroute.update',$exroute->id) }}" method="POST" enctype="multipart/form-data">
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
                                            <td>{{ $exroute->status }}</td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                            <td>{{ $exroute->outgoing }}</td>
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td>{{ $exroute->note_comment_personnel }}</td>
                                        </tr>
                                        <tr>
                                            <th>Last modified</th>
                                            <td>{{ $exroute->modified_at }}</td>
                                        </tr>
                                        <tr>
                                            <th>Opened at</th>
                                            <td>{{ $exroute->open_at }}</td>
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
                                            <td>{{ $exroute->status }}</td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                            <td>{{ $exroute->outgoing }}</td>
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td>{{ $exroute->note_comment_personnel }}</td>
                                        </tr>
                                        <tr>
                                            <th>Last modified</th>
                                            <td>{{ $exroute->modified_at }}</td>
                                        </tr>
                                        <tr>
                                            <th>Opened at</th>
                                            <td>{{ $exroute->open_at }}</td>
                                        </tr>
                                    </table>
                                </form>
                                @endif

                            </div>

                            @else
                            
                                @if(Auth::check() && (Auth::user()->name == $exroute->personnel))
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <form action="{{ route('forward.exroute.open',$exroute->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        
                                        <div class="callout callout-light col-lg-12 col-md-12 col-sm-12" align="center">
                                            <h5>This route has not yet been open.</h5>
                                            <p>Assigned to {{ $exroute->personnel }} ({{ $exroute->div_unit }})</p>
                                        </div>
                                    </form>
                                </div>
                                @endif

                        @endif

                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-2">
                            <p class="my-0" style="color:#BFBFBF;"><i class="fas fa-level-up-alt fa-lg"></i> <span class="text-muted well well-sm shadow-none ml-3" style="font-size:15px;">Routed at: <strong>{{ $exroute->created_at }}</strong> / by <strong>{{ $exroute->routed_by }}</strong> ({{ $exroute->routed_by_div_unit }})</span></p>
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