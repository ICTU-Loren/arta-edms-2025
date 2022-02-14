<?php

namespace App\Http\Controllers;

use App\Externals;
use App\ExRoute;
use App\Internals;
use App\InRoute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ChartJSController extends Controller
{
    function index()
    {
     $data = DB::table('internals')
      ->where('created_by_div_unit', '=', auth()->user()->div_unit)
       ->select(
          DB::raw('status as status'),
          DB::raw('count(*) as number'))
       ->groupBy('status')
       ->get();
     $array[] = ['Status', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->status, $value->number];
     }
     return view('internal-chart-jsdashboard')->with('status', json_encode($array));
    }
}
