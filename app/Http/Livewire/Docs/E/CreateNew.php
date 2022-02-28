<?php

namespace App\Http\Livewire\Docs\E;

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

class CreateNew extends Component
{   
    public $departments;
    public $offices;
    public $div_units;
    public $personnels;

    public $selectedDepartment = null;
    public $selectedOffice = null;
    public $selectedDiv_unit = null;

    public function mount()
    {
        $this->departments = Department::all();
        $this->offices = collect();
        $this->div_units = collect();

        $this->personnels = User::all();
    }

    public function render()
    {
        return view('livewire.docs.e.create-new');
    }

    public function updatedSelectedDepartment($departments)
    {
        if (!is_null($departments)) {
            $this->offices = Office::where('department_id', $departments)->orderBy('name')->get();
        }
    }

    public function updatedSelectedOffice($offices)
    {
        if (!is_null($offices)) {
            $this->div_units = Div_unit::where('office_id', $offices)->orderBy('name')->get();
        }
    }

    public $doctype = [
        'Hardcopy',
        'Softcopy'
    ];

    public $docclass = [
        'Complaints',
        'Confidential',
        'Department Order',
        'E-mail',
        'Forms',
        'Invitation',
        'Joint Memorandum Circular',
        'Letter',
        'Magazine',
        'Memorandum Circular',
        'News Print',
        'Office Order',
        'Payable',
        'Payroll',
        'Procurement',
        'Restricted',
        'Sealed',
        'Unclassified'
    ];

    public $modeoftrans = [
        'Courier',
        'E-mail',
        'Messenger',
        'Personal / Walk-in',
        'PhilPost',
        'Registered',
        'Snail Mail'
    ];

    public $sprofile = [
        'Government-Owned and Controlled Corporation (GOCC)',
        'Local Government Unit (LGU)',
        'National Government Agency (NGA)',
        'Private'
    ];

    use WithFileUploads;

    public $department;
    public $office;
    public $div_unit;
    public $personnel;
    public $doc_class;
    public $doc_type;
    public $subject;
    public $mode_of_trans;
    public $s_profile;
    public $s_name;
    public $s_address;
    public $s_email;
    public $s_contact;
    public $received_by;
    public $comment;
    public $date_received;
    public $time_received;
    public $created_by;
    public $created_by_user_id;
    public $created_by_department;
    public $created_by_office;
    public $created_by_div_unit;
  
    public function submit()
    {
        $data = $this->validate([
            'department' => 'required',
            'office' => '',
            'div_unit' => '',
            'personnel' => 'required',
            'doc_class' => 'required',
            'doc_type' => 'required',
            'subject' => 'required',
            'mode_of_trans' => '',
            's_profile' => '',
            's_name' => 'required',
            's_address' => 'required',
            's_email' => '',
            's_contact' => '',
            'received_by' => 'required',
            'comment' => '',
            'date_received' => 'required',
            'time_received' => 'required',
            'created_by' => '',
            'created_by_user_id' => '',
            'created_by_department' => '',
            'created_by_office' => '',
            'created_by_div_unit' => '',
        ]);
        
        $created_by = Auth::user()->name;
        $data['created_by']=$created_by;

        $created_by_user_id = Auth::user()->id;
        $data['created_by_user_id']=$created_by_user_id;

        $created_by_department = Auth::user()->department;
        $data['created_by_department']=$created_by_department;

        $created_by_office = Auth::user()->office;
        $data['created_by_office']=$created_by_office;

        $created_by_div_unit = Auth::user()->div_unit;
        $data['created_by_div_unit']=$created_by_div_unit;

        Externals::create($data);
        session()->flash('message', 'New document successfully created!');
        return redirect()->to('/files/external');

    }
}
