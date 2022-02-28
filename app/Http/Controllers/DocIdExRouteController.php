<?php  

namespace App\Http\Controllers;

use App\Externals;
use App\ExRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Carbon\Carbon;
use PDF;

class DocIdExRouteController extends Controller  
{  

    public function display($id)
    {
        $externals = Externals::find($id);
        return view('livewire.files.ev.show', ['externals' => $externals], compact('externals'))
        ->with('exroute', ExRoute::orderBy('id','desc')->where('dts_no', $id)->get());
    }

    public function displayroute($dts_no)
    {
        $exroute = ExRoute::find($id);
        return view('livewire.files.ev.show', ['exroute' => $exroute], compact('exroute'));
    }

    public function edit($id)
    {
        $exroute = ExRoute::find($id);
        return view('livewire.files.forward.edit', ['exroute' => $exroute], compact('exroute'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'outgoing' => 'required',
            'note_comment_personnel' => '',
            'modified_at' => '',
            // 'sent_date' => 'required',
            // 'sent_time' => 'required',
    ]);
            $exroute = ExRoute::find($id);
            $exroute->status = $request->status;
            $exroute->outgoing = $request->outgoing;
            $exroute->note_comment_personnel = $request->note_comment_personnel;
            $exroute->modified_at = Carbon::now()->toDateTimeString();
            // $exroute->sent_date = $request->sent_date;
            // $exroute->sent_time = $request->sent_time;
            $exroute->save();

            return redirect()->route('ev.index', $exroute->dts_no)
            ->with('success','Document updated successfully!');
    }

    public function open(Request $request, $id)
    {
        $request->validate([
            'open_at' => '',
    ]);
            $exroute = ExRoute::find($id);
            $exroute->open_at = Carbon::now()->toDateTimeString();
            $exroute->save();

            return redirect()->route('ev.index', $exroute->dts_no);
    }

    public function print($id)
      {
        $externals = Externals::find($id);
        return view('livewire.files.forward.exroute.print', ['externals' => $externals], compact('externals'))
        ->with('exroute', ExRoute::orderBy('id','desc')->where('dts_no', $id)->get());
      }

    public function createPDF($id) 
    {
        $externals = Externals::find($id);
        return view('livewire.files.forward.exroute.print', ['externals' => $externals], compact('externals'))
        ->with('exroute', ExRoute::orderBy('id','desc')->where('dts_no', $id)->get());
        view()->share('exroute',$exroute);
            
        $pdf = PDF::loadView('livewire.files.forward.exroute.pdf', ['exroute' => $exroute]);
        return $pdf->download('route_history.pdf');
    }

    public function destroy(Request $request)
    {
        $doc = Externals::where('id',$request->id)->delete();
        return Response()->json($doc);
    }
}