<?php

namespace App\Http\Controllers;

use App\Externals;
use App\ExRoute;
use App\Http\Traits\DocCountsTrait;
use Illuminate\Http\Request;
use DataTables;

class HoldExRouteController extends Controller
{
    use DocCountsTrait;

    public function index(Request $request)
    {
        $exroute = ExRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'Hold')
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.forward.h.external', compact('exroute'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }


}