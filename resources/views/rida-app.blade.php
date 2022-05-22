@extends('layouts.user')
@section('css')
<link rel="stylesheet" href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css">
<style>
    .wrapper {
        display: flex;
    }
    select, textarea, input {
        margin: 0.5rem 0;
    }
    label {
        margin:0;
    }
</style>
@endsection

@section('content')

<section class="section">
    <div class="container wrapper">
        <div style="padding-right: 1rem; ">
            <h2>Filter</h2>
            @php
                function isSelectedValue($name, $value) {
                    return $name === $value ? 'selected' : '';
                }
            @endphp
            <form method="GET" action="{{ route('rida.app') }}">
                <div>
                    <label for="status_pegawai">Status Pegawai:</label><br />
                    <select name="status_pegawai" id="status_pegawai">
			            <option value="">Semua Kategori</option>
                        <option value="Purna Tugas" {{ isSelectedValue($request->input('status_pegawai'), 'Purna Tugas') }}>Purna Tugas</option>
                        <option value="PNS" {{ isSelectedValue($request->input('status_pegawai'), 'PNS') }}>PNS</option>
                        <option value="Kontrak Professional" {{ isSelectedValue($request->input('status_pegawai'), 'Kontrak Professional') }}>Kontrak Professional</option>
                        <option value="Non PNS" {{ isSelectedValue($request->input('status_pegawai'), 'Non PNS') }}>Non PNS</option>
                        <option value="CPNS" {{ isSelectedValue($request->input('status_pegawai'), 'CPNS') }}>CPNS</option>
                        <option value="Calon Non PNS" {{ isSelectedValue($request->input('status_pegawai'), 'Calon Non PNS') }}>Calon Non PNS</option>
                    </select>
                </div>
                <div>
                    <label for="unit">Unit:</label><br />
                    <select name="unit" id="unit">
			            <option value="">Semua Kategori</option>
                        <option value="Fakultas KIP"  {{ isSelectedValue($request->input('unit'), 'Fakultas KIP') }}>Fakultas KIP</option>
                        <option value="Fakultas Pertanian"  {{ isSelectedValue($request->input('unit'), 'Fakultas Pertanian') }}>Fakultas Pertanian</option>
                        <option value="Fakultas Kedokteran"  {{ isSelectedValue($request->input('unit'), 'Fakultas Kedokteran') }}>Fakultas Kedokteran</option>
                        <option value="Fakultas MIPA"  {{ isSelectedValue($request->input('unit'), 'Fakultas MIPA') }}>Fakultas MIPA</option>
                        <option value="Fakultas Ekonomi dan Bisnis"  {{ isSelectedValue($request->input('unit'), 'Fakultas Ekonomi dan Bisnis') }}>Fakultas Ekonomi dan Bisnis</option>
                        <option value="Fakultas Hukum"  {{ isSelectedValue($request->input('unit'), 'Fakultas Hukum') }}>Fakultas Hukum</option>
                        <option value="Fakultas Ilmu Sosial dan Politik"  {{ isSelectedValue($request->input('unit'), 'Fakultas Ilmu Sosial dan Politik') }}>Fakultas Ilmu Sosial dan Politik</option>
                        <option value="Fakultas Ilmu Budaya"  {{ isSelectedValue($request->input('unit'), 'Fakultas Ilmu Budaya') }}>Fakultas Ilmu Budaya</option>
                        <option value="Fakultas Keolahragaan"  {{ isSelectedValue($request->input('unit'), 'Fakultas Keolahragaan') }}>Fakultas Keolahragaan</option>
                        <option value="Fakultas Teknik"  {{ isSelectedValue($request->input('unit'), 'Fakultas Teknik') }}>Fakultas Teknik</option>
                        <option value="Fakultas Seni Rupa dan Desain"  {{ isSelectedValue($request->input('unit'), 'Fakultas Seni Rupa dan Desain') }}>Fakultas Seni Rupa dan Desain</option>
                        <option value="Sekolah Vokasi"  {{ isSelectedValue($request->input('unit'), 'Sekolah Vokasi') }}>Sekolah Vokasi</option>
                        <option value="Sekolah Pascasarjana"  {{ isSelectedValue($request->input('unit'), 'Sekolah Pascasarjana') }}>Sekolah Pascasarjana</option>
                        <option value="Kantor Pusat"  {{ isSelectedValue($request->input('unit'), 'Kantor Pusat') }}>Kantor Pusat</option>
                        <option value="Rumah Sakit"  {{ isSelectedValue($request->input('unit'), 'Rumah Sakit') }}>Rumah Sakit</option>
                    </select>
                </div>
                <div>
                    <label for="jenis_kelamin">Jenis Kelamin:</label><br />
                    <select name="jenis_kelamin" id="jenis_kelamin">
			            <option value="">Semua Kategori</option>
                        <option value="Laki Laki" {{ isSelectedValue($request->input('jenis_kelamin'), 'Laki Laki') }}>Laki Laki</option>
                        <option value="Perempuan" {{ isSelectedValue($request->input('jenis_kelamin'), 'Perempuan') }}>Perempuan</option>
                    </select>
                </div>
                <div>
                    <label for="jenis_staff">Jenis Staff:</label><br />
                    <select name="jenis_staff" id="jenis_staff">
			            <option value="">Semua Kategori</option>
                        <option value="tenaga-pendidik" {{ isSelectedValue($request->input('jenis_staff'), 'tenaga-pendidik') }}>Tenaga Pendidik</option>
                        <option value="tenaga-kependidikan" {{ isSelectedValue($request->input('jenis_staff'), 'tenaga-kependidikan') }}>Tenaga Kependidikan</option>
                    </select>
                </div>
                <input type="submit" name="filter" value="Filter" />
            </form>
        </div>
        <div style="width: 100%; padding-left: 1rem; ">
            <h2>Persebaran Usia</h2>
            <div>
                <canvas id="chart-pegawai" style="margin-bottom:8rem;"></canvas>
            </div>
            <h2>Data Pegawai</h2>
            <div id="table" style="font-family: sans-serif"></div>
	
        </div>
    </div><!-- end container -->
</section>


<!--you can copy the above code to your htm 
page-----------------------------end--->  


@endsection

@section('js')
<script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>
<script>
    let encodedJSON = {!! json_encode($data_pegawai) !!};
    // console.log(encodedJSON);
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
            "Jenis Staff",
        ],
        data: encodedJSON.map(row_obj => Object.values(row_obj)),
        pagination: {
            limit: 10
        },
        sort:true,
        search:true,
    }).render(document.getElementById('table'));
</script>

<script type="text/javascript" src="{{ asset('design\js\moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('design\js\chart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('design\js\newChart.js') }}"></script>
<script>
   const ages = encodedJSON.map(item => moment().diff(moment(item.nip.slice(0, 8),'YYYYMMDD'), 'years'));
   const ageGroups = {
       '<25': ages.filter(item => item < 25).length,
       '25-35': ages.filter(item => 25 <= item && item <= 35).length,
       '36-45': ages.filter(item => 36 <= item && item <= 45).length,
       '46-55': ages.filter(item => 46 <= item && item <= 55).length,
       '56-65': ages.filter(item => 56 <= item && item <= 65).length,
       '66-75': ages.filter(item => 66 <= item && item <= 75).length,
       '>75': ages.filter(item => 75 < item).length,
   };
    newChart(
        'chart-pegawai', 
        'Persebaran Usia', 
        ['Edisi 1'],
        [
            {
                label:'<25',
                data: [ageGroups['<25']]
            },
            {
                label:'25-35',
                data: [ageGroups['25-35']]
            },
            {
                label:'36-45',
                data: [ageGroups['36-45']]
            },
            {
                label:'46-55',
                data: [ageGroups['46-55']]
            },
            {
                label:'56-65',
                data: [ageGroups['56-65']]
            },
            {
                label:'66-75',
                data: [ageGroups['66-75']]
            },
            {
                label:'>75',
                data: [ageGroups['>75']]
            },
        ]
    );
</script>
@endsection