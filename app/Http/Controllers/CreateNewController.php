<?php

namespace App\Http\Controllers;

use App\Externals;
use App\Models\Department;
use App\Models\DocClass1;
use App\Models\DocType;
use App\Models\ModeofTrans;
use App\Models\SProfile;
use App\Models\User;
use App\Http\Controllers\DropdownController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Livewire\Component;
use DB;

class CreateNewController extends Controller
{   
    public function index()
	{
		$department = DB::table("department")->pluck("name","id");
		return view('dropdown',compact('department'));

        $doc_class = DocClass1::all();
        $doc_type = DocType::all();
        $mode_of_trans = ModeofTrans::all();
        $s_profile = SProfile::all();
        $received_by = User::all();
	}

    public function render()
    {
        $doc_class = DocClass1::all();
        $doc_type = DocType::all();
        $mode_of_trans = ModeofTrans::all();
        $s_profile = SProfile::all();
        $received_by = User::all();

        return view('livewire.docs.e.create-new', [
            'doc_class' => $doc_class,
        ]);
    }

}
