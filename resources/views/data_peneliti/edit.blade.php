@extends("layouts.app")

@section("content")
<h2>Edit peneliti</h2>
<form method="POST" action="{{ route('data_peneliti.update', ['id' => $peneliti->id]) }}">
	@csrf
	@method("PUT")
	@php
		function isSelectedValue($name, $value) {
			return $name === $value ? 'selected' : '';
		}
	@endphp
	<div>
		<label for="nidn">NIDN:</label><br />
		<input id="nidn" type="text" name="nidn" value="{{ $peneliti->nidn }}" />
	</div>
	<div>
		<label for="scopus_id">Author ID Scopus:</label><br />
		<input id="scopus_id" type="text" name="scopus_id" value="{{ $peneliti->scopus_id }}" />
	</div>
	<div>
		<label for="scholar_id">Google Scholar ID:</label><br />
		<input id="scholar_id" type="text" name="scholar_id" value="{{ $peneliti->scholar_id }}" />
	</div>
	<div>
		<label for="id_unit">Unit:</label><br />
		<select name="id_unit" id="id_unit">
			<option value="1"  {{ isSelectedValue($peneliti->id_unit, '1') }}>Fakultas Kedokteran</option>
			<option value="2"  {{ isSelectedValue($peneliti->id_unit, '2') }}>Fakultas Pertanian</option>
			<option value="3"  {{ isSelectedValue($peneliti->id_unit, '3') }}>Fakultas KIP</option>
			<option value="4"  {{ isSelectedValue($peneliti->id_unit, '4') }}>Fakultas MIPA</option>
			<option value="5"  {{ isSelectedValue($peneliti->id_unit, '5') }}>Fakultas Ekonomi dan Bisnis</option>
			<option value="6"  {{ isSelectedValue($peneliti->id_unit, '6') }}>Fakultas Hukum</option>
			<option value="7"  {{ isSelectedValue($peneliti->id_unit, '7') }}>Fakultas Ilmu Sosial dan Politik</option>
			<option value="8"  {{ isSelectedValue($peneliti->id_unit, '8') }}>Fakultas Ilmu Budaya</option>
			<option value="9"  {{ isSelectedValue($peneliti->id_unit, '9') }}>Fakultas Keolahragaan</option>
			<option value="10"  {{ isSelectedValue($peneliti->id_unit, '10') }}>Fakultas Teknik</option>
			<option value="11"  {{ isSelectedValue($peneliti->id_unit, '11') }}>Fakultas Seni Rupa dan Desain</option>
			<option value="12"  {{ isSelectedValue($peneliti->id_unit, '12') }}>Sekolah Vokasi</option>
			<option value="13"  {{ isSelectedValue($peneliti->id_unit, '13') }}>Sekolah Pascasarjana</option>
			<option value="14"  {{ isSelectedValue($peneliti->id_unit, '14') }}>Kantor Pusat</option>
			<option value="15"  {{ isSelectedValue($peneliti->id_unit, '15') }}>Rumah Sakit</option>
		</select>
	</div>
	<div>
		<label for="id_jenis_kelamin">Jenis Kelamin:</label><br />
		<select name="id_jenis_kelamin" id="id_jenis_kelamin">
			<option value="1"  {{ isSelectedValue($peneliti->id_jenis_kelamin, '1') }}>Laki Laki</option>
			<option value="2"  {{ isSelectedValue($peneliti->id_jenis_kelamin, '2') }}>Perempuan</option>
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