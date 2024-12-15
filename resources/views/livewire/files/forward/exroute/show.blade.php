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
                                                ODG - Personnel
                                                @elseif ($exroute->office == '2')
                                                    IPRD
                                                @elseif ($exroute->office == '3')
                                                    ODDGAF - Personnel
                                                @elseif ($exroute->office == '4')
                                                    FAO
                                                @elseif ($exroute->office == '5')
                                                    ICTU
                                                @elseif ($exroute->office == '6')
                                                    PU
                                                @elseif ($exroute->office == '7')
                                                    ODDGL - Personnel
                                                @elseif ($exroute->office == '8')
                                                    IELO
                                                @elseif ($exroute->office == '9')
                                                    LPAO
                                                @elseif ($exroute->office == '10')
                                                    ODDGO - Personnel
                                                @elseif ($exroute->office == '11')
                                                    BRO
                                                @else ($exroute->office == '12')
                                                    CMEO
                                            @endif /
                                        @endif

                                        @if($exroute->div_unit > 0)
                                            @if ($exroute->div_unit == '1')
                                                    HEA
                                                @elseif ($exroute->div_unit == '2')
                                                    EA
                                                @elseif ($exroute->div_unit == '3')
                                                    AA
                                                @elseif ($exroute->div_unit == '4')
                                                    PO
                                                @elseif ($exroute->div_unit == '5')
                                                    IO
                                                @elseif ($exroute->div_unit == '6')
                                                    PO
                                                @elseif ($exroute->div_unit == '7')
                                                    EA
                                                @elseif ($exroute->div_unit == '8')
                                                    AA
                                                @elseif ($exroute->div_unit == '9')
                                                    PO
                                                @elseif ($exroute->div_unit == '10')
                                                    FAO-OD
                                                @elseif ($exroute->div_unit == '11')
                                                    AA
                                                @elseif ($exroute->div_unit == '12')
                                                    PO
                                                @elseif ($exroute->div_unit == '13')
                                                    FD
                                                @elseif ($exroute->div_unit == '14')
                                                    GSD
                                                @elseif ($exroute->div_unit == '15')
                                                    HRDD
                                                @elseif ($exroute->div_unit == '16')
                                                    ITO
                                                @elseif ($exroute->div_unit == '17')
                                                    PO
                                                @elseif ($exroute->div_unit == '18')
                                                   PlanOff
                                                @elseif ($exroute->div_unit == '19')
                                                    EA
                                                @elseif ($exroute->div_unit == '20')
                                                    AA
                                                @elseif ($exroute->div_unit == '21')
                                                    PO
                                                @elseif ($exroute->div_unit == '22')
                                                    IELO-OD
                                                @elseif ($exroute->div_unit == '23')
                                                    AA
                                                @elseif ($exroute->div_unit == '24')
                                                    PO
                                                @elseif ($exroute->div_unit == '25')
                                                    IED
                                                @elseif ($exroute->div_unit == '26')
                                                    LitDiv
                                                @elseif ($exroute->div_unit == '27')
                                                   LPAO-OD
                                                @elseif ($exroute->div_unit == '28')
                                                    AA
                                                @elseif ($exroute->div_unit == '29')
                                                    PO
                                                @elseif ($exroute->div_unit == '30')
                                                    LegDiv
                                                @elseif ($exroute->div_unit == '31')
                                                    PAD
                                                @elseif ($exroute->div_unit == '32')
                                                    EA
                                                @elseif ($exroute->div_unit == '33')
                                                    AA
                                                @elseif ($exroute->div_unit == '34')
                                                    PO
                                                @elseif ($exroute->div_unit == '35')
                                                    BRO-OD
                                                @elseif ($exroute->div_unit == '36')
                                                    AA
                                                @elseif ($exroute->div_unit == '37')
                                                    PO
                                                @elseif ($exroute->div_unit == '38')
                                                    BRO A
                                                @elseif ($exroute->div_unit == '39')
                                                    BRO B
                                                @elseif ($exroute->div_unit == '40')
                                                    BRO C
                                                @elseif ($exroute->div_unit == '41')
                                                    BRO D
                                                @elseif ($exroute->div_unit == '42')
                                                    DBD
                                                @elseif ($exroute->div_unit == '43')
                                                    RMTD
                                                @elseif ($exroute->div_unit == '44')
                                                    CMEO-OD
                                                @elseif ($exroute->div_unit == '45')
                                                    AA
                                                @elseif ($exroute->div_unit == '46')
                                                    PO
                                                @elseif ($exroute->div_unit == '47')
                                                    CMEO A
                                                @elseif ($exroute->div_unit == '48')
                                                    CMEO B
                                                @elseif ($exroute->div_unit == '49')
                                                    CMEO C
                                                @else ($exroute->div_unit == '50')
                                                    CMEO D
                                            @endif
                                        @endif
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Remarks / Instructions</th>
                                <td>{{ $exroute->note_comment_routed }}</td>
                            </tr>
                            <tr>
                                <th>Action Requested</th>
                                <td>{{ $exroute->action_req }}</td>
                            </tr>
                            <tr>
                                <th>Deadline</th>
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
                                                    <button type="submit" class="btn btn-warning btn-sm"><i class="fas fa-envelope-open-text mr-1"></i> Open</button>
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
                                                    HEA
                                                @elseif ($exroute->div_unit == '2')
                                                    EA
                                                @elseif ($exroute->div_unit == '3')
                                                    AA
                                                @elseif ($exroute->div_unit == '4')
                                                    PO
                                                @elseif ($exroute->div_unit == '5')
                                                    IO
                                                @elseif ($exroute->div_unit == '6')
                                                    PO
                                                @elseif ($exroute->div_unit == '7')
                                                    EA
                                                @elseif ($exroute->div_unit == '8')
                                                    AA
                                                @elseif ($exroute->div_unit == '9')
                                                    PO
                                                @elseif ($exroute->div_unit == '10')
                                                    FAO-OD
                                                @elseif ($exroute->div_unit == '11')
                                                    AA
                                                @elseif ($exroute->div_unit == '12')
                                                    PO
                                                @elseif ($exroute->div_unit == '13')
                                                    FD
                                                @elseif ($exroute->div_unit == '14')
                                                    GSD
                                                @elseif ($exroute->div_unit == '15')
                                                    HRDD
                                                @elseif ($exroute->div_unit == '16')
                                                    ITO
                                                @elseif ($exroute->div_unit == '17')
                                                    PO
                                                @elseif ($exroute->div_unit == '18')
                                                   PlanOff
                                                @elseif ($exroute->div_unit == '19')
                                                    EA
                                                @elseif ($exroute->div_unit == '20')
                                                    AA
                                                @elseif ($exroute->div_unit == '21')
                                                    PO
                                                @elseif ($exroute->div_unit == '22')
                                                    IELO-OD
                                                @elseif ($exroute->div_unit == '23')
                                                    AA
                                                @elseif ($exroute->div_unit == '24')
                                                    PO
                                                @elseif ($exroute->div_unit == '25')
                                                    IED
                                                @elseif ($exroute->div_unit == '26')
                                                    LitDiv
                                                @elseif ($exroute->div_unit == '27')
                                                   LPAO-OD
                                                @elseif ($exroute->div_unit == '28')
                                                    AA
                                                @elseif ($exroute->div_unit == '29')
                                                    PO
                                                @elseif ($exroute->div_unit == '30')
                                                    LegDiv
                                                @elseif ($exroute->div_unit == '31')
                                                    PAD
                                                @elseif ($exroute->div_unit == '32')
                                                    EA
                                                @elseif ($exroute->div_unit == '33')
                                                    AA
                                                @elseif ($exroute->div_unit == '34')
                                                    PO
                                                @elseif ($exroute->div_unit == '35')
                                                    BRO-OD
                                                @elseif ($exroute->div_unit == '36')
                                                    AA
                                                @elseif ($exroute->div_unit == '37')
                                                    PO
                                                @elseif ($exroute->div_unit == '38')
                                                    BRO A
                                                @elseif ($exroute->div_unit == '39')
                                                    BRO B
                                                @elseif ($exroute->div_unit == '40')
                                                    BRO C
                                                @elseif ($exroute->div_unit == '41')
                                                    BRO D
                                                @elseif ($exroute->div_unit == '42')
                                                    DBD
                                                @elseif ($exroute->div_unit == '43')
                                                    RMTD
                                                @elseif ($exroute->div_unit == '44')
                                                    CMEO-OD
                                                @elseif ($exroute->div_unit == '45')
                                                    AA
                                                @elseif ($exroute->div_unit == '46')
                                                    PO
                                                @elseif ($exroute->div_unit == '47')
                                                    CMEO A
                                                @elseif ($exroute->div_unit == '48')
                                                    CMEO B
                                                @elseif ($exroute->div_unit == '49')
                                                    CMEO C
                                                @else ($exroute->div_unit == '50')
                                                    CMEO D
                                             @endif
                                        @endif)
                                        </span></p>
                                        @if(Auth::check() && (Auth::user()->name == $exroute->routed_by))
                                            <div class="col-lg-2 col-md-6 col-sm-6 mt-0">
                                                <a href="{{ url('files/forward/exroute/edit',$exroute->id) }}"><button class="btn btn-primary btn-sm m-1"><i class="fas fa-edit mr-1"></i> View/Edit</button></a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#routeRemove" data-whatever="@getbootstrap" disabled><i class="fas fa-times-circle mr-1"></i> Remove</button>
                                            </div>
                                        @endif
                                </div>
                        @endif

                @endif

                <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-2">
                    <p class="my-0" style="color:#BFBFBF;"><i class="fas fa-arrow-up bg-info fa-lg" style="padding:6px;border-radius:50%;"></i> <span class="text-muted well well-sm shadow-none ml-2" style="font-size:16px;">Routed at: <strong>{{ $exroute->created_at }}</strong> / by <strong>{{ $exroute->routed_by }}</strong> ({{ $exroute->routed_by_div_unit }})</span></p>
                </div>

            @endforeach

            <!-- Modal for Remove Button -->
            <div class="modal fade" id="routeRemove" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title" id="ModalLabel">Remove Route</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to remove this route?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm close-btn float-right" data-dismiss="modal">Cancel</button>
                            <a href="{{ url('delete/ev',$exroute->id) }}"><button class="btn btn-danger btn-sm">Confirm</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    @else
        <p class="ml-4">No Route History.</p>
@endif
