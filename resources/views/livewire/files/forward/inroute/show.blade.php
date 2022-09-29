@if(count($inroute) > 0)

<div class="row">
    @foreach ($inroute as $inroute)

        @if($inroute->open_at > 0)

            <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">
                <table class="table table-bordered table-striped">
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
                                <a href="{{ asset('/storage/'.$inroute->file_upload) }}" target="_blank" >View</a>
                                    @else View
                            @endif
                        @endif</td>
                    </tr>
                    <tr>
                        <th>SharePoint Link</th>
                        <td>@if($inroute->sharepoint_link > 0)
                            @if(Auth::check() && (Auth::user()->name == $inroute->personnel))
                                <a href="{{ $inroute->sharepoint_link }}" target="_blank" >View</a>
                                    @else View
                            @endif
                        @endif</td>
                    </tr>
                    <tr>
                        <th>Note / Comment</th>
                        <td>{{ $inroute->note_comment_routed }}</td>
                    </tr>
                </table>
            </div>
            
            <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">

                @if(Auth::check() && (Auth::user()->name == $inroute->personnel))
                <form action="{{ route('forward.inroute.update',$inroute->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <table class="table table-bordered table-striped">
                        <tr>
                            <td colspan="4" style="background:#E9ECEF;color:#6c757d;">
                                <p class="my-0 mb-0"><i class="fas fa-edit mr-2"></i> To be filled out by the Assigned Personnel</p>
                            </td>
                        </tr>

                        @if ($internals->status <> 'Closed')

                            @if ($inroute->status <> 'Done')
                                <tr>
                                    <th style="width:25%">Status *</th>
                                    <td colspan="2"><select name="status" id="status" class="form-control">
                                            <option value="{{ $inroute->status }}" selected>{{ $inroute->status }}</option>
                                            <option value="In-progress">In-progress</option>
                                            <option value="Hold">Hold</option>
                                            <option value="Done">Done</option>
                                        </select>
                                        @error('status')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th>Outgoing *</th>
                                    <td><select name="outgoing" id="outgoing" class="form-control">
                                            <option value="{{ $inroute->outgoing }}" selected>{{ $inroute->outgoing }}</option>
                                            <option value="External">External</option>
                                            <option value="Internal">Internal</option>
                                        </select>
                                        @error('outgoing')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th>Note / Comment</th>
                                    <td>
                                        <textarea type="text" name="note_comment_personnel" class="form-control" id="note_comment_personnel" rows="1">{{ $inroute->note_comment_personnel }}</textarea>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <th style="width:25%">Status</th>
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
                                    <td>{{ $inroute->note_comment_personnel }}</td>
                                </tr>
                            @endif

                            @else
                            <tr>
                                <th style="width:25%">Status</th>
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
                                <td>{{ $inroute->note_comment_personnel }}</td>
                            </tr>
                        @endif
                        
                        <tr>
                            <th>Last modified</th>
                            <td>{{ $inroute->modified_at }}</td>
                        </tr>
                        <tr>
                            <th>Opened at</th>
                            <td>{{ $inroute->open_at }}</td>
                        </tr>
                    </table>

                        @if ($internals->status <> 'Closed')

                            @if ($inroute->status <> 'Done')
                                <div class="float-right">
                                    <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-save"></i> Update</button>
                                    <!-- <a href="/files/forward/edit/{{ $inroute->id }}" class="edit btn btn-info btn-sm " title="Edit"><i class="fas fa-edit"></i> Update</i></a> -->
                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" disabled><i class="fas fa-share-square"></i> Add Route</button>
                                </div>
                                    
                                @else
                                <div class="float-right">
                                    <button type="submit" class="btn btn-secondary btn-sm" disabled><i class="fas fa-save"></i> Update</button>
                                    <!-- <a href="/files/forward/edit/{{ $inroute->id }}" class="edit btn btn-info btn-sm " title="Edit"><i class="fas fa-edit"></i> Update</i></a> -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-share-square"></i> Add Route</button>
                                </div>
                                            
                            @endif

                        @endif

                    @else   
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
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
                </form>
                @endif

            </div>

            @else
            
                @if(Auth::check() && (Auth::user()->name == $inroute->personnel))
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <form action="{{ route('forward.inroute.open',$inroute->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                                <div class="callout callout-light" align="center">
                                    <h6><i class="fas fa-exclamation-circle"></i> This document has been assigned to you.</h6>
                                        <p><span style="font-size:14px;color:#737373;">Open to see route details.</span></p>
                                        <div class="col-lg-2 col-md-6 col-sm-6 mt-0">
                                            <button type="submit" class="btn btn-danger btn-block btn-sm"><i class="fas fa-envelope-open-text mr-1"></i> Open</button>
                                        </div>
                                </div>
                        </form>
                    </div>
                        @else
                        <div class="callout callout-light col-lg-12 col-md-12 col-sm-12" align="center">
                            <h6><i class="fas fa-exclamation-circle"></i> This route is yet to be opened.</h6>
                            <p><span style="font-size:14px;color:#737373;">Assigned to {{ $inroute->personnel }} 
                                    (@if($inroute->div_unit > 0)
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
                                    @endif)
                                </span></p>
                                @if(Auth::check() && (Auth::user()->name == $inroute->routed_by))
                                    <div class="col-lg-2 col-md-6 col-sm-6 mt-0">
                                        <a href="{{ url('files/forward/inroute/edit',$inroute->id) }}"><button class="btn btn-primary btn-sm"><i class="fas fa-edit mr-1"></i> View/Edit</button></a>
                                    </div>
                                @endif
                        </div>
                @endif

        @endif

        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-2">
            <p class="my-0" style="color:#BFBFBF;"><i class="fas fa-level-up-alt fa-lg"></i> <span class="text-muted well well-sm shadow-none ml-3" style="font-size:15px;">Routed at: <strong>{{ $inroute->created_at }}</strong> / by <strong>{{ $inroute->routed_by }}</strong> ({{ $inroute->routed_by_div_unit }})</span></p>
        </div>

    @endforeach

</div>

@else
    <p class="ml-4">No Route History.</p>
@endif