<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Externals;
use App\Internals;
use App\Http\Traits\DocCountsTrait;
use DataTables;

class ExternalController extends Controller
{
    use DocCountsTrait;

    public function index(Request $request)
    {
        $externals = Externals::where('created_by', '=', auth()->user()->name)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('livewire.files.external', compact('externals'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }


}