<div>

    <div class="card-body">

        <!-- Document Details -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file-alt"></i> Document Details</li>
            </ol>
        </nav>

        <form wire:submit.prevent="submit" enctype="multipart/form-data">

            <!-- Recipient --> 
            <p class="text-primary my-3"> ADDRESS TO</p>
            <div class="form-row">

                <!-- Personnel (For) -->
                <div wire:ignore class="form-group col-md-3">
                    <label for="personnel">For</label>
                    <select wire:model="personnel" class="form-control select2" id="personnel">
                        <option value="" selected>-</option>    
                            @foreach($personnels as $personnel)
                                <option value="{{ $personnel->name }} / ({{ $personnel->div_unit }})">{{ $personnel->name }} ({{ $personnel->div_unit}})</option>
                            @endforeach
                    </select>
                    @error('personnel')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Department -->
                <div class="form-group col-md-3">
                    <label for="department">and/or <span style="margin-left:10px;">Head Office</span></label>
                    <select wire:model="selectedDepartment" wire:model.defer="department" class="form-control" >
                        <option value="" selected>-</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                    @error('department')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Office/Unit -->
                @if (!is_null($selectedDepartment))
                <div class="form-group col-md-3">
                    <label for="office">Office/Unit</label>
                    <select wire:model="selectedOffice" wire:model.defer="office" class="form-control" >
                        <option value="" selected>-</option>
                            @foreach($offices as $office)
                                <option value="{{ $office->id }}">{{ $office->name }}</option>
                            @endforeach
                    </select>
                </div>
                @endif
                
                <!-- Director/Division/Personnel -->
                @if (!is_null($selectedOffice))
                <div class="form-group col-md-3">
                    <label for="div_unit">Director/Division/Designation</label>
                    <select wire:model="selectedDiv_unit" wire:model.defer="div_unit" class="form-control">
                        <option value="" selected>-</option>
                            @foreach($div_units as $div_unit)
                                <option value="{{ $div_unit->name }}">{{ $div_unit->name }}</option>
                            @endforeach
                    </select>
                </div>
                @endif

                <!-- <div class="form-group col-md-3">
                    <label for="personnel">Personnel *</label>
                    <select wire:model="selectedPersonnel" wire:model.defer="personnel" name="personnels_id" class="form-control rounded-0">
                        <option value="" selected>-</option>
                        @if (!is_null($selectedDiv_unit))
                            @foreach($personnels as $personnel)
                                <option value="{{ $personnel->name }}">{{ $personnel->name }}</option>
                            @endforeach
                        @endif
                    </select>

                    <label for="personnel">Name *</label>
                    <div class="input-group">
                        <input type="text" class="form-control rounded-0" id="personnel" wire:model="personnel">
                        <div class="input-group-prepend"></div>
                    </div>
                    @error('personnel')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div> -->
            </div>

            <!-- Type & Class -->
            <div class="form-row">
                <div wire:ignore class="form-group col-md-6">
                    <label for="doc_type">Type <code>*</code></label>
                    <select wire:model.defer="doc_type" name="doc_type" class="form-control select2" id="doc_type">
                        <option value="" selected>-</option>
                        @foreach ($doctype as $doc_type)
                            <option value="{{$doc_type}}">{{$doc_type}}</option>
                        @endforeach
                    </select>
                    @error('doc_type')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div wire:ignore class="form-group col-md-6">
                    <label for="doc_class">Classification <code>*</code></label>
                    <select wire:model.defer="doc_class" name="doc_class" class="form-control select2" id="doc_class">
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

            <!-- Title & Subject -->
            <div class="form-row">
                <!-- <div class="form-group col-md-6">
                    <label for="title">Title *</label>
                    <textarea class="form-control rounded-0" id="title" rows="3" wire:model="title"></textarea>
                        @error('title')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div> -->

                <div class="form-group col-md-12">
                    <label for="subject">Subject <code>*</code></label>
                    <textarea class="form-control rounded-0" id="subject" rows="3" wire:model="subject"></textarea>
                        <ul class="text-muted well well-sm shadow-none">
                            <li>- Max Length: 1000 characters</li>
                            <li>- You may remove any sensitive information (monetary amounts, names, etc.). If they are not necessary in tracking the document.</li>
                        </ul>
                        @error('subject')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
            </div>
                    
            <!-- Sender's Details -->
            <nav aria-label="breadcrumb" class="mt-0 mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-info-circle"></i> Sending Details</li>
                </ol>
            </nav>

            <!-- MOD & Profile -->
            <div  class="form-row">
                <div wire:ignore class="form-group col-md-6">
                    <label for="mode_of_trans">Mode of Transmittal <code>*</code></label>
                    <select wire:model.defer="mode_of_trans" name="mode_of_trans" class="form-control select2" id="mode_of_trans">
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

@push('in-personnel-js')
<script>
    $(document).ready(function() {
        $('#personnel').select2();
        $('#personnel').on('change', function (e) {
            var data = $('#personnel').select2("val");
            @this.set('personnel', data);
        });
    });
</script>
@endpush

@push('in-doc_type-js')
<script>
    $(document).ready(function() {
        $('#doc_type').select2();
        $('#doc_type').on('change', function (e) {
            var data = $('#doc_type').select2("val");
            @this.set('doc_type', data);
        });
    });
</script>
@endpush

@push('in-doc_class-js')
<script>
    $(document).ready(function() {
        $('#doc_class').select2();
        $('#doc_class').on('change', function (e) {
            var data = $('#doc_class').select2("val");
            @this.set('doc_class', data);
        });
    });
</script>
@endpush

@push('in-mode_of_trans-js')
<script>
    $(document).ready(function() {
        $('#mode_of_trans').select2();
        $('#mode_of_trans').on('change', function (e) {
            var data = $('#mode_of_trans').select2("val");
            @this.set('mode_of_trans', data);
        });
    });
</script>
@endpush

<script>
    function goBack() {
        window.history.back();
    }
</script>
 
