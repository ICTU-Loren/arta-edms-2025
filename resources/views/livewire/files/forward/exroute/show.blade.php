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
                    <!-- <tr>
                        <th width="25%">Control Number</th>
                        <td>{{ request()->route('id') }}</td>
                    </tr> -->
                        <tr>
                            <th width="25%">Assigned to</th>
                            <td>{{ $exroute->personnel }} <br /> {{ $exroute->div_unit }}</td>
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
                            @if(Auth::check() && (Auth::user()->name == $exroute->personnel))
                                <td><a href="{{ asset('/storage/'.$exroute->file_upload) }}" target="_blank" >View</a></td>
                                    @else <td>View</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Note / Comment</th>
                            <td>{{ $exroute->note_comment }}</td>
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
                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                <p class="my-0 mb-0"><i class="fas fa-edit mr-2"></i> To be filled out by the Assigned Personnel</p>
                            </td>
                        </tr>

                        @if ($externals->status <> 'Closed')

                            @if ($exroute->status <> 'Done')
                                <tr>
                                    <th style="width:25%">Status</th>
                                    <td><select name="status" id="status" class="form-control">
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
                                    <th>Outgoing</th>
                                    <td><select name="doc_class" id="doc_class" class="form-control">
                                            <option value="{{ $exroute->doc_class }}" selected>{{ $exroute->doc_class }}</option>
                                            <option value="External">External</option>
                                            <option value="Internal">Internal</option>
                                        </select>
                                        @error('doc_class')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <th style="width:25%">Status</th>
                                    <td><select name="status" id="status" class="form-control" disabled>
                                            <option value="{{ $exroute->status }}" selected>{{ $exroute->status }}</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Outgoing</th>
                                    <td><select name="doc_class" id="doc_class" class="form-control" disabled>
                                            <option value="{{ $exroute->doc_class }}" selected>{{ $exroute->doc_class }}</option>
                                        </select>
                                    </td>
                                </tr>
                            @endif

                            @else
                            <tr>
                                <th style="width:25%">Status</th>
                                <td><select name="status" id="status" class="form-control" disabled>
                                        <option value="{{ $exroute->status }}" selected>{{ $exroute->status }}</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Outgoing</th>
                                <td><select name="doc_class" id="doc_class" class="form-control" disabled>
                                        <option value="{{ $exroute->doc_class }}" selected>{{ $exroute->doc_class }}</option>
                                    </select>
                                </td>
                            </tr>
                        @endif

                        <tr>
                            <th>Note / Comment</th>
                            <td>
                                <textarea type="text" name="cc_email" class="form-control" id="cc_email" rows="1">{{ $exroute->cc_email }}</textarea>
                            </td>
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
                            <td>{{ $exroute->status }}</td>
                        </tr>
                        <tr>
                            <th>Outgoing</th>
                            <td>{{ $exroute->doc_class }}</td>
                        </tr>
                        <tr>
                            <th>Note / Comment</th>
                            <td>{{ $exroute->cc_email}}</td>
                        </tr>
                        <tr>
                            <th>Last modified</th>
                            <td>{{ $exroute->modified_at }}</td>
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
                            <p><span style="font-size:14px;color:#737373;">Assigned to {{ $exroute->personnel }} ({{ $exroute->div_unit }})</span></p>
                        </div>
                @endif

        @endif

        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-2">
            <p class="my-0" style="color:#D9D9D9;"><i class="fas fa-level-up-alt fa-lg"></i> <span class="text-muted well well-sm shadow-none ml-3" style="font-size:13px;">Routed at: {{ $exroute->created_at }} / by {{ $exroute->routed_by }} ({{ $exroute->routed_by_div_unit }})</span></p>
        </div>

    @endforeach

</div>

@else
    <p class="ml-4">No Route History.</p>
@endif