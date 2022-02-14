<?php

namespace App\Http\Controllers;

use App\Externals;
use App\ExRoute;
use App\Http\Traits\DocCountsTrait;
use Illuminate\Http\Request;
use DataTables;

class ExternalRouteController extends Controller
{
    use DocCountsTrait;

    public function index(Request $request)
    {
        $exroute = ExRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'New')
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.forward.n.external', compact('exroute'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function assigned_total(Request $request)
    {
        $exroute_total = ExRoute::where('personnel', '=', auth()->user()->name)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.forward.a.external', compact('exroute_total'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }


}