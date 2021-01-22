<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function index()
	{
		return view('dashboard.index');
	}

	public function edit()
	{
		return view('dashboard.edit');
	}

	public function update(Request $request)
	{
		$request->validate([
			"name" => "required",
		]);
		Auth::user()->update($request->input());
		return redirect()->route('dashboard.index');
	}
}
