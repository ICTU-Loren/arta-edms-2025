<?php

namespace App\Http\Livewire\Files;

use App\Externals;
use App\Models\Department;
use App\Models\Office;
use App\Models\Div_unit;
use App\Models\Personnel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Livewire\Component;
use Livewire\WithFileUploads;

class QrCode extends Component
{   
    public function render()
    {
        return view('livewire.files.qrcode');
    }
    
}
