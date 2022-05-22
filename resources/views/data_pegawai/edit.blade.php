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
		<label for="status_pegawai">Status Pegawai:</label><br />
		<select name="status_pegawai" id="status_pegawai">
			<option value="Purna Tugas" {{ isSelectedValue($pegawai->status_pegawai, 'Purna Tugas') }}>Purna Tugas</option>
			<option value="PNS" {{ isSelectedValue($pegawai->status_pegawai, 'PNS') }}>PNS</option>
			<option value="Kontrak Professional" {{ isSelectedValue($pegawai->status_pegawai, 'Kontrak Professional') }}>Kontrak Professional</option>
			<option value="Non PNS" {{ isSelectedValue($pegawai->status_pegawai, 'Non PNS') }}>Non PNS</option>
			<option value="CPNS" {{ isSelectedValue($pegawai->status_pegawai, 'CPNS') }}>CPNS</option>
			<option value="Calon Non PNS" {{ isSelectedValue($pegawai->status_pegawai, 'Calon Non PNS') }}>Calon Non PNS</option>
		</select>
	</div>
	<div>
		<label for="unit">Unit:</label><br />
		<select name="unit" id="unit">
			<option value="Fakultas KIP"  {{ isSelectedValue($pegawai->unit, 'Fakultas KIP') }}>Fakultas KIP</option>
			<option value="Fakultas Pertanian"  {{ isSelectedValue($pegawai->unit, 'Fakultas Pertanian') }}>Fakultas Pertanian</option>
			<option value="Fakultas Kedokteran"  {{ isSelectedValue($pegawai->unit, 'Fakultas Kedokteran') }}>Fakultas Kedokteran</option>
			<option value="Fakultas MIPA"  {{ isSelectedValue($pegawai->unit, 'Fakultas MIPA') }}>Fakultas MIPA</option>
			<option value="Fakultas Ekonomi dan Bisnis"  {{ isSelectedValue($pegawai->unit, 'Fakultas Ekonomi dan Bisnis') }}>Fakultas Ekonomi dan Bisnis</option>
			<option value="Fakultas Hukum"  {{ isSelectedValue($pegawai->unit, 'Fakultas Hukum') }}>Fakultas Hukum</option>
			<option value="Fakultas Ilmu Sosial dan Politik"  {{ isSelectedValue($pegawai->unit, 'Fakultas Ilmu Sosial dan Politik') }}>Fakultas Ilmu Sosial dan Politik</option>
			<option value="Fakultas Ilmu Budaya"  {{ isSelectedValue($pegawai->unit, 'Fakultas Ilmu Budaya') }}>Fakultas Ilmu Budaya</option>
			<option value="Fakultas Keolahragaan"  {{ isSelectedValue($pegawai->unit, 'Fakultas Keolahragaan') }}>Fakultas Keolahragaan</option>
			<option value="Fakultas Teknik"  {{ isSelectedValue($pegawai->unit, 'Fakultas Teknik') }}>Fakultas Teknik</option>
			<option value="Fakultas Seni Rupa dan Desain"  {{ isSelectedValue($pegawai->unit, 'Fakultas Seni Rupa dan Desain') }}>Fakultas Seni Rupa dan Desain</option>
			<option value="Sekolah Vokasi"  {{ isSelectedValue($pegawai->unit, 'Sekolah Vokasi') }}>Sekolah Vokasi</option>
			<option value="Sekolah Pascasarjana"  {{ isSelectedValue($pegawai->unit, 'Sekolah Pascasarjana') }}>Sekolah Pascasarjana</option>
			<option value="Kantor Pusat"  {{ isSelectedValue($pegawai->unit, 'Kantor Pusat') }}>Kantor Pusat</option>
			<option value="Rumah Sakit"  {{ isSelectedValue($pegawai->unit, 'Rumah Sakit') }}>Rumah Sakit</option>
		</select>
	</div>
	<div>
		<label for="jenis_kelamin">Jenis Kelamin:</label><br />
		<select name="jenis_kelamin" id="jenis_kelamin">
			<option value="Laki Laki" {{ isSelectedValue($pegawai->jenis_kelamin, 'Laki Laki') }}>Laki Laki</option>
			<option value="Perempuan" {{ isSelectedValue($pegawai->jenis_kelamin, 'Perempuan') }}>Perempuan</option>
		</select>
	</div>
	<div>
		<label for="jenis_staff">Jenis Staff:</label><br />
		<select name="jenis_staff" id="jenis_staff">
			<option value="tenaga-pendidik" {{ isSelectedValue($pegawai->jenis_staff, 'tenaga-pendidik') }}>Tenaga Pendidik</option>
			<option value="tenaga-kependidikan" {{ isSelectedValue($pegawai->jenis_staff, 'tenaga-kependidikan') }}>Tenaga Kependidikan</option>
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