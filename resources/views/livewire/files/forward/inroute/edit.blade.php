@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h5 class="mr-0">Edit Route Details <span class="ml-2" style="font-size:18px;color:#737373;">eDMS No. {{ $inroute->dts }}{{ $inroute->dts_no }}</span></h5>
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
                                <table class="table table-bordered table-striped table-hover">

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
                                        <td><textarea type="text" name="note_comment_routed" class="form-control" rows="1">{{ $inroute->note_comment_routed }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Action Request</th>
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
                                        <th>Deadline</th>
                                        <td><textarea type="text" name="due_date" class="form-control" rows="1">{{ $inroute->due_date }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Mode of Transmittal</th>
                                        <td>
                                            <select name="modeoftrans" id="modeoftrans" class="form-control">
                                                <option value="{{ $inroute->modeoftrans }}" selected>{{ $inroute->modeoftrans }}</option>
                                                <!-- <option value="Courier">Courier</option>
                                                <option value="EDTS">EDTS</option>
                                                <option value="Gmail">Gmail</option>
                                                <option value="In person">In person</option>
                                                <option value="Outlook">Outlook</option>
                                                <option value="PhilPost">PhilPost</option>
                                                <option value="Registered">Registered</option>
                                                <option value="Social Media">Social Media</option> -->
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
