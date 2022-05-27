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
        return view('livewire.files.forward.inroute.edit', ['inroute' => $inroute], compact('inroute'));
    }

    public function updateroute(Request $request, $id)
    {
        $request->validate([
            'action_req' => '',
            'due_date' => '',
            'modeoftrans' => '',
            'file_upload' => '',
            'sharepoint_link' => '',
            'note_comment_routed' => '',
    ]);
            $inroute = InRoute::find($id);
            $inroute->action_req = $request->action_req;
            $inroute->due_date = $request->due_date;
            $inroute->modeoftrans = $request->modeoftrans;
            $inroute->file_upload = $request->file_upload;
            $inroute->sharepoint_link = $request->sharepoint_link;
            $inroute->note_comment_routed = $request->note_comment_routed;
            $inroute->save();

            return redirect()->route('iv.index', $inroute->dts_no)
            ->with('success','Route Details updated successfully!');
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
            $inroute = InRoute::find($id);
            $inroute->status = $request->status;
            $inroute->outgoing = $request->outgoing;
            $inroute->note_comment_personnel = $request->note_comment_personnel;
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