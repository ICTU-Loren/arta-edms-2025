@if(count($inroute) > 0)

<div class="row">
    @foreach ($inroute as $inroute)

        @if($inroute->open_at > 0)

            <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">
                <table class="table table-bordered table-striped">
                    <!-- <tr>
                        <th width="25%">Control Number</th>
                        <td>{{ request()->route('id') }}</td>
                    </tr> -->
                        <tr>
                            <th width="25%">Assigned to</th>
                            <td>{{ $inroute->personnel }} <br /> {{ $inroute->div_unit }}</td>
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
                            @if(Auth::check() && (Auth::user()->name == $inroute->personnel))
                                <td><a href="{{ asset('/storage/'.$inroute->file_upload) }}" target="_blank" >View</a></td>
                                    @else <td>View</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Note / Comment</th>
                            <td>{{ $inroute->note_comment }}</td>
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
                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                <p class="my-0 mb-0"><i class="fas fa-edit mr-2"></i> To be filled out by the Assigned Person</p>
                            </td>
                        </tr>

                        @if ($internals->status <> 'Closed')

                            @if ($inroute->status <> 'Done')
                                <tr>
                                    <th style="width:25%">Status</th>
                                    <td><select name="status" id="status" class="form-control">
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
                                    <th>Outgoing</th>
                                    <td><select name="doc_class" id="doc_class" class="form-control">
                                            <option value="{{ $inroute->doc_class }}" selected>{{ $inroute->doc_class }}</option>
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
                                        <option value="{{ $inroute->status }}" selected>{{ $inroute->status }}</option>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Outgoing</th>
                                    <td><select name="doc_class" id="doc_class" class="form-control" disabled>
                                        <option value="{{ $inroute->doc_class }}" selected>{{ $inroute->doc_class }}</option>
                                    </td>
                                </tr>
                                @endif
                        @else
                        <tr>
                            <th style="width:25%">Status</th>
                            <td><select name="status" id="status" class="form-control" disabled>
                                <option value="{{ $inroute->status }}" selected>{{ $inroute->status }}</option>
                            </td>
                        </tr>
                        <tr>
                            <th>Outgoing</th>
                            <td><select name="doc_class" id="doc_class" class="form-control" disabled>
                                <option value="{{ $inroute->doc_class }}" selected>{{ $inroute->doc_class }}</option>
                            </td>
                        </tr>
                        @endif

                        <tr>
                            <th>Note / Comment</th>
                            <td>
                                <textarea type="text" name="cc_email" class="form-control" id="cc_email" rows="1">{{ $inroute->cc_email }}</textarea>
                            </td>
                        </tr>

                        <tr>
                            <th>Last modified</th>
                            <td>{{ $inroute->modified_at }}</td>
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
                                <p class="my-0 mb-0"><i class="fas fa-edit"></i> To be filled out by the Assigned Person</li></p>
                            </td>
                        </tr>
                        <tr>
                            <th width="25%">Status</th>
                            <td>{{ $inroute->status }}</td>
                        </tr>
                        <tr>
                            <th>Outgoing</th>
                            <td>{{ $inroute->doc_class }}</td>
                        </tr>
                        <tr>
                            <th>Note / Comment</th>
                            <td>{{ $inroute->cc_email}}</td>
                        </tr>
                        <tr>
                            <th>Last modified</th>
                            <td>{{ $inroute->modified_at }}</td>
                        </tr>
                    </table>
                </form>
                @endif

                <div class="mb-4 mt-0">
                    <p class="my-0" style="color:#D9D9D9;"><span class="text-muted well well-sm shadow-none" style="font-size:15px;">Opened at: {{ $inroute->open_at }}</span></p>
                </div>

            </div>

            @else
            
                @if(Auth::check() && (Auth::user()->name == $inroute->personnel))
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form action="{{ route('forward.inroute.open',$inroute->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                            <div class="callout callout-danger" align="center">
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
                            <p><span style="font-size:14px;color:#737373;">Assigned to {{ $inroute->personnel }} ({{ $inroute->div_unit }})</span></p>
                        </div>
                @endif
    
        @endif

        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-2">
            <p class="my-0" style="color:#D9D9D9;"><i class="fas fa-level-up-alt fa-lg"></i> <span  class="text-muted well well-sm shadow-none ml-3" style="font-size:13px;">Routed at: {{ $inroute->created_at }} / by {{ $inroute->routed_by }} ({{ $inroute->routed_by_div_unit }})</span></p>
        </div>

    @endforeach
</div>

@else
    <p class="ml-4">No Route History.</p>
@endif
                