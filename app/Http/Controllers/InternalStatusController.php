<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Externals;
use App\Internals;
use App\ExRoute;
use App\InRoute;
use App\Http\Traits\DocCountsTrait;
use DataTables;

class InternalStatusController extends Controller
{
    use DocCountsTrait;

    public function in_department(Request $request)
    {
        $internals = Internals::where('created_by_department', '=', auth()->user()->department)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.department.internal', compact('internals'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function inroute_department(Request $request)
    {
        $inroute = InRoute::where('department', '=', auth()->user()->department_id)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.department.iad', compact('inroute'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function in_office(Request $request)
    {
        $internals = Internals::where('created_by_office', '=', auth()->user()->office)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.office.internal', compact('internals'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function inroute_office(Request $request)
    {
        $inroute = InRoute::where('office', '=', auth()->user()->office_id)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.office.iad', compact('inroute'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function in_div_unit(Request $request)
    {
        $internals = Internals::where('created_by_div_unit', '=', auth()->user()->div_unit)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.div-unit.internal', compact('internals'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function inroute_div_unit(Request $request)
    {
        $inroute = InRoute::where('div_unit', '=', auth()->user()->div_unit_id)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.div-unit.iad', compact('inroute'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }


}