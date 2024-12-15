<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            
            <form wire:submit.prevent="submit" method="post" enctype="multipart/form-data">

                <!-- Addressed to --> 
                <h6 class="text-primary mb-3">ASSIGNED TO</h6>
                    <div class="form-row">
                        
                        <div class="form-group col-md-3">
                            <label for="department">Head Office <code>*</code></label>
                            <select wire:model="selectedDepartment" wire:model.defer="department" class="form-control">
                                <option value="" selected>-</option>
                                
                                    @foreach($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                
                            </select>
                            @error('department')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label for="office">Office/Unit <code>*</code></label>
                            <select wire:model="selectedOffice" wire:model.defer="office" class="form-control">
                                <option value="" selected>-</option>
                                @if (!is_null($selectedDepartment))
                                    @foreach($offices as $office)
                                        <option value="{{ $office->id }}">{{ $office->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('office')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label for="div_unit">Director/Division/Designation <code>*</code></label>
                            <select wire:model="selectedDivunit" wire:model.defer="div_unit" class="form-control">
                                <option value="" selected>-</option>
                                @if (!is_null($selectedOffice))
                                    @foreach($div_units as $div_unit)
                                        <option value="{{ $div_unit->id }}">{{ $div_unit->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('div_unit')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label for="personnel">Name <code>*</code></label>
                            <select wire:model="selectedPersonnel" wire:model.defer="personnel" name="personnels_id" class="form-control">
                                <option value="" selected>-</option>
                                @if (!is_null($selectedDivunit))
                                    @foreach($personnels as $personnel)
                                        <option value="{{ $personnel->name }}">{{ $personnel->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('personnel')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-3" hidden>
                            <label for="email">Email Address <code>*</code></label>
                            <select wire:model.defer="email" name="emails_id" class="form-control">
                                @if (!is_null($selectedPersonnel))
                                    @foreach($emails as $email)
                                        <option value="{{ $email->email }}">{{ $email->email }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                    </div>

                    <!-- Subject, Remarks / Instructions -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="subject">Subject <code>*</code></label>
                            <textarea class="form-control" id="subject" rows="3" wire:model="subject"></textarea>
                                <ul class="text-muted well well-sm shadow-none">
                                    <li>- You may remove any sensitive information (monetary amounts, names, etc.) if they are not necessary in tracking the document.</li>
                                    <li>- Max Length: 1000 characters</li>
                                </ul>
                                @error('subject')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="note_comment_routed">Remarks / Instructions</label>
                            <textarea class="form-control" name="note_comment_routed" id="note_comment_routed" wire:model="note_comment_routed" rows="3"></textarea>
                                <ul class="text-muted well well-sm shadow-none">
                                    <li>- Max Length: 500 characters</li>
                                </ul>
                        </div>
                    </div>

                    <!-- Action, Deadline, Email -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="action_req">Action Requested <code>*</code></label>
                            <select wire:model.defer="action_req" name="action_req" class="form-control">
                                <option value="" selected>-</option>
                                    @foreach ($actions as $action_req)
                                        <option value="{{ $action_req }}">{{ $action_req }}</option>
                                    @endforeach
                            </select>
                            @error('action_req')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label>Deadline</label>
                            <div wire:ignore class="input-group date" id="docDateRoute" data-target-input="nearest" data-docdateroute="@this">
                                <input type="text" class="form-control datetimepicker-input" data-target="#docDateRoute" id="docdaterouteInput">
                                <div class="input-group-append" data-target="#docDateRoute" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                            @error('due_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="modeoftrans">Mode of Transmittal <code>*</code></label>
                            <select wire:model.defer="modeoftrans" name="modeoftrans" class="form-control">
                                <option value="" selected>-</option>
                                    @foreach ($inmodeoftrans as $modeoftrans)
                                        <option value="{{ $modeoftrans }}">{{ $modeoftrans }}</option>
                                    @endforeach
                            </select>
                            @error('modeoftrans')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- <div class="form-group col-md-4">
                            <label for="cc_email">Email Notification</label>
                            <textarea class="form-control rounded-0" id="cc_email" wire:model="cc_email" rows="1" placeholder="Add CC email account" disabled></textarea>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> -->
                    </div>

                    <!-- Upload File, Sharepoint -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="file_upload">Upload file </label> <div wire:loading wire:target="file_upload"><span style="color:#007bff; font-weight:500;"><i class="fas fa-upload"></i> Uploading...</i></span></div>
                            <input type="file" class="form-control" name="file_upload" wire:model="file_upload">
                                <ul class="text-muted well well-sm shadow-none">
                                    <li>- Allowed formats: PDF, DOCX, JPG, PNG</li>
                                    <li>- Maximum Size: 10MB</li>
                                </ul>
                                @error('file_upload')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="note_comment">SharePoint Link</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="sharepoint_link" wire:model="sharepoint_link">
                                <div class="input-group-prepend"></div>
                                    <ul class="text-muted well well-sm shadow-none">
                                        <li>- You can upload files via <a href="#">SharePoint</a> and then input the link here.</li>
                                    </ul>
                            </div>
                                @error('sharepoint_link')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                        </div>

                    </div>
                    
                    <div class="card-footer mt-6">
                        <button type="reset" class="btn btn-secondary btn-sm">Clear all</button>
                        <a data-toggle="modal" href="#routeInternalSubmit" class="btn btn-primary btn-sm"><i class="fas fa-share-square"></i> Submit</a>
                    </div>

                    <!-- Modal for Submit Button -->
                    <div class="modal fade" id="routeInternalSubmit" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title" id="ModalLabel">Submit Route</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Make sure to select the correct Assigned Personnel and File before confirming. Do you want to submit?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm close-btn float-right" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger btn-sm"> Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>

<script>
    window.addEventListener('closeModal', event=> {
        $('#exampleModal').modal('hide')
    });
</script>

<!-- <script>
    $('#exampleModal').on('hidden.bs.modal', function () { 
    location.reload();
});
</script> -->
