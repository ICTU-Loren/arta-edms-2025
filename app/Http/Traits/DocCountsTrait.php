<?php

namespace App\Http\Traits;
use App\Externals;
use App\ExRoute;
use App\Internals;
use App\InRoute;

trait DocCountsTrait {
    public function docstatus() {
        // Fetch all the Assigned Document.
        $extcounts = ExRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'New')->count();
        $extprocounts = ExRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'In-progress')->count();
        $extholdcounts = ExRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'Hold')->count();
        $extdonecounts = ExRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'Done')->count();
        $extopen = Externals::where('created_by', '=', auth()->user()->name)->where('status', '=', 'Open')->count();
        $extclosed = Externals::where('created_by', '=', auth()->user()->name)->where('status', '=', 'Closed')->count();

        $intcounts = InRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'New')->count();
        $intprocounts = InRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'In-progress')->count();
        $intholdcounts = InRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'Hold')->count();
        $intdonecounts = InRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'Done')->count();
        $intopen = Internals::where('created_by', '=', auth()->user()->name)->where('status', '=', 'Open')->count();
        $intclosed = Internals::where('created_by', '=', auth()->user()->name)->where('status', '=', 'Closed')->count();

        return view('livewire.files.external',  [
            'extcounts' => $extcounts,
            'extprocounts' => $extprocounts,
            'extholdcounts' => $extholdcounts,
            'extdonecounts' => $extdonecounts,
            'extopen' => $extopen,
            'extclosed' => $extclosed,
            'intcounts' => $intcounts,
            'intprocounts' => $intprocounts,
            'intholdcounts' => $intholdcounts,
            'intdonecounts' => $intdonecounts,
            'intopen' => $intopen,
            'intclosed' => $intclosed
        ], compact(
            'extcounts', 'extprocounts', 'extholdcounts', 'extdonecounts', 'extopen', 'extclosed', 
            'intcounts','intprocounts', 'intholdcounts', 'intdonecounts', 'intopen', 'intclosed', ));
    }
}