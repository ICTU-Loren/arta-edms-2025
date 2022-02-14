<?php

namespace App\Http\Controllers;

use App\Internals;
use App\InRoute;
use App\Http\Traits\DocCountsTrait;
use Illuminate\Http\Request;
use DataTables;

class ProInRouteController extends Controller
{
    use DocCountsTrait;

    public function index(Request $request)
    {
        $inroute = InRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'In-progress')
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.forward.p.internal', compact('inroute'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }


}