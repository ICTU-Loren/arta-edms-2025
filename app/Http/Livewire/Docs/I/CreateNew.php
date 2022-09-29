<?php

namespace App\Http\Livewire\Docs\I;

use App\Internals;
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
    public $selectedPersonnel = null;

    public function mount($selectedPersonnel = null)
    {
        $this->departments = Department::all();
        $this->offices = collect();
        $this->div_units = collect();
        $this->personnels = Personnel::all();
        $this->selectedPersonnel = $selectedPersonnel;

        if (!is_null($selectedPersonnel)) {
            $personnels = Personnel::with('departments.offices.div_units')->find($selectedPersonnel);
            if ($personnels) {
                $this->personnels = Personnel::where('div_unit_id', $personnels->div_units_id)->get();
                $this->div_units = Div_unit::where('office_id', $personnels->div_units->offices_id)->get();
                $this->offices = Office::where('department_id', $personnels->div_units->offices->departments_id)->get();
                $this->selectedDepartment = $personnels->div_units->offices->departments_id;
                $this->selectedOffice = $personnels->div_units->offices_id;
                $this->selectedDiv_unit = $personnel->div_units_id;
            }
        }
    }

    public function render()
    {
        return view('livewire.docs.i.create-new');
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

    public function updatedSelectedDiv_unit($div_units)
    {
        if (!is_null($div_units)) {
            $this->personnels = Personnel::where('div_unit_id', $div_units)->orderBy('name')->get();
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
        'E-DTS',
        'E-mail',
        'Messenger',
        'Personal / Walk-in',
        'Snail Mail'
    ];

    public $sprofile = [
        'Government-Owned and Controlled Corporation (GOCC)',
        'Local Government Unit (LGU)',
        'National Government Agency (NGA)',
        'Private'
    ];

    use WithFileUploads;

    public $dts = 'IN2022-000';
    public $department;
    public $office;
    public $div_unit;
    public $personnel;
    public $doc_class;
    public $doc_type;
    public $title;
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
            'dts' => '',
            'department' => 'required',
            'office' => '',
            'div_unit' => '',
            'personnel' => 'required',
            'doc_class' => 'required',
            'doc_type' => 'required',
            'title' => 'required',
            'subject' => 'required',
            'mode_of_trans' => 'required',
            's_profile' => '',
            's_name' => '',
            's_address' => '',
            's_email' => '',
            's_contact' => '',
            'received_by' => '',
            'comment' => '',
            'date_received' => '',
            'time_received' => '',
            'created_by' => '',
            'created_by_user_id' => '',
            'created_by_department' => '',
            'created_by_office' => '',
            'created_by_div_unit' => '',
        ]);
        
        $created_by = Auth::user()->name;
        $data['created_by']=$created_by;

        $s_name = Auth::user()->name;
        $data['s_name']=$s_name;

        $s_address = Auth::user()->div_unit;
        $data['s_adre$s_address']=$s_address;

        $s_email = Auth::user()->email;
        $data['s_email']=$s_email;

        $created_by_user_id = Auth::user()->id;
        $data['created_by_user_id']=$created_by_user_id;

        $created_by_department = Auth::user()->department;
        $data['created_by_department']=$created_by_department;

        $created_by_office = Auth::user()->office;
        $data['created_by_office']=$created_by_office;

        $created_by_div_unit = Auth::user()->div_unit;
        $data['created_by_div_unit']=$created_by_div_unit;

        Internals::create($data);
        session()->flash('message', 'New document successfully created!');
        return redirect()->to('/files/internal');

    }
}
