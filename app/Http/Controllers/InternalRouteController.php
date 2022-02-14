<?php

namespace App\Http\Controllers;

use App\Internals;
use App\InRoute;
use App\Http\Traits\DocCountsTrait;
use Illuminate\Http\Request;
use DataTables;

class InternalRouteController extends Controller
{
    use DocCountsTrait;

    public function index(Request $request)
    {
        $inroute = InRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'New')
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.forward.n.internal', compact('inroute'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function assigned_total(Request $request)
    {
        $inroute_total = InRoute::where('personnel', '=', auth()->user()->name)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.forward.a.internal', compact('inroute_total'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }


}