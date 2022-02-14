<div>

    <div class="card-body">

        <!-- Document Details -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file-alt mr-2"></i> Document Details</li>
            </ol>
        </nav>

        <form wire:submit.prevent="submit" enctype="multipart/form-data">

            <!-- Recipient --> 
            <p class="text-primary my-3"> ADDRESS TO</p>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="departments">Department *</label>
                    <select wire:model="selectedDepartment" wire:model.defer="department" class="form-control rounded-0" >
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
                    <label for="office">Office</label>
                    <select wire:model="selectedOffice" wire:model.defer="office" class="form-control rounded-0" >
                        <option value="" selected>-</option>
                        @if (!is_null($selectedDepartment))
                            @foreach($offices as $office)
                                <option value="{{ $office->id }}">{{ $office->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                
                <div class="form-group col-md-3">
                    <label for="div_unit">Division / Unit</label>
                    <select wire:model="selectedDiv_unit" wire:model.defer="div_unit" class="form-control rounded-0">
                        <option value="" selected>-</option>
                        @if (!is_null($selectedOffice))
                            @foreach($div_units as $div_unit)
                                <option value="{{ $div_unit->name }}">{{ $div_unit->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <!-- <label for="personnel">Personnel</label>
                    <select wire:model="selectedPersonnel" wire:model.defer="personnel" name="personnels_id" class="form-control rounded-0">
                        <option value="" selected>-</option>
                        @if (!is_null($selectedDiv_unit))
                            @foreach($personnels as $personnel)
                                <option value="{{ $personnel->name }}">{{ $personnel->name }}</option>
                            @endforeach
                        @endif
                    </select> -->

                    <label for="personnel">Personnel *</label>
                    <div class="input-group">
                        <input type="text" class="form-control rounded-0" id="personnel" wire:model="personnel">
                        <div class="input-group-prepend"></div>
                    </div>
                        @error('personnel')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
            </div>

            <!-- Type & Class -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="doc_type">Type *</label>
                    <select wire:model.defer="doc_type" name="doc_type" class="form-control rounded-0">
                        <option value="" selected>-</option>
                        @foreach ($doctype as $doc_type)
                            <option value="{{$doc_type}}">{{$doc_type}}</option>
                        @endforeach
                    </select>
                    @error('doc_type')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="doc_class">Classification *</label>
                    <select wire:model.defer="doc_class" name="doc_class" class="form-control rounded-0">
                        <option value="" selected>-</option>
                            @foreach ($docclass as $doc_class)
                                <option value="{{$doc_class}}">{{$doc_class}}</option>
                            @endforeach
                    </select>
                    @error('doc_class')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Subject -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="subject">Subject *</label>
                    <textarea class="form-control rounded-0" id="subject" rows="3" wire:model="subject"></textarea>
                        <ul class="text-muted well well-sm shadow-none">
                            <li>- You may remove any sensitive information (monetary amounts, names, etc.) if they are not necessary in tracking the document.</li>
                            <li>- Max Length: 1000 characters</li>
                        </ul>
                        @error('subject')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
            </div>
                    
            <!-- Sender's Details -->
            <nav aria-label="breadcrumb" class="mt-0 mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-tie mr-2"></i> Sender's Details</li>
                </ol>
            </nav>

            <!-- MOD & Profile -->
            <div  class="form-row">
                <div class="form-group col-md-6">
                    <label for="mode_of_trans">Mode of Transmittal</label>
                    <select wire:model.defer="mode_of_trans" name="mode_of_trans" class="form-control rounded-0">
                        <option value="" selected>-</option>
                            @foreach ($modeoftrans as $mode_of_trans)
                                <option value="{{ $mode_of_trans }}">{{ $mode_of_trans }}</option>
                            @endforeach
                    </select>
                    @error('mode_of_trans')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="s_profile">Profile</label>
                    <select wire:model.defer="s_profile" name="s_profile" class="form-control rounded-0">
                        <option value="" selected>-</option>
                            @foreach($sprofile as $s_profile)
                                <option value="{{ $s_profile }}">{{ $s_profile }}</option>
                            @endforeach
                    </select>
                        @error('s_profile')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
            </div>

            <!-- Name & Address -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="s_name">Name *</label>
                    <textarea type="text" class="form-control rounded-0" id="s_name" rows="3" wire:model="s_name"></textarea>
                        @error('s_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="s_address">Address *</label>
                    <textarea type="text" class="form-control rounded-0" id="s_address" rows="3" wire:model="s_address"></textarea>
                        @error('s_address')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
            </div>

            <!-- Contact -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="s_email">Email Address</label>
                    <div class="input-group">
                        <input type="text" class="form-control rounded-0" id="s_email" wire:model="s_email">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="s_contact">Contact Number</label>
                    <div class="input-group">
                        <input wire:model="s_contact" type="text" class="form-control rounded-0" id="s_contact" >
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                    </div>
                    @error('s_contact') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Receiver's Details -->
            <nav aria-label="breadcrumb" class="mt-6 mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-edit mr-2"></i> Receiver's Details</li>
                </ol>
            </nav>

            <!-- Date & Time -->
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Date Received *</label>
                    <div wire:ignore class="input-group date" id="docDateReceived" data-target-input="nearest" data-docdatereceived="@this">
                        <input type="text" class="form-control datetimepicker-input" data-target="#docDateReceived" id="docdatereceivedInput">
                        <div class="input-group-append" data-target="#docDateReceived" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                    </div>
                        @error('date_received')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>

                <div class="form-group col-md-6">
                <label>Time Received *</label>
                    <div wire:ignore class="input-group date" id="docTimeReceived" data-target-input="nearest" data-doctimereceived="@this">
                    <input type="text" class="form-control datetimepicker-input" data-target="#docTimeReceived" id="doctimereceivedInput" >
                        <div class="input-group-append" data-target="#docTimeReceived" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                    </div>
                        @error('time_received')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
            </div>

            <!-- Name and Comment -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="received_by">Received by *</label>
                    <select type="text" class="form-control rounded-0" id="received_by" rows="1" wire:model="received_by"></textarea>
                        <option value="" selected>-</option>    
                            @foreach($personnels as $personnel)
                                <option value="{{ $personnel->name }}">{{ $personnel->name }}</option>
                            @endforeach
                    </select>
                        @error('received_by')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="comment">Remarks</label>
                    <textarea type="text" class="form-control rounded-0" id="comment" rows="1" wire:model="comment"></textarea>
                        <ul class="text-muted well well-sm shadow-none">
                            <li>- Max Length: 500 characters</li>
                        </ul>    
                        @error('comment')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
            </div>
            
        </div>
                    
            <div class="card-footer">
                <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Cancel</button>
                <button type="reset" class="btn btn-secondary btn-sm">Clear all</button>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            </div>
        </form>


</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>
 