<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class DataPegawaiController extends Controller
{
	public function index()
	{
		$data_pegawai = DB::table('data_pegawai')
			->join('status_pegawai', 'data_pegawai.id_status_pegawai', '=','status_pegawai.id')
			->join('unit', 'data_pegawai.id_unit', '=','unit.id')
			->join('jenis_kelamin', 'data_pegawai.id_jenis_kelamin', '=','jenis_kelamin.id')
			->join('jenjang_pendidikan', 'data_pegawai.id_jenjang_pendidikan', '=','jenjang_pendidikan.id')
			->join('jenis_staff', 'data_pegawai.id_jenis_staff', '=','jenis_staff.id')
			->select('data_pegawai.id', 'nip', 'status_pegawai', 'unit', 'jenis_kelamin', 'jenjang_pendidikan', 'jenis_staff')
			->orderBy('id', 'ASC')
			->get();
		return view('data_pegawai.index', ['data_pegawai' => $data_pegawai]);
	}

	public function create()
	{
		return view('data_pegawai.create');
	}

	public function insert(Request $request)
	{
		DB::table('data_pegawai')
			->insert([
				'nip' => $request->input('nip'),
				'id_status_pegawai' => $request->input('id_status_pegawai'),
				'id_unit' => $request->input('id_unit'),
				'id_jenis_kelamin' => $request->input('id_jenis_kelamin'),
				'id_jenjang_pendidikan' => $request->input('id_jenjang_pendidikan'),
				'id_jenis_staff' => $request->input('id_jenis_staff'),
			]);
		return redirect()->route('data_pegawai.index');
	}

	public function edit($id)
	{
		$data_pegawai = DB::table('data_pegawai')
			->where('id', '=', $id)
			->orderBy('id', 'ASC')
			->get();
		return view('data_pegawai.edit', ['pegawai' => $data_pegawai[0]]);
	}

	public function update(Request $request, $id)
	{
		DB::table('data_pegawai')
			->where('id', '=', $id)
			->update([
				'nip' => $request->input('nip'),
				'id_status_pegawai' => $request->input('id_status_pegawai'),
				'id_unit' => $request->input('id_unit'),
				'id_jenis_kelamin' => $request->input('id_jenis_kelamin'),
				'id_jenjang_pendidikan' => $request->input('id_jenjang_pendidikan'),
				'id_jenis_staff' => $request->input('id_jenis_staff'),
			]);
		return redirect()->route('data_pegawai.index');
	}

	public function delete($id)
	{
		DB::table('data_pegawai')
			->where('id', '=', $id)
			->delete();
		return redirect()->route('data_pegawai.index');
	}
}
