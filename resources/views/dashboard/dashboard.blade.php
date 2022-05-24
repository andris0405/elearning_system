@extends('layouts.general_layout')

@section('content')
<div class="col-xl-8 col-lg-12 col-sm-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> <i class="fa fa-graduation-cap me-2"></i> Monitor Indeks Prestasi Siswa</h4>
        </div>
        <div class="card-body">
            <canvas id="lineChart_2"></canvas>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-responsive-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Raport</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1 [2022-1]</td>
                            <td>10 (IPA 4)</td>
                            <td>80.5</td>
                            <td>Aktif</td>
                            <td>
                                <span class="bg-success text-white ps-1 pe-1 rounded-1">Prestasi</span>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2 [2022-2]</td>
                            <td>10 (IPA 4)</td>
                            <td>70.9</td>
                            <td>Aktif</td>
                            <td>
                                <span class="bg-success text-white ps-1 pe-1 rounded-1">Sedang</span>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1 [2023-1]</td>
                            <td>11 (IPA 4)</td>
                            <td>89.4</td>
                            <td>Aktif</td>
                            <td>
                                <span class="bg-success text-white ps-1 pe-1 rounded-1">Prestasi</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-12 col-sm-12">
    <div class="card" style="height: 450px">
        <div class="card-header">
            <h4 class="card-title"><i class="fa fa-user me-2"></i> Data Pokok Siswa</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>: Andris Eka Adi Saputra</td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td>: 248739827</td>
                        </tr>
                        <tr>
                            <td>TTL</td>
                            <td>: Jepara, 04 Mei 2000</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: 21421409218091244</td>
                        </tr>
                        <tr>
                            <td>No. KK</td>
                            <td>: 249832094832080932</td>
                        </tr>
                        <tr>
                            <td>Nama ayah</td>
                            <td>: Sodiq</td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>: Zumrotun</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
