<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Externals;
use App\Internals;
use App\Http\Traits\DocCountsTrait;
use DataTables;

class InternalController extends Controller
{
    use DocCountsTrait;

    public function index(Request $request)
    {
        $internals = Internals::where('created_by', '=', auth()->user()->name)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.internal', compact('internals'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }


}