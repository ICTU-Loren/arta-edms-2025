<?php  

namespace App\Http\Controllers;

use App\Internals;
use App\InRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Carbon\Carbon;

class DocIdInRouteController extends Controller  
{  

    public function display($id)
    {
        $internals = Internals::find($id);
        return view('livewire.files.iv.show', ['internals' => $internals], compact('internals'))
        ->with('inroute', InRoute::orderBy('id','desc')->where('dts_no', $id)->get());
    }

    public function displayroute($dts_no)
    {
        $inroute = InRoute::find($id);
        return view('livewire.files.iv.show', ['inroute' => $inroute], compact('inroute'));
    }

    public function edit($id)
    {
        $inroute = InRoute::find($id);
        return view('livewire.files.forward.edit', ['inroute' => $inroute], compact('inroute'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'doc_class' => 'required',
            'cc_email' => '',
            'modified_at' => '',
            // 'sent_date' => 'required',
            // 'sent_time' => 'required',
    ]);
            $inroute = InRoute::find($id);
            $inroute->status = $request->status;
            $inroute->doc_class = $request->doc_class;
            $inroute->cc_email = $request->cc_email;
            $inroute->modified_at = Carbon::now()->toDateTimeString();
            // $inroute->sent_date = $request->sent_date;
            // $inroute->sent_time = $request->sent_time;
            $inroute->save();

            return redirect()->route('iv.index', $inroute->dts_no)
            ->with('success','Document updated successfully!');
    }

    public function open(Request $request, $id)
    {
        $request->validate([
            'open_at' => '',
    ]);
            $inroute = InRoute::find($id);
            $inroute->open_at = Carbon::now()->toDateTimeString();
            $inroute->save();

            return redirect()->route('iv.index', $inroute->dts_no);
    }

    public function print($id)
      {
        $internals = internals::find($id);
        return view('livewire.files.forward.inroute.print', ['internals' => $internals], compact('internals'))
        ->with('inroute', InRoute::orderBy('id','desc')->where('dts_no', $id)->get());
      }

    public function destroy(Request $request)
    {
        $doc = Internals::where('id',$request->id)->delete();
        return Response()->json($doc);
    }
}