@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h5 class="mr-0">Edit Route Details <span class="ml-2" style="font-size:18px;color:#737373;">DTS No. {{ $exroute->dts }}{{ $exroute->dts_no }}</span></h5>
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

                    <form action="{{ route('forward.exroute.updateroute',$exroute->id) }}" method="POST" enctype="multipart/form-data">
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
                                                        @elseif ($exroute->office == '6')
                                                            CMEO
                                                        @elseif ($exroute->office == '7')
                                                            ODG
                                                        @elseif ($exroute->office == '8')
                                                            ODDGAF
                                                        @elseif ($exroute->office == '9')
                                                            ODDGL
                                                        @else ($exroute->office == '10')
                                                            ODDGO
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
                                                        @elseif ($exroute->div_unit == '19')
                                                            Compliance Monitoring and Evaluation Division D (CMED D)
                                                        @elseif ($exroute->div_unit == '20')
                                                            Head Executive Assistant (HEA)
                                                        @elseif ($exroute->div_unit == '21')
                                                            Executive Assistant (EA)
                                                        @elseif ($exroute->div_unit == '22')
                                                            Executive Assistant (EA)
                                                        @elseif ($exroute->div_unit == '23')
                                                            Executive Assistant (EA)
                                                        @elseif ($exroute->div_unit == '24')
                                                            Executive Assistant (EA)
                                                        @elseif ($exroute->div_unit == '25')
                                                            Doing Business Division (DBD)
                                                        @elseif ($exroute->div_unit == '26')
                                                            Regulatory Management and Training Division (RMTD)
                                                        @elseif ($exroute->div_unit == '27')
                                                            Community and Multi-Sector Affairs Unit (CMSAU)
                                                        @else ($exroute->div_unit == '28')
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
                                                <option value="{{ $exroute->action_req }}" selected>{{ $exroute->action_req }}</option>
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
                                        <td><textarea type="text" name="due_date" class="form-control" rows="1">{{ $exroute->due_date }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Mode of Transmittal</th>
                                        <td>
                                            <select name="modeoftrans" id="modeoftrans" class="form-control">
                                                <option value="{{ $exroute->modeoftrans }}" selected>{{ $exroute->modeoftrans }}</option>
                                                <option value="Courier">Courier</option>
                                                <option value="E-DTS">E-DTS</option>
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
                                        <td><a href="{{ asset('/storage/'.$exroute->file_upload) }}" target="_blank" >View</td>
                                    </tr>
                                    <tr>
                                        <th>SharePoint Link</th>
                                        <td><textarea type="text" name="sharepoint_link" class="form-control" rows="1">{{ $exroute->sharepoint_link }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Note / Comment</th>
                                        <td><textarea type="text" name="note_comment_routed" class="form-control" rows="1">{{ $exroute->note_comment_routed }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Last updated</th>
                                        <td>{{ $exroute->updated_at }}</td>
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
                                            @if ($exroute->status == 'New')
                                                <label class="badge badge-primary"> {{ $exroute->status }} </label>
                                                @elseif ($exroute->status == 'In-progress')
                                                    <label class="badge badge-danger"> {{ $exroute->status}} </label>
                                                @elseif ($exroute->status == 'Hold')
                                                    <label class="badge badge-warning"> {{ $exroute->status}} </label>
                                                @else ($exroute->status == 'Hold')
                                                    <label class="badge badge-secondary"> {{ $exroute->status}} </label>
                                            @endif
                                        </td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                            <td>{{ $exroute->outgoing }}</td>
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td>{{ $exroute->note_comment_personnel}}</td>
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