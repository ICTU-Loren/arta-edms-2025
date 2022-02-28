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

    public $selectedDepartment = NULL;
    public $selectedOffice = NULL;
    public $selectedDivunit = NULL;

    public function mount()
    {
        $this->departments = Department::all();
        $this->offices = collect();
        $this->div_units = collect();
        $this->personnels = collect();
    }

    public function render()
    {
        return view('livewire.files.forward.forward-docs');
    }

    public function updatedSelectedDepartment($department)
    {
        if (!is_null($department)) {
            $this->offices = Office::where('department_id', $department)->orderBy('name')->get();
        }
    }

    public function updatedSelectedOffice($office)
    {
        if (!is_null($office)) {
            $this->div_units = Div_unit::where('office_id', $office)->orderBy('name')->get();
        }
    }

    public function updatedSelectedDivunit($div_unit)
    {
        if (!is_null($div_unit)) {
            $this->personnels = User::where('div_unit_id', $div_unit)->orderBy('name')->get();
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
    public $sharepoint_link;
    public $note_comment_routed;
    public $cc_email;
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
            'sharepoint_link' => '',
            'note_comment_routed' => '',
            'cc_email' => '',
            'doc_class' => '',
            'doc_type' => '',
            'sent_date'=> '',
            'sent_time'=> '',
            'modeoftrans' => 'required',
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

        if ($this->file_upload == null) {
            $file_upload ="";
        }else {
            $file_upload = $this->file_upload->store('files','public');
        }
        $validatedData['file_upload'] = $file_upload;
  
        ExRoute::create($validatedData);
        
        // return redirect()->back();
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message', 'Document successfully routed to the assigned Office/Personnel!');
    }

}