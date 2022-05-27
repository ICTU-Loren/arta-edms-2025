<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Externals;
use App\Internals;
use App\ExRoute;
use App\InRoute;
use App\Http\Traits\DocCountsTrait;
use DataTables;

class ExternalStatusController extends Controller
{
    use DocCountsTrait;

    public function ex_department(Request $request)
    {
        $externals = Externals::where('created_by_department', '=', auth()->user()->department)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.department.external', compact('externals'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function exroute_department(Request $request)
    {
        $exroute = ExRoute::where('department', '=', auth()->user()->department_id)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.department.ead', compact('exroute'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function ex_office(Request $request)
    {
        $externals = Externals::where('created_by_office', '=', auth()->user()->office)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.office.external', compact('externals'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function exroute_office(Request $request)
    {
        $exroute = ExRoute::where('office', '=', auth()->user()->office_id)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.office.ead', compact('exroute'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function ex_div_unit(Request $request)
    {
        $externals = Externals::where('created_by_div_unit', '=', auth()->user()->div_unit)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.div-unit.external', compact('externals'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function exroute_div_unit(Request $request)
    {
        $exroute = ExRoute::where('div_unit', '=', auth()->user()->div_unit_id)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.div-unit.ead', compact('exroute'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }


}