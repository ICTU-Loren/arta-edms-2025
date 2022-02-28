@if(count($exroute) > 0)

<div class="row">
    @foreach ($exroute as $exroute)

        @if($exroute->open_at > 0)

            <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">
                <table class="table table-bordered table-striped">
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
                                <a href="{{ asset('/storage/'.$exroute->file_upload) }}" target="_blank" >View</a>
                                    @else View
                            @endif
                        @endif</td>
                    </tr>
                    <tr>
                        <th>SharePoint Link</th>
                        <td>@if($exroute->sharepoint_link > 0)
                            @if(Auth::check() && (Auth::user()->name == $exroute->personnel))
                                <a href="{{ $exroute->sharepoint_link }}" target="_blank" >View</a>
                                    @else View
                            @endif
                        @endif</td>
                    </tr>
                    <tr>
                        <th>Note / Comment</th>
                        <td>{{ $exroute->note_comment_routed }}</td>
                    </tr>
                </table>
            </div>
            
            <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">

                @if(Auth::check() && (Auth::user()->name == $exroute->personnel))
                <form action="{{ route('forward.exroute.update',$exroute->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <table class="table table-bordered table-striped">
                        <tr>
                            <td colspan="4" style="background:#E9ECEF;color:#6c757d;">
                                <p class="my-0 mb-0"><i class="fas fa-edit mr-2"></i> To be filled out by the Assigned Personnel</p>
                            </td>
                        </tr>

                        @if ($externals->status <> 'Closed')

                            @if ($exroute->status <> 'Done')
                                <tr>
                                    <th style="width:25%">Status *</th>
                                    <td colspan="2"><select name="status" id="status" class="form-control">
                                            <option value="{{ $exroute->status }}" selected>{{ $exroute->status }}</option>
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
                                            <option value="{{ $exroute->outgoing }}" selected>{{ $exroute->outgoing }}</option>
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
                                        <textarea type="text" name="note_comment_personnel" class="form-control" id="note_comment_personnel" rows="1">{{ $exroute->note_comment_personnel }}</textarea>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <th style="width:25%">Status</th>
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
                                    <td>{{ $exroute->note_comment_personnel }}</td>
                                </tr>
                            @endif

                            @else
                            <tr>
                                <th style="width:25%">Status</th>
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
                                <td>{{ $exroute->note_comment_personnel }}</td>
                            </tr>
                        @endif
                        
                        <tr>
                            <th>Last modified</th>
                            <td>{{ $exroute->modified_at }}</td>
                        </tr>
                        <tr>
                            <th>Opened at</th>
                            <td>{{ $exroute->open_at }}</td>
                        </tr>
                    </table>

                        @if ($externals->status <> 'Closed')

                            @if ($exroute->status <> 'Done')
                                <div class="float-right">
                                    <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-save"></i> Update</button>
                                    <!-- <a href="/files/forward/edit/{{ $exroute->id }}" class="edit btn btn-info btn-sm " title="Edit"><i class="fas fa-edit"></i> Update</i></a> -->
                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" disabled><i class="fas fa-share-square"></i> Add Route</button>
                                </div>
                                    
                                @else
                                <div class="float-right">
                                    <button type="submit" class="btn btn-secondary btn-sm" disabled><i class="fas fa-save"></i> Update</button>
                                    <!-- <a href="/files/forward/edit/{{ $exroute->id }}" class="edit btn btn-info btn-sm " title="Edit"><i class="fas fa-edit"></i> Update</i></a> -->
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
                </form>
                @endif

            </div>

            @else
            
                @if(Auth::check() && (Auth::user()->name == $exroute->personnel))
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <form action="{{ route('forward.exroute.open',$exroute->id) }}" method="POST" enctype="multipart/form-data">
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
                            <p><span style="font-size:14px;color:#737373;">Assigned to {{ $exroute->personnel }} 
                                    (@if($exroute->div_unit > 0)
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
                                    @endif)
                                </span></p>
                        </div>
                @endif

        @endif

        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-2">
            <p class="my-0" style="color:#BFBFBF;"><i class="fas fa-level-up-alt fa-lg"></i> <span class="text-muted well well-sm shadow-none ml-3" style="font-size:15px;">Routed at: <strong>{{ $exroute->created_at }}</strong> / by <strong>{{ $exroute->routed_by }}</strong> ({{ $exroute->routed_by_div_unit }})</span></p>
        </div>

    @endforeach

</div>

@else
    <p class="ml-4">No Route History.</p>
@endif