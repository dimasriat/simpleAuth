@extends("layouts.app")

@section("content")
	<h2>Data peneliti</h2>
	<p>Berikut adalah data peneliti</p>
	<a href="{{ route('data_peneliti.create') }}">Add new data</a>
	<div id="table" style="font-family: sans-serif"></div>
	<script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>
	<script>
		let encodedJSON = {!! json_encode($data_peneliti) !!};
		new gridjs.Grid({ 
			columns: [
				{
					name:'id',
					hidden:'true'
				},
				'NIDN',
				'Author ID Scopus',
				{
					name:'scholar_id',
					hidden:'true'
				},
				'Unit', 
				"Jenis Kelamin", 
				{
					name: "Actions",
					formatter: (_, row) => gridjs.html(`
						<a href="/data_peneliti/edit/${row.cells[0].data}">Edit</a>
						<a href="/data_peneliti/delete/${row.cells[0].data}">Delete</a>
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