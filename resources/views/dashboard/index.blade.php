@extends("layouts.app")

@section("content")
	<h2>Dashboard</h2>
	<p>Halo {{  Auth::user()->name  }}!</p>
	<p>SELAMAT KAMU SUDAH LOGIN</p>
	<h2>Data diri</h2>
	<table>
		<tr>
			<td>Nama</td>
			<td>{{ Auth::user()->name }}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{ Auth::user()->email }}</td>
		</tr>
	</table>
	<a href="{{ route('dashboard.edit') }}">Update Profile</a>
@endsection