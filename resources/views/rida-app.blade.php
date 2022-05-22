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
                <label for="unit">Unit:</label><br />
                <select name="unit" id="unit">
                    <option value="">Semua Kategori</option>
                    <option value="1"  {{ isSelectedValue($request->input('unit'), '1') }}>Fakultas Kedokteran</option>
                    <option value="2"  {{ isSelectedValue($request->input('unit'), '2') }}>Fakultas Pertanian</option>
                    <option value="3"  {{ isSelectedValue($request->input('unit'), '3') }}>Fakultas KIP</option>
                    <option value="4"  {{ isSelectedValue($request->input('unit'), '4') }}>Fakultas MIPA</option>
                    <option value="5"  {{ isSelectedValue($request->input('unit'), '5') }}>Fakultas Ekonomi dan Bisnis</option>
                    <option value="6"  {{ isSelectedValue($request->input('unit'), '6') }}>Fakultas Hukum</option>
                    <option value="7"  {{ isSelectedValue($request->input('unit'), '7') }}>Fakultas Ilmu Sosial dan Politik</option>
                    <option value="8"  {{ isSelectedValue($request->input('unit'), '8') }}>Fakultas Ilmu Budaya</option>
                    <option value="9"  {{ isSelectedValue($request->input('unit'), '9') }}>Fakultas Keolahragaan</option>
                    <option value="10"  {{ isSelectedValue($request->input('unit'), '10') }}>Fakultas Teknik</option>
                    <option value="11"  {{ isSelectedValue($request->input('unit'), '11') }}>Fakultas Seni Rupa dan Desain</option>
                    <option value="12"  {{ isSelectedValue($request->input('unit'), '12') }}>Sekolah Vokasi</option>
                    <option value="13"  {{ isSelectedValue($request->input('unit'), '13') }}>Sekolah Pascasarjana</option>
                    <option value="14"  {{ isSelectedValue($request->input('unit'), '14') }}>Kantor Pusat</option>
                    <option value="15"  {{ isSelectedValue($request->input('unit'), '15') }}>Rumah Sakit</option>
                </select>
            </div>
            <div>
                <label for="status_pegawai">Status Pegawai:</label><br />
                <select name="status_pegawai" id="status_pegawai">
                    <option value="">Semua Kategori</option>
                    <option value="1"  {{ isSelectedValue($request->input('status_pegawai'), '1') }}>Purna Tugas</option>
                    <option value="2"  {{ isSelectedValue($request->input('status_pegawai'), '2') }}>PNS</option>
                    <option value="3"  {{ isSelectedValue($request->input('status_pegawai'), '3') }}>Kontrak Profesional</option>
                    <option value="4"  {{ isSelectedValue($request->input('status_pegawai'), '4') }}>Non PNS</option>
                    <option value="5"  {{ isSelectedValue($request->input('status_pegawai'), '5') }}>CPNS</option>
                    <option value="6"  {{ isSelectedValue($request->input('status_pegawai'), '6') }}>Calon Non PNS</option>
                </select>
            </div>
            <div>
                <label for="jenis_kelamin">Jenis Kelamin:</label><br />
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="">Semua Kategori</option>
                    <option value="1"  {{ isSelectedValue($request->input('jenis_kelamin'), '1') }}>Laki Laki</option>
                    <option value="2"  {{ isSelectedValue($request->input('jenis_kelamin'), '2') }}>Perempuan</option>
                </select>
            </div>
            <div>
                <label for="jenis_staff">Jenis Staff:</label><br />
                <select name="jenis_staff" id="jenis_staff">
                    <option value="">Semua Kategori</option>
                    <option value="1"  {{ isSelectedValue($request->input('jenis_staff'), '1') }}>Tenaga Pendidik</option>
                    <option value="2"  {{ isSelectedValue($request->input('jenis_staff'), '2') }}>Tenaga Kependidikan</option>
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