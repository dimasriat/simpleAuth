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
				'status_pegawai' => $request->input('status_pegawai'),
				'unit' => $request->input('unit'),
				'jenis_kelamin' => $request->input('jenis_kelamin'),
				'jenis_staff' => $request->input('jenis_staff'),
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
				'status_pegawai' => $request->input('status_pegawai'),
				'unit' => $request->input('unit'),
				'jenis_kelamin' => $request->input('jenis_kelamin'),
				'jenis_staff' => $request->input('jenis_staff'),
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
