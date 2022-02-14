<div>
    <div class="d-flex justify-content-end mb-2">
        @include('livewire.admin.create')
    </div>

    @include('livewire.admin.update')
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">
          {{ session('message') }}
        </div>
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Office</th>
                <th>Division/Unit</th>
                <th>Role</th>
                <th>Approved</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $value)
            <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->office }}</td>
                <td>{{ $value->division_unit }}</td>
                <td>{{ $value->role }}</td>
                <td>Yes/No</td>
                <td>
                <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm"><i class="fa fa-edit mr-0"></i> </button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>