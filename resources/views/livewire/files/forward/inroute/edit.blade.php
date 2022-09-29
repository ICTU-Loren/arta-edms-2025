@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h5 class="mr-0">Edit Route Details <span class="ml-2" style="font-size:18px;color:#737373;">DTS No. {{ $inroute->dts }}{{ $inroute->dts_no }}</span></h5>
                    </div><!-- /.col -->

                    <div class="col-sm-4" >
                        
                    </div>


                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" style="margin-bottom:30px">
                          {{ $message }}
                        </div>
                    @endif

                  <!-- Default box -->
                  <div class="card card-outline card-info">
                    <div class="card-body">

                    <form action="{{ route('forward.inroute.updateroute',$inroute->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        
                        <div class="form-row">
                            <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">
                                <table class="table table-bordered">

                                    <tr>
                                        <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                            <p class="my-0 mb-0"><i class="fas fa-file-alt mr-2"></i> Route Details</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="25%">Assigned to</th>
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
                                                        SPMO
                                                        @elseif ($inroute->office == '2')
                                                            FAO
                                                        @elseif ($inroute->office == '3')
                                                            IELO
                                                        @elseif ($inroute->office == '4')
                                                            LPAO
                                                        @elseif ($inroute->office == '5')
                                                            BRO
                                                        @elseif ($inroute->office == '6')
                                                            CMEO
                                                        @elseif ($inroute->office == '7')
                                                            ODG
                                                        @elseif ($inroute->office == '8')
                                                            ODDGAF
                                                        @elseif ($inroute->office == '9')
                                                            ODDGL
                                                        @else ($inroute->office == '10')
                                                            ODDGO
                                                    @endif /
                                                @endif

                                                @if($inroute->div_unit > 0)
                                                    @if ($inroute->div_unit == '1')
                                                        Security and Intelligence
                                                        @elseif ($inroute->div_unit == '2')
                                                            Special Project Management Teams (SPMT)
                                                        @elseif ($inroute->div_unit == '3')
                                                            Finance Division
                                                        @elseif ($inroute->div_unit == '4')
                                                            General Services Division (GSD)
                                                        @elseif ($inroute->div_unit == '5')
                                                            Human Resource Development Division (HRDD)
                                                        @elseif ($inroute->div_unit == '6')
                                                            Information and Communications Technology Unit (ICTU)
                                                        @elseif ($inroute->div_unit == '7')
                                                            Public Relations Unit (PRU)
                                                        @elseif ($inroute->div_unit == '8')
                                                            Investigation and Enforcement Division (IED)
                                                        @elseif ($inroute->div_unit == '9')
                                                            Litigation Division
                                                        @elseif ($inroute->div_unit == '10')
                                                            Legal Division
                                                        @elseif ($inroute->div_unit == '11')
                                                            Public Assistance Division (PAD)
                                                        @elseif ($inroute->div_unit == '12')
                                                            Better Regulation Division A (BRD A)
                                                        @elseif ($inroute->div_unit == '13')
                                                            Better Regulation Division B (BRD B)
                                                        @elseif ($inroute->div_unit == '14')
                                                            Better Regulation Division C (BRD C)
                                                        @elseif ($inroute->div_unit == '15')
                                                            Better Regulation Division D (BRD D)
                                                        @elseif ($inroute->div_unit == '16')
                                                            Compliance Monitoring and Evaluation Division A (CMED A)
                                                        @elseif ($inroute->div_unit == '17')
                                                            Compliance Monitoring and Evaluation Division B (CMED B)
                                                        @elseif ($inroute->div_unit == '18')
                                                            Compliance Monitoring and Evaluation Division C (CMED C)
                                                        @elseif ($inroute->div_unit == '19')
                                                            Compliance Monitoring and Evaluation Division D (CMED D)
                                                        @elseif ($inroute->div_unit == '20')
                                                            Head Executive Assistant (HEA)
                                                        @elseif ($inroute->div_unit == '21')
                                                            Executive Assistant (EA)
                                                        @elseif ($inroute->div_unit == '22')
                                                            Executive Assistant (EA)
                                                        @elseif ($inroute->div_unit == '23')
                                                            Executive Assistant (EA)
                                                        @elseif ($inroute->div_unit == '24')
                                                            Executive Assistant (EA)
                                                        @elseif ($inroute->div_unit == '25')
                                                            Doing Business Division (DBD)
                                                        @elseif ($inroute->div_unit == '26')
                                                            Regulatory Management and Training Division (RMTD)
                                                        @elseif ($inroute->div_unit == '27')
                                                            Community and Multi-Sector Affairs Unit (CMSAU)
                                                        @else ($inroute->div_unit == '28')
                                                            Planning Unit
                                                    @endif
                                                @endif
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Action Required</th>
                                        <td>
                                            <select name="action_req" id="action_req" class="form-control">
                                                <option value="{{ $inroute->action_req }}" selected>{{ $inroute->action_req }}</option>
                                                <option value="For appropriate action">For appropriate action</option>
                                                <option value="For approval">For approval</option>
                                                <option value="For comment/reaction/response">For comment/reaction/response</option>
                                                <option value="For compliance/implementation">For compliance/implementation</option>
                                                <option value="For dissemination of information">For dissemination of information</option>
                                                <option value="For draft of reply">For draft of reply</option>
                                                <option value="For endorsement/recommendation">For endorsement/recommendation</option>
                                                <option value="For filing">For filing</option>
                                                <option value="For investigation/verification and report">For investigation/verification and report</option>
                                                <option value="For notation and return/fileFor notification/reply to party">For notation and return/fileFor notification/reply to party</option>
                                                <option value="For notification/reply to party">For notification/reply to party</option>
                                                <option value="For reply">For reply</option>
                                                <option value="For review">For review</option>
                                                <option value="For revision">For revision</option>
                                                <option value="For signature">For signature</option>
                                                <option value="For study and report to">For study and report to</option>
                                                <option value="For your information">For your information</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Due Date</th>
                                        <td><textarea type="text" name="due_date" class="form-control" rows="1">{{ $inroute->due_date }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Mode of Transmittal</th>
                                        <td>
                                            <select name="modeoftrans" id="modeoftrans" class="form-control">
                                                <option value="{{ $inroute->modeoftrans }}" selected>{{ $inroute->modeoftrans }}</option>
                                                <option value="Courier">Courier</option>
                                                <option value="E-DTS">EDTS</option>
                                                <option value="E-mail">E-mail</option>
                                                <option value="Messenger">Messenger</option>
                                                <option value="Personal / Walk-in">Personal / Walk-in</option>
                                                <option value="PhilPost">PhilPost</option>
                                                <option value="Registered">Registered</option>
                                                <option value="Snail Mail">Snail Mail</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>File Upload</th>
                                        <td><a href="{{ asset('/storage/'.$inroute->file_upload) }}" target="_blank" >View</td>
                                    </tr>
                                    <tr>
                                        <th>SharePoint Link</th>
                                        <td><textarea type="text" name="sharepoint_link" class="form-control" rows="1">{{ $inroute->sharepoint_link }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Note / Comment</th>
                                        <td><textarea type="text" name="note_comment_routed" class="form-control" rows="1">{{ $inroute->note_comment_routed }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Last updated</th>
                                        <td>{{ $inroute->updated_at }}</td>
                                    </tr>
                                    
                                </table>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">
                                <table class="table table-bordered table-striped">

                                    <tr>
                                        <td colspan="4" style="background:#E9ECEF;color:#6c757d;">
                                            <p class="my-0 mb-0"><i class="fas fa-edit mr-2"></i> To be filled out by the Assigned Personnel</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="25%">Status</th>
                                        <td>
                                            @if ($inroute->status == 'New')
                                                <label class="badge badge-primary"> {{ $inroute->status }} </label>
                                                @elseif ($inroute->status == 'In-progress')
                                                    <label class="badge badge-danger"> {{ $inroute->status}} </label>
                                                @elseif ($inroute->status == 'Hold')
                                                    <label class="badge badge-warning"> {{ $inroute->status}} </label>
                                                @else ($inroute->status == 'Hold')
                                                    <label class="badge badge-secondary"> {{ $inroute->status}} </label>
                                            @endif
                                        </td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                            <td>{{ $inroute->outgoing }}</td>
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td>{{ $inroute->note_comment_personnel}}</td>
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
                            </div>
                             
                        </div>
                        
                    </div>

                        <div class="card-footer">
                            <button type="button" class="btn btn-sm btn-secondary" onclick="goBack()">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Update</button>
                        </div>
                </form>
                    
                  <!-- /.card-outline -->
                </div>
              </div>
            </div>
        </section>
        <!-- /.1stcontent -->

<script>
    function goBack() {
        window.history.back();
    }
</script>
 

@endsection