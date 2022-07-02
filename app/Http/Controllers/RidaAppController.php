<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

function findHIndexByScholarId($id) {
	$API_KEY = "bf67a3f3c2fc46c942874d48da2a702c56d7186faee99710b7cac253689025c2";
	$data = Http::get("https://serpapi.com/search.json?engine=google_scholar_author&author_id=". $id . "&api_key=" . $API_KEY);
	return $data['cited_by']['table'][1]['h_index']['all'];
}

class RidaAppController extends Controller
{
	public function index()
	{
		return view('welcome');
	}
	
	public function intro()
	{
		return view('rida-intro');
	}

	public function app(Request $request)
	{
		
		$condition = array();
		if ($request->input('jenis_staff')) {
			array_push($condition, ['id_jenis_staff', '=',(int) $request->input('jenis_staff')]);
		}
		if ($request->input('jenjang_pendidikan')) {
			array_push($condition, ['id_jenjang_pendidikan', '=',(int) $request->input('jenjang_pendidikan')]);
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
		
		if (!$request->input('jenjang_pendidikan') && !$request->input('unit')) {
			array_push($condition, ['id_jenjang_pendidikan', '=',1]);
			array_push($condition, ['id_unit', '=', 1]);
		}
		// dd($condition);

		$data_pegawai = DB::table('data_pegawai')
			->join('status_pegawai', 'data_pegawai.id_status_pegawai', '=','status_pegawai.id')
			->join('unit', 'data_pegawai.id_unit', '=','unit.id')
			->join('jenis_kelamin', 'data_pegawai.id_jenis_kelamin', '=','jenis_kelamin.id')
			->join('jenjang_pendidikan', 'data_pegawai.id_jenjang_pendidikan', '=','jenjang_pendidikan.id')
			->join('jenis_staff', 'data_pegawai.id_jenis_staff', '=','jenis_staff.id')
			->select('data_pegawai.id', 'nip', 'status_pegawai', 'unit', 'jenis_kelamin', 'jenjang_pendidikan', 'jenis_staff')
			->where($condition)
			->orderBy('id', 'ASC')
			->get();
			// dd($data_pegawai[0]);
		$periode = $request->input('periode') ? $request->input('periode') : date('Y');
		return view('rida-app', ['data_pegawai' => $data_pegawai, 'request' => $request, 'periode' => $periode]);
	}

	
	public function h_indeks(Request $request)
	{
		
		$condition = array();
		if ($request->input('unit')) {
			array_push($condition, ['id_unit', '=', (int) $request->input('unit')]);
		}
		$data_peneliti = DB::table('data_peneliti')
			->join('unit', 'data_peneliti.id_unit', '=','unit.id')
			->join('jenis_kelamin', 'data_peneliti.id_jenis_kelamin', '=','jenis_kelamin.id')
			->select('data_peneliti.id', 'nidn', 'scopus_id', 'scholar_id', 'unit', 'id_unit')
			->orderBy('id', 'ASC')
			->get();
		$h_index_value = [];
		for($i = 0; $i <= 13; $i++) {
			$h_index_value[$i] = [];
			for($h = 0; $h <= 22; $h++) {
				$h_index_value[$i][$h] = 0;
			}
		}
		$data_peneliti_with_h_index = [];
		foreach($data_peneliti as $peneliti) {
			$h_index = findHIndexByScholarId($peneliti->scholar_id);
			array_push($data_peneliti_with_h_index, [
				'scholar_id' => $peneliti->scholar_id,
				'id_unit' => $peneliti->id_unit,
				'unit' => $peneliti->unit,
				'h_index' => $h_index
			]);
			$h_index_value[0][(int) $h_index]++; // unit == 0 --> all unit total h_index
			$h_index_value[$peneliti->id_unit][(int) $h_index]++;
		}
		// dd($data_peneliti_with_h_index, $h_index_value);
		// dd([
		// 	'scholar_id' => $data_peneliti[0]->scholar_id,
		// 	'h_index' => findHIndexByScholarId($data_peneliti[0]->scholar_id)
		// ]);

		// $response = Http::get('https://random-data-api.com/api/users/random_user');
		// dd($response->json());
		return view('rida-h-indeks', ['request' => $request, 'data_peneliti' => $data_peneliti_with_h_index, 'h_index_value' => $h_index_value]);
	}
}
