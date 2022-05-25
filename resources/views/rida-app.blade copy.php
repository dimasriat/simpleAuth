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
                <label for="jenjang_pendidikan">Jenjang Pendidikan:</label><br />
                <select name="jenjang_pendidikan" id="jenjang_pendidikan">
                    <option value="1"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '1') }}>S3</option>
                    <option value="2"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '2') }}>Sp-1</option>
                    <option value="3"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '3') }}>Sp-2</option>
                    <option value="4"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '4') }}>S2</option>
                    <option value="5"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '5') }}>Sp-1(K)</option>
                    <option value="6"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '6') }}>PROFESI</option>
                    <option value="7"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '7') }}>S1</option>
                    <option value="8"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '8') }}>SMU/SLTA</option>
                    <option value="9"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '9') }}>D3</option>
                    <option value="10"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '10') }}>SMP/SLTP</option>
                    <option value="11"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '11') }}>SD</option>
                    <option value="12"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '12') }}>D1</option>
                    <option value="13"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '13') }}>D4</option>
                    <option value="14"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '14') }}>D2</option>
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
            <h2>Tabel Pegawai</h2>
            <p>wowowo</p>
            <table style="width: 100%" cellspacing="0">
                <thead>
                <tr>
                    <th rowspan="4" style="border: 1px solid black !important; text-align:center !important;">
                        No</th>
                    <th rowspan="4" style="border: 1px solid black !important; text-align:center !important;">
                        Status</th>
                    <th colspan="18" style="border: 1px solid black !important; text-align:center !important;">
                        Rentang Usia</th>
                    <th rowspan="4" style="border: 1px solid black !important; text-align:center !important;">
                        Total</th>
                        
                    </tr>
                <tr>
                </tr><tr>
                        <!-- <th
                            rowspan="2" style="border: 1px solid black !important; text-align:center !important;">
                            No</th>
                        <th
                            rowspan="2" style="border: 1px solid black !important; text-align:center !important;">
                            Status</th>
                        <th
                            rowspan="2" style="border: 1px solid black !important; text-align:center !important;">
                            Jenjang</th>
                            -->
                        <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                            25-35</th>
                        <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                            36-45</th>
                        <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                            46-55</th>
                        <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                            56-65</th>
                        <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                            66-75</th>
                        <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                            &gt;75</th>
                        <!-- <th
                            rowspan="2" style="border: 1px solid black !important; text-align:center !important;">
                            Total</th> -->
                        
                    </tr>
                    <tr>
                        
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            L</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            P</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            JML</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            L</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            P</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            JML</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            L</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            P</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            JML</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            L</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            P</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            JML</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            L</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            P</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            JML</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            L</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            P</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            JML</th>
                        
                    </tr>
                </thead>
                <tbody>
                                                                                                <tr>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                1</td>
                            <td style="border: 1px solid black !important; text-align:left !important;">
                                PNS</td>
                            

                            

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                8</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                4</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                12</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                62</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                52</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                114</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                156</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                99</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                255</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                147</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                67</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                214</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                22</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                5</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                27</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                622</td>
                            
                        </tr>
                                                                                                    <tr>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                2</td>
                            <td style="border: 1px solid black !important; text-align:left !important;">
                                PNS DPK</td>
                            

                            

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                1</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                1</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                1</td>
                            
                        </tr>
                                                                                                    <tr>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                3</td>
                            <td style="border: 1px solid black !important; text-align:left !important;">
                                CPNS</td>
                            

                            

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                1</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                1</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                1</td>
                            
                        </tr>
                                                                                                    <tr>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                4</td>
                            <td style="border: 1px solid black !important; text-align:left !important;">
                                NON PNS</td>
                            

                            

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                7</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                5</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                12</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                14</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                5</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                19</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                6</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                3</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                9</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                5</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                5</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                45</td>
                            
                        </tr>
                                                                                                    <tr>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                5</td>
                            <td style="border: 1px solid black !important; text-align:left !important;">
                                CALON NON PNS</td>
                            

                            

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                2</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                2</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                2</td>
                            
                        </tr>
                                                                                                    <tr>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                6</td>
                            <td style="border: 1px solid black !important; text-align:left !important;">
                                PURNA</td>
                            

                            

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                36</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                8</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                44</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                5</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                5</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                49</td>
                            
                        </tr>
                                                                                                    <tr>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                7</td>
                            <td style="border: 1px solid black !important; text-align:left !important;">
                                KP</td>
                            

                            

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                2</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                2</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                3</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                3</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                6</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                12</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                3</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                15</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                1</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                1</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                2</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>
                            <td style="border: 1px solid black !important; text-align:center !important;">
                                0</td>

                            <td style="border: 1px solid black !important; text-align:center !important;">
                                25</td>
                            
                        </tr>
                                                            
                </tbody>
                <thead>
                    <tr>
                        <th colspan="2" style="border: 1px solid black !important; text-align:center !important;">
                            Jumlah</th>

                    

                        <th style="border: 1px solid black !important; text-align:center !important;">
                            33 </th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            18</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            51</th>


                        <th style="border: 1px solid black !important; text-align:center !important;">
                            165</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            113</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            278</th>


                        <th style="border: 1px solid black !important; text-align:center !important;">
                            328</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            218</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            546</th>
                        
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            338</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            150</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            488</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            115</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            33</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            148</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            12</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            0</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            12</th>
                        
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            1523</th>

                        
                        
                    </tr>
                    <tr>
                        <th colspan="2" style="border: 1px solid black !important; text-align:center !important;">
                            Persen (%) </th>

                        <th style="border: 1px solid black !important; text-align:center !important;">
                            2.17</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            1.18</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            3.35 </th>


                        <th style="border: 1px solid black !important; text-align:center !important;">
                            10.83</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            7.42</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            18.25</th>


                        <th style="border: 1px solid black !important; text-align:center !important;">
                            21.54</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            14.31</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            35.85</th> 

                        
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            22.19</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            9.85</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            32.04</th>


                        <th style="border: 1px solid black !important; text-align:center !important;">
                            7.55</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            2.17</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            9.72</th>


                        <th style="border: 1px solid black !important; text-align:center !important;">
                            0.79</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            0.00</th>
                        <th style="border: 1px solid black !important; text-align:center !important;">
                            0.79</th>

                            
                        
                        <th style="border: 1px solid black !important; text-align:center !important;">
                                100.00</th>
                    </tr>

                </thead>
            </table>
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
            "Jenjang Pendidikan", 
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
   console.log(encodedJSON);
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