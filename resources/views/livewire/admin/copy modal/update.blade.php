<!-- Modal -->
<div wire:ignore.self class="modal fade bd-example-modal-lg" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>User ID</label>
                            <input type="text" class="form-control" placeholder="{{ $user_id }}" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput2">Role</label>
                            <input type="text" class="form-control" wire:model="role" id="exampleFormControlInput5" placeholder=" Enter role">
                            @error('role') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    
                        <div class="form-group">
                            <input type="hidden" wire:model="user_id">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" placeholder="Enter name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Email address</label>
                            <input type="email" class="form-control" wire:model="email" id="exampleFormControlInput2" placeholder="Enter email">
                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput2">Office</label>
                            <input type="text" class="form-control" wire:model="office" id="exampleFormControlInput3" placeholder="Enter office">
                            @error('office') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput2">Division/Unit</label>
                            <input type="text" class="form-control" wire:model="division_unit" id="exampleFormControlInput4" placeholder="Enter division/unit">
                            @error('division_unit') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save changes</button>
            </div>
       </div>
    </div>
</div>