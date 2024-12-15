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
        $this->departments = Department::orderBy('id')->get();
        $this->offices = collect();
        $this->div_units = collect();

        $this->personnels = User::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.docs.e.create-new');
    }

    public function updatedSelectedDepartment($departments)
    {
        if (!is_null($departments)) {
            $this->offices = Office::where('department_id', $departments)->orderBy('id')->get();
        }
    }

    public function updatedSelectedOffice($offices)
    {
        if (!is_null($offices)) {
            $this->div_units = Div_unit::where('office_id', $offices)->orderBy('id')->get();
        }
    }

    public $doctype = [
        'Hardcopy',
        'Softcopy'
    ];

    public $docclass = [
        'Administrative Order',
        'Administrative Circular',
        'Advisory',
        'Circular',
        'Complaint',
        'Confidential',
        'Department Order',
        'Form',
        'Invitation',
        'Joint Memorandum Circular',
        'Letter',
        'Magazine',
        'Memorandum Circular',
        'Memorandum of Agreement',
        'Memorandum of Understanding',
        'Memorandum Order',
        'News Print',
        'Office Order',
        'Ordinance',
        'Payable',
        'Payroll',
        'Procurement',
        'Project Procurement Management Plan',
        'Regulation',
        'Report',
        'Restricted',
        'Sealed',
        'Travel Order',
        'Unclassified',
        'Work and Financial Plan'
    ];

    public $modeoftrans = [
        'Courier',
        'Email',
        'In person',
        'PhilPost',
        'Social Media',
        'Website'
    ];

    public $sprofile = [
        'Government-Owned and Controlled Corporation (GOCC)',
        'Local Government Unit (LGU)',
        'National Government Agency (NGA)',
        'General Public',
        'Private Sector',
        'State Universities and Colleges (SUC)',
        'Water District (WD)'
    ];

    use WithFileUploads;

    public $dts = 'EX2025-01-000';
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
            'department' => '',
            'office' => '',
            'div_unit' => '',
            'personnel' => '',
            'doc_class' => 'required',
            'doc_type' => 'required',
            'title' => '',
            'subject' => 'required',
            'mode_of_trans' => 'required',
            's_profile' => 'required',
            's_name' => 'required',
            's_address' => '',
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
