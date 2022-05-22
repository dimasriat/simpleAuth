<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RidaAppController extends Controller
{
	public function index()
	{
		return view('welcome');
	}

	public function app(Request $request)
	{
		
		$condition = array();
		if ($request->input('jenis_staff')) {
			array_push($condition, ['jenis_staff', '=', $request->input('jenis_staff')]);
		}
		if ($request->input('status_pegawai')) {
			array_push($condition, ['status_pegawai', '=', $request->input('status_pegawai')]);
		}
		if ($request->input('unit')) {
			array_push($condition, ['unit', '=', $request->input('unit')]);
		}
		if ($request->input('jenis_kelamin')) {
			array_push($condition, ['jenis_kelamin', '=', $request->input('jenis_kelamin')]);
		}

		$data_pegawai = DB::table('data_pegawai')
			->where($condition)
			->orderBy('id', 'ASC')
			->get();
		return view('rida-app', ['data_pegawai' => $data_pegawai, 'request' => $request]);
	}
}
