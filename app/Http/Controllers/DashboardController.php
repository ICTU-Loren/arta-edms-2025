<?php

namespace App\Http\Controllers;

use App\Externals;
use App\ExRoute;
use App\Internals;
use App\InRoute;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{

    function __construct()
    {
        // $this->middleware(['role_or_permission:SuperAdmin|deparment_status|office_status|div_unit_status']);
        //  $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
        //  $this->middleware('permission:role-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('dashboard');
    }

    public function index() {
        $extcounts = ExRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'New')->count();
        $extprocounts = ExRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'In-progress')->count();
        $extholdcounts = ExRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'Hold')->count();
        $extdonecounts = ExRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'Done')->count();
        $extopen = Externals::where('created_by', '=', auth()->user()->name)->where('status', '=', 'Open')->count();
        $extclosed = Externals::where('created_by', '=', auth()->user()->name)->where('status', '=', 'Closed')->count();

        $allextcounts = ExRoute::where('status', '=', 'New')->count();
        $allextprocounts = ExRoute::where('status', '=', 'In-progress')->count();
        $allextholdcounts = ExRoute::where('status', '=', 'Hold')->count();
        $allextdonecounts = ExRoute::where('status', '=', 'Done')->count();

        $intcounts = InRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'New')->count();
        $intprocounts = InRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'In-progress')->count();
        $intholdcounts = InRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'Hold')->count();
        $intdonecounts = InRoute::where('personnel', '=', auth()->user()->name)->where('status', '=', 'Done')->count();
        $intopen = Internals::where('created_by', '=', auth()->user()->name)->where('status', '=', 'Open')->count();
        $intclosed = Internals::where('created_by', '=', auth()->user()->name)->where('status', '=', 'Closed')->count();

        $allintcounts = InRoute::where('status', '=', 'New')->count();
        $allintprocounts = InRoute::where('status', '=', 'In-progress')->count();
        $allintholdcounts = InRoute::where('status', '=', 'Hold')->count();
        $allintdonecounts = InRoute::where('status', '=', 'Done')->count();

        // My Files External Chart
        $my_ex_data = DB::table('externals')
            ->where('created_by', '=', auth()->user()->name)
            ->select(
                DB::raw('status as my_ex_status'),
                DB::raw('count(*) as number'))
            ->groupBy('my_ex_status')
            ->get();

        $my_ex_array[] = ['Status', 'Number'];
            foreach($my_ex_data as $key => $value)
            {
                $my_ex_array[++$key] = [$value->my_ex_status, $value->number];
            }

        // My Files Internal Chart
        $my_in_data = DB::table('internals')
            ->where('created_by', '=', auth()->user()->name)
            ->select(
                DB::raw('status as my_in_status'),
                DB::raw('count(*) as number'))
            ->groupBy('my_in_status')
            ->get();

        $my_in_array[] = ['Status', 'Number'];
            foreach($my_in_data as $key => $value)
            {
                $my_in_array[++$key] = [$value->my_in_status, $value->number];
            }

        // My External Route Chart
        $my_exroute_data = DB::table('ex_route')
            ->where('personnel', '=', auth()->user()->name)
            ->select(
                DB::raw('status as my_exroute_status'),
                DB::raw('count(*) as number'))
            ->groupBy('my_exroute_status')
            ->get();

        $my_exroute_array[] = ['Status', 'Number'];
            foreach($my_exroute_data as $key => $value)
            {
                $my_exroute_array[++$key] = [$value->my_exroute_status, $value->number];
            }
        
        // Department External Chart
        $ex_department_data = DB::table('externals')
            ->where('created_by_department', '=', auth()->user()->department)
            ->select(
                DB::raw('status as ex_department_status'),
                DB::raw('count(*) as number'))
            ->groupBy('ex_department_status')
            ->get();

        $ex_department_array[] = ['Status', 'Number'];
            foreach($ex_department_data as $key => $value)
            {
                $ex_department_array[++$key] = [$value->ex_department_status, $value->number];
            }   

        // Office External Chart
        $ex_office_data = DB::table('externals')
            ->where('created_by_office', '=', auth()->user()->office)
            ->select(
                DB::raw('status as ex_office_status'),
                DB::raw('count(*) as number'))
            ->groupBy('ex_office_status')
            ->get();

        $ex_office_array[] = ['Status', 'Number'];
            foreach($ex_office_data as $key => $value)
            {
                $ex_office_array[++$key] = [$value->ex_office_status, $value->number];
            }           
        
        // Div_Unit External Chart
        $ex_div_unit_data = DB::table('externals')
            ->where('created_by_div_unit', '=', auth()->user()->div_unit)
            ->select(
                DB::raw('status as ex_div_unit_status'),
                DB::raw('count(*) as number'))
            ->groupBy('ex_div_unit_status')
            ->get();

        $ex_div_unit_array[] = ['Status', 'Number'];
            foreach($ex_div_unit_data as $key => $value)
            {
                $ex_div_unit_array[++$key] = [$value->ex_div_unit_status, $value->number];
            }

        // Department External Route Chart
        $exroute_department_data = DB::table('ex_route')
            ->where('department', '=', auth()->user()->department_id)
            ->select(
                DB::raw('status as exroute_department_status'),
                DB::raw('count(*) as number'))
            ->groupBy('exroute_department_status')
            ->get();

        $exroute_department_array[] = ['Status', 'Number'];
            foreach($exroute_department_data as $key => $value)
            {
                $exroute_department_array[++$key] = [$value->exroute_department_status, $value->number];
            }
        

        // Office External Route Chart
        $exroute_office_data = DB::table('ex_route')
            ->where('office', '=', auth()->user()->office_id)
            ->select(
                DB::raw('status as exroute_office_status'),
                DB::raw('count(*) as number'))
            ->groupBy('exroute_office_status')
            ->get();

        $exroute_office_array[] = ['Status', 'Number'];
            foreach($exroute_office_data as $key => $value)
            {
                $exroute_office_array[++$key] = [$value->exroute_office_status, $value->number];
            }

        // Div_Unit External Route Chart
        $exroute_div_unit_data = DB::table('ex_route')
            ->where('div_unit', '=', auth()->user()->div_unit_id)
            ->select(
                DB::raw('status as exroute_div_unit_status'),
                DB::raw('count(*) as number'))
            ->groupBy('exroute_div_unit_status')
            ->get();

        $exroute_div_unit_array[] = ['Status', 'Number'];
            foreach($exroute_div_unit_data as $key => $value)
            {
                $exroute_div_unit_array[++$key] = [$value->exroute_div_unit_status, $value->number];
            }



        // Department Internal Chart
        $in_department_data = DB::table('internals')
            ->where('created_by_department', '=', auth()->user()->department)
            ->select(
                DB::raw('status as in_department_status'),
                DB::raw('count(*) as number'))
            ->groupBy('in_department_status')
            ->get();

        $in_department_array[] = ['Status', 'Number'];
            foreach($in_department_data as $key => $value)
            {
                $in_department_array[++$key] = [$value->in_department_status, $value->number];
            }

        // Office Internal Chart
        $in_office_data = DB::table('internals')
            ->where('created_by_office', '=', auth()->user()->office)
            ->select(
                DB::raw('status as in_office_status'),
                DB::raw('count(*) as number'))
            ->groupBy('in_office_status')
            ->get();

        $in_office_array[] = ['Status', 'Number'];
            foreach($in_office_data as $key => $value)
            {
                $in_office_array[++$key] = [$value->in_office_status, $value->number];
            }
            
        // Div_Unit Internal Chart
        $in_div_unit_data = DB::table('internals')
            ->where('created_by_div_unit', '=', auth()->user()->div_unit)
            ->select(
                DB::raw('status as in_div_unit_status'),
                DB::raw('count(*) as number'))
            ->groupBy('in_div_unit_status')
            ->get();

        $in_div_unit_array[] = ['Status', 'Number'];
            foreach($in_div_unit_data as $key => $value)
            {
                $in_div_unit_array[++$key] = [$value->in_div_unit_status, $value->number];
            }   

        // Department Internal Route Chart
        $inroute_department_data = DB::table('in_route')
            ->where('department', '=', auth()->user()->department_id)
            ->select(
                DB::raw('status as inroute_department_status'),
                DB::raw('count(*) as number'))
            ->groupBy('inroute_department_status')
            ->get();

        $inroute_department_array[] = ['Status', 'Number'];
            foreach($inroute_department_data as $key => $value)
            {
                $inroute_department_array[++$key] = [$value->inroute_department_status, $value->number];
            }

        // Office Internal Route Chart
        $inroute_office_data = DB::table('in_route')
            ->where('office', '=', auth()->user()->office_id)
            ->select(
                DB::raw('status as inroute_office_status'),
                DB::raw('count(*) as number'))
            ->groupBy('inroute_office_status')
            ->get();

        $inroute_office_array[] = ['Status', 'Number'];
            foreach($inroute_office_data as $key => $value)
            {
                $inroute_office_array[++$key] = [$value->inroute_office_status, $value->number];
            }

        // Div_Unit Internal Route Chart
        $inroute_div_unit_data = DB::table('in_route')
            ->where('div_unit', '=', auth()->user()->div_unit_id)
            ->select(
                DB::raw('status as inroute_div_unit_status'),
                DB::raw('count(*) as number'))
            ->groupBy('inroute_div_unit_status')
            ->get();

        $inroute_div_unit_array[] = ['Status', 'Number'];
            foreach($inroute_div_unit_data as $key => $value)
            {
                $inroute_div_unit_array[++$key] = [$value->inroute_div_unit_status, $value->number];
            }
        
        return view('dashboard',  [
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
            'intclosed' => $intclosed,

            'my_ex_status' => json_encode($my_ex_array),
            'my_in_status' => json_encode($my_in_array),
            'my_exroute_status' => json_encode($my_exroute_array),

            'ex_department_status' => json_encode($ex_department_array),
            'ex_office_status' => json_encode($ex_office_array),
            'ex_div_unit_status' => json_encode($ex_div_unit_array),

            'exroute_department_status' => json_encode($exroute_department_array),
            'exroute_office_status' => json_encode($exroute_office_array),
            'exroute_div_unit_status' => json_encode($exroute_div_unit_array),
           
            'in_department_status' => json_encode($in_department_array),
            'in_office_status' => json_encode($in_office_array),
            'in_div_unit_status' => json_encode($in_div_unit_array),

            'inroute_department_status' => json_encode($inroute_department_array),
            'inroute_office_status' => json_encode($inroute_office_array),
            'inroute_div_unit_status' => json_encode($inroute_div_unit_array)
        ], compact(
            'extcounts', 'extprocounts', 'extholdcounts', 'extdonecounts', 
            'extopen', 'extclosed',
            'allextcounts', 'allextprocounts', 'allextholdcounts', 'allextdonecounts',
            'allintcounts', 'allintprocounts', 'allintholdcounts', 'allintdonecounts', 
            'intcounts','intprocounts', 'intholdcounts', 'intdonecounts', 'intopen', 'intclosed', ));
    }
}