@extends("layouts.app")

@section("content")
<h2>Edit Pegawai</h2>
<form method="POST" action="{{ route('data_pegawai.update', ['id' => $pegawai->id]) }}">
	@csrf
	@method("PUT")
	@php
		function isSelectedValue($name, $value) {
			return $name === $value ? 'selected' : '';
		}
	@endphp
	<div>
		<label for="nip">NIP:</label><br />
		<input id="nip" type="text" name="nip" value="{{ $pegawai->nip }}" />
	</div>
	<div>
		<label for="id_unit">Unit:</label><br />
		<select name="id_unit" id="id_unit">
			<option value="1"  {{ isSelectedValue($pegawai->id_unit, '1') }}>Fakultas Kedokteran</option>
			<option value="2"  {{ isSelectedValue($pegawai->id_unit, '2') }}>Fakultas Pertanian</option>
			<option value="3"  {{ isSelectedValue($pegawai->id_unit, '3') }}>Fakultas KIP</option>
			<option value="4"  {{ isSelectedValue($pegawai->id_unit, '4') }}>Fakultas MIPA</option>
			<option value="5"  {{ isSelectedValue($pegawai->id_unit, '5') }}>Fakultas Ekonomi dan Bisnis</option>
			<option value="6"  {{ isSelectedValue($pegawai->id_unit, '6') }}>Fakultas Hukum</option>
			<option value="7"  {{ isSelectedValue($pegawai->id_unit, '7') }}>Fakultas Ilmu Sosial dan Politik</option>
			<option value="8"  {{ isSelectedValue($pegawai->id_unit, '8') }}>Fakultas Ilmu Budaya</option>
			<option value="9"  {{ isSelectedValue($pegawai->id_unit, '9') }}>Fakultas Keolahragaan</option>
			<option value="10"  {{ isSelectedValue($pegawai->id_unit, '10') }}>Fakultas Teknik</option>
			<option value="11"  {{ isSelectedValue($pegawai->id_unit, '11') }}>Fakultas Seni Rupa dan Desain</option>
			<option value="12"  {{ isSelectedValue($pegawai->id_unit, '12') }}>Sekolah Vokasi</option>
			<option value="13"  {{ isSelectedValue($pegawai->id_unit, '13') }}>Sekolah Pascasarjana</option>
			<option value="14"  {{ isSelectedValue($pegawai->id_unit, '14') }}>Kantor Pusat</option>
			<option value="15"  {{ isSelectedValue($pegawai->id_unit, '15') }}>Rumah Sakit</option>
		</select>
	</div>
	<div>
		<label for="id_status_pegawai">Status Pegawai:</label><br />
		<select name="id_status_pegawai" id="id_status_pegawai">
			<option value="1"  {{ isSelectedValue($pegawai->id_status_pegawai, '1') }}>Purna Tugas</option>
			<option value="2"  {{ isSelectedValue($pegawai->id_status_pegawai, '2') }}>PNS</option>
			<option value="3"  {{ isSelectedValue($pegawai->id_status_pegawai, '3') }}>Kontrak Profesional</option>
			<option value="4"  {{ isSelectedValue($pegawai->id_status_pegawai, '4') }}>Non PNS</option>
			<option value="5"  {{ isSelectedValue($pegawai->id_status_pegawai, '5') }}>CPNS</option>
			<option value="6"  {{ isSelectedValue($pegawai->id_status_pegawai, '6') }}>Calon Non PNS</option>
		</select>
	</div>
	<div>
		<label for="id_jenis_kelamin">Jenis Kelamin:</label><br />
		<select name="id_jenis_kelamin" id="id_jenis_kelamin">
			<option value="1"  {{ isSelectedValue($pegawai->id_jenis_kelamin, '1') }}>Laki Laki</option>
			<option value="2"  {{ isSelectedValue($pegawai->id_jenis_kelamin, '2') }}>Perempuan</option>
		</select>
	</div>
	<div>
		<label for="id_jenis_staff">Jenis Staff:</label><br />
		<select name="id_jenis_staff" id="id_jenis_staff">
			<option value="1"  {{ isSelectedValue($pegawai->id_jenis_staff, '1') }}>Tenaga Pendidik</option>
			<option value="2"  {{ isSelectedValue($pegawai->id_jenis_staff, '2') }}>Tenaga Kependidikan</option>
		</select>
	</div>
	<input type="submit" name="update" value="update" />
</form>
@if ($errors->any())
@foreach($errors->all() as $error)
<div style="color: red">{{ $error }}</div>
@endforeach
@endif
@endsection