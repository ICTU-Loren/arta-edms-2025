<?php  

namespace App\Http\Controllers;

use App\Externals;
use App\ExRoute;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use PDF;

class DocIdExController extends Controller  
{  

    public function display($id)
    {
        $externals = Externals::find($id);
        return view('livewire.files.ev.show', ['externals' => $externals], compact('externals'))
        ->with('exroute', ExRoute::orderBy('id','desc')->where('dts_no', $id)->get());
    }

    public function edit($id)
    {
        $externals = Externals::find($id);
        return view('livewire.files.ev.edit', ['externals' => $externals], compact('externals'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'modified_by' => '',
            'modified_by_div_unit' => '',
    ]);
            $externals = Externals::find($id);
            $externals->status = $request->status;
            $externals->modified_by = Auth::user()->name;
            $externals->modified_by_div_unit = Auth::user()->div_unit;
            $externals->save();

            return redirect()->route('ev.index', $externals->id)
            ->with('success','This document is now closed.');
    }

    public function print($id)
    {
      $externals = Externals::find($id);
      return view('livewire.files.ev.print', ['externals' => $externals], compact('externals'));
    }

    public function createPDF($id) 
    {
      $externals = Externals::find($id);
      view()->share('externals',$externals);

      $path_header = public_path('images/ARTA-OP.png');
      $path_footer = public_path('images/footer-logo.jpg');
      $typehead = pathinfo($path_header, PATHINFO_EXTENSION);
      $typefoot = pathinfo($path_footer, PATHINFO_EXTENSION);
      $datahead = file_get_contents($path_header);
      $datafoot = file_get_contents($path_footer);
      $header_logo = 'data:image/'. $typehead . ';base64,'. base64_encode($datahead);
      $footer_logo = 'data:image/'. $typefoot . ';base64,'. base64_encode($datafoot);
        
      $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true])
        ->loadView('livewire.files.ev.pdf', compact('externals', 'path_header', 'path_footer', 'datahead', 'datafoot', 'header_logo', 'footer_logo'));
      return $pdf->download('overview.pdf');
    }
    
    public function destroy(Request $request)
    {
        $doc = Externals::where('id',$request->id)->delete();
        return Response()->json($doc);
    }
}