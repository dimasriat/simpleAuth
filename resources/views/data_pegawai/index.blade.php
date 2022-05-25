@extends("layouts.app")

@section("content")
	<h2>Data Pegawai</h2>
	<p>Berikut adalah data pegawai</p>
	<a href="{{ route('data_pegawai.create') }}">Add new data</a>
	<div id="table" style="font-family: sans-serif"></div>
	<script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>
	<script>
		let encodedJSON = {!! json_encode($data_pegawai) !!};
		new gridjs.Grid({ 
			columns: [
				{
					name:'id',
					hidden:'true'
				},
				'NIP',
				'Status Pegawai', 
				'Unit', 
				"Jenis Kelamin", 
				"Jenjang Pendidikan", 
				"Jenis Staff",
				{
					name: "Actions",
					formatter: (_, row) => gridjs.html(`
						<a href="/data_pegawai/edit/${row.cells[0].data}">Edit</a>
						<a href="/data_pegawai/delete/${row.cells[0].data}">Delete</a>
					`)
				}
			],
			data: encodedJSON.map(row_obj => Object.values(row_obj)),
			pagination: {
				limit: 10
			},
			sort:true,
			search:true,
		}).render(document.getElementById('table'));
	</script>
@endsection

@section('head')
	<link rel="stylesheet" href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css">
@endsection