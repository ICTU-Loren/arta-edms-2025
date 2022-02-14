<?php

namespace App\Http\Controllers;

use App\Externals;
use App\Http\Livewire\Docs\E\CreateNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
class DropdownController extends Controller
{
	public function index()
	{
		//$department = DB::table("department")->pluck("shortname","id");
		//return view('dropdown',compact('department'));
	}

	public function getOffice(Request $request)
	{
		$office = DB::table("office")
		->where("department_id",$request->department_id)
		->pluck("name","id");
		return response()->json($office);
	}

	public function getDiv_unit(Request $request)
	{
		$div_unit = DB::table("div_unit")
		->where("office_id",$request->office_id)
		->pluck("name","id");
		return response()->json($div_unit);
	}

    public function getPersonnel(Request $request)
	{
		$personnel = DB::table("users")
		->where("div_unit_id",$request->div_unit_id)
		->pluck("name","id");
		return response()->json($personnel);
	}
}