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
			array_push($condition, ['id_jenis_staff', '=',(int) $request->input('jenis_staff')]);
		}
		if ($request->input('status_pegawai')) {
			array_push($condition, ['id_status_pegawai', '=',(int) $request->input('status_pegawai')]);
		}
		if ($request->input('unit')) {
			array_push($condition, ['id_unit', '=', (int)$request->input('unit')]);
		}
		if ($request->input('jenis_kelamin')) {
			array_push($condition, ['id_jenis_kelamin', '=',(int) $request->input('jenis_kelamin')]);
		}
		// dd($condition);

		$data_pegawai = DB::table('data_pegawai')
			->join('status_pegawai', 'data_pegawai.id_status_pegawai', '=','status_pegawai.id')
			->join('unit', 'data_pegawai.id_unit', '=','unit.id')
			->join('jenis_kelamin', 'data_pegawai.id_jenis_kelamin', '=','jenis_kelamin.id')
			->join('jenis_staff', 'data_pegawai.id_jenis_staff', '=','jenis_staff.id')
			->select('data_pegawai.id', 'nip', 'status_pegawai', 'unit', 'jenis_kelamin', 'jenis_staff')
			->where($condition)
			->orderBy('id', 'ASC')
			->get();
			// dd($data_pegawai[0]);
		return view('rida-app', ['data_pegawai' => $data_pegawai, 'request' => $request]);
	}
}
