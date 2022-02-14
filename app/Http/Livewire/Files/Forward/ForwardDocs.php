<?php

namespace App\Http\Livewire\Files\Forward;

use App\Externals;
use App\ExRoute;
use App\Models\Department;
use App\Models\Office;
use App\Models\Div_unit;
use App\Models\Personnel;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class ForwardDocs extends Component
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

    public $actions = [
        'For appropriate action',
        'For approval',
        'For comment/reaction/response',
        'For compliance/implementation',
        'For dissemination of information',
        'For draft of reply',
        'For endorsement/recommendation',
        'For filing',
        'For follow-up',
        'For investigation/verification and report',
        'For notation and return/file',
        'For notification/reply to party',
        'For reply',
        'For review',
        'For revision',
        'For signature',
        'For study and report to',
        'For your information'
    ];

    public $statusroute = [
        'Open',
        'In-progress',
        'Hold',
        'Done'
    ];

    public $exdocclass = [
        'External',
        'Internal'
    ];

    public $exmodeoftrans = [
        'Courier',
        'E-DTS',
        'E-mail',
        'Messenger',
        'Personal / Walk-in',
        'PhilPost',
        'Registered',
        'Snail Mail'
    ];

    use WithFileUploads;

    public $dts_no;
    public $status = 'New';
    public $department;
    public $department_id;
    public $office;
    public $office_id;
    public $div_unit;
    public $div_unit_id;
    public $personnel;
    public $personnel_id;
    public $action_req;
    public $subject;
    public $assigned_date;
    public $due_date;
    public $file_upload;
    public $cc_email = '- ';
    public $note_comment = '- ';
    public $doc_class;
    public $doc_type;
    public $sent_date;
    public $sent_time;
    public $modeoftrans;
    public $routed_by;
    public $routed_by_div_unit;
    public $modified_at;
  
    public function submit()
    {

        $validatedData = $this->validate([
            'dts_no' => '',
            'status' => '',
            'department' => 'required',
            'department_id' => '',
            'office' => 'required',
            'office_id' => '',
            'div_unit' => 'required',
            'div_unit_id' => '',
            'personnel' => 'required',
            'personnel_id' => '',
            'action_req' => 'required',
            'subject' => 'required',
            'assigned_date' => '',
            'due_date' => '',
            'file_upload' => 'nullable|mimes:pdf,docx,jpg,jpeg,png|max:1024',
            'cc_email' => '',
            'note_comment' => '',
            'doc_class' => '',
            'doc_type' => '',
            'sent_date'=> '',
            'sent_time'=> '',
            'modeoftrans' => '',
            'routed_by' => '',
            'routed_by_div_unit' => '',
        ]);

        $dts_no = str_replace(('http://127.0.0.1:8000/files/ev/'), '', url()->previous());
        $validatedData['dts_no']=$dts_no;

        $assigned_date = Carbon::now()->toDateTimeString();
        $validatedData['assigned_date']=$assigned_date;

        $routed_by = Auth::user()->name;
        $validatedData['routed_by']=$routed_by;

        $routed_by_div_unit = Auth::user()->div_unit;
        $validatedData['routed_by_div_unit']=$routed_by_div_unit;

        $file_upload = $this->file_upload->store('files','public');
        $validatedData['file_upload'] = $file_upload;
  
        ExRoute::create($validatedData);
        
        // return redirect()->back();
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message', 'Document successfully routed to the assigned Office/Personnel!');
    }

    public function render()
    {
        return view('livewire.files.forward.forward-docs');
    }
}