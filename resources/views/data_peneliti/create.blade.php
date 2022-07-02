@extends("layouts.app")

@section("content")
<h2>Tambah Peneliti</h2>
<form method="POST" action="{{ route('data_peneliti.insert') }}">
	@csrf
	@method("POST")
	<div>
		<label for="nidn">NIDN:</label><br />
		<input id="nidn" type="text" name="nidn" value="" />
	</div>
	<div>
		<label for="scopus_id">Author ID Scopus:</label><br />
		<input id="scopus_id" type="text" name="scopus_id" value="" />
	</div>
	<div>
		<label for="scholar_id">Google Scholar ID:</label><br />
		<input id="scholar_id" type="text" name="scholar_id" value="" />
	</div>
	<div>
		<label for="id_unit">Unit:</label><br />
		<select name="id_unit" id="id_unit">
			<option value="1">Fakultas Kedokteran</option>
			<option value="2">Fakultas Pertanian</option>
			<option value="3">Fakultas KIP</option>
			<option value="4">Fakultas MIPA</option>
			<option value="5">Fakultas Ekonomi dan Bisnis</option>
			<option value="6">Fakultas Hukum</option>
			<option value="7">Fakultas Ilmu Sosial dan Politik</option>
			<option value="8">Fakultas Ilmu Budaya</option>
			<option value="9">Fakultas Keolahragaan</option>
			<option value="10">Fakultas Teknik</option>
			<option value="11">Fakultas Seni Rupa dan Desain</option>
			<option value="12">Sekolah Vokasi</option>
			<option value="13">Sekolah Pascasarjana</option>
			<option value="14">Kantor Pusat</option>
			<option value="15">Rumah Sakit</option>
		</select>
	</div>
	<div>
		<label for="id_jenis_kelamin">Jenis Kelamin:</label><br />
		<select name="id_jenis_kelamin" id="id_jenis_kelamin">
			<option value="1">Laki Laki</option>
			<option value="2">Perempuan</option>
		</select>
	</div>
	<input type="submit" name="create" value="create" />
</form>
@if ($errors->any())
@foreach($errors->all() as $error)
<div style="color: red">{{ $error }}</div>
@endforeach
@endif
@endsection