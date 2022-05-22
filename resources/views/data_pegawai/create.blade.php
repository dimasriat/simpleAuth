@extends("layouts.app")

@section("content")
<h2>Tambah Pegawai</h2>
<form method="POST" action="{{ route('data_pegawai.insert') }}">
	@csrf
	@method("POST")
	<div>
		<label for="nip">NIP:</label><br />
		<input id="nip" type="text" name="nip" value="" />
	</div>
	<div>
		<label for="status_pegawai">Status Pegawai:</label><br />
		<select name="status_pegawai" id="status_pegawai">
			<option value="Purna Tugas">Purna Tugas</option>
			<option value="PNS">PNS</option>
			<option value="Kontrak Professional">Kontrak Professional</option>
			<option value="Non PNS">Non PNS</option>
			<option value="CPNS">CPNS</option>
			<option value="Calon Non PNS">Calon Non PNS</option>
		</select>
	</div>
	<div>
		<label for="unit">Unit:</label><br />
		<select name="unit" id="unit">
			<option value="Fakultas KIP">Fakultas KIP</option>
			<option value="Fakultas Pertanian">Fakultas Pertanian</option>
			<option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
			<option value="Fakultas MIPA">Fakultas MIPA</option>
			<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
			<option value="Fakultas Hukum">Fakultas Hukum</option>
			<option value="Fakultas Ilmu Sosial dan Politik">Fakultas Ilmu Sosial dan Politik</option>
			<option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option>
			<option value="Fakultas Keolahragaan">Fakultas Keolahragaan</option>
			<option value="Fakultas Teknik">Fakultas Teknik</option>
			<option value="Fakultas Seni Rupa dan Desain">Fakultas Seni Rupa dan Desain</option>
			<option value="Sekolah Vokasi">Sekolah Vokasi</option>
			<option value="Sekolah Pascasarjana">Sekolah Pascasarjana</option>
			<option value="Kantor Pusat">Kantor Pusat</option>
			<option value="Rumah Sakit">Rumah Sakit</option>
		</select>
	</div>
	<div>
		<label for="jenis_kelamin">Jenis Kelamin:</label><br />
		<select name="jenis_kelamin" id="jenis_kelamin">
			<option value="Laki Laki">Laki Laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
	</div>
	<div>
		<label for="jenis_staff">Jenis Staff:</label><br />
		<select name="jenis_staff" id="jenis_staff">
			<option value="tenaga-pendidik">Tenaga Pendidik</option>
			<option value="tenaga-kependidikan">Tenaga Kependidikan</option>
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