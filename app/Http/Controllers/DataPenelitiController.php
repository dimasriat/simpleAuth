<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class DataPenelitiController extends Controller
{
	public function index()
	{
		$data_peneliti = DB::table('data_peneliti')
			->join('unit', 'data_peneliti.id_unit', '=','unit.id')
			->join('jenis_kelamin', 'data_peneliti.id_jenis_kelamin', '=','jenis_kelamin.id')
			->select('data_peneliti.id', 'nidn', 'scopus_id', 'scholar_id', 'unit', 'jenis_kelamin')
			->orderBy('id', 'ASC')
			->get();
		return view('data_peneliti.index', ['data_peneliti' => $data_peneliti]);
	}

	public function create()
	{
		return view('data_peneliti.create');
	}

	public function insert(Request $request)
	{
		DB::table('data_peneliti')
			->insert([
				'nidn' => $request->input('nidn'),
				'scopus_id' => $request->input('scopus_id'),
				'scholar_id' => $request->input('scholar_id'),
				'id_unit' => $request->input('id_unit'),
				'id_jenis_kelamin' => $request->input('id_jenis_kelamin'),
			]);
		return redirect()->route('data_peneliti.index');
	}

	public function edit($id)
	{
		$data_peneliti = DB::table('data_peneliti')
			->where('id', '=', $id)
			->orderBy('id', 'ASC')
			->get();
		return view('data_peneliti.edit', ['peneliti' => $data_peneliti[0]]);
	}

	public function update(Request $request, $id)
	{
		DB::table('data_peneliti')
			->where('id', '=', $id)
			->update([
				'nidn' => $request->input('nidn'),
				'scopus_id' => $request->input('scopus_id'),
				'scholar_id' => $request->input('scholar_id'),
				'id_unit' => $request->input('id_unit'),
				'id_jenis_kelamin' => $request->input('id_jenis_kelamin'),
			]);
		return redirect()->route('data_peneliti.index');
	}

	public function delete($id)
	{
		DB::table('data_peneliti')
			->where('id', '=', $id)
			->delete();
		return redirect()->route('data_peneliti.index');
	}
}
