@extends('layouts.app')

@section('title')
    POSEKI - Riwayat Permohonan
@endsection

@section('subtitle')
    Riwayat Permohonan
@endsection

@section('menu')
<!--begin::Menu-->
    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
        id="#kt_aside_menu" data-kt-menu="true">

        <div class="menu-item">
            <a class="menu-link" href="{{ route('dashboard') }}">
                <span class="menu-icon">
                    <span class="svg-icon svg-icon-2">
                        <img src="assets/media/icons/active.png" style="width : 70%; color : #F4BE2A">
                    </span>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
            <span class="menu-link">
                <span class="menu-icon">
                    <img src="assets/media/icons/file-add.png" style="width : 80%;">
                </span>
                <span class="menu-title">Buat Permohonan</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion">
                <div class="menu-item">
                    <a class="menu-link " href="{{ route('buatPermohonan') }}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Penebangan dan pemindahan pohon</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('pengangkutanSampah') }}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Pengangkutan sampah</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="menu-item">
            <a class="menu-link active" href="{{ route('riwayat') }}">
                <span class="menu-icon">
                    <span class="svg-icon svg-icon-2">
                        <img src="assets/media/icons/kegiatan1.png" style="width : 80%;">
                    </span>
                </span>
                <span class="menu-title" style="">Riwayat Permohonan</span>
            </a>
        </div>

        <div class="menu-item">
            <a class="menu-link" href="{{ route('faq') }}">
                <span class="menu-icon">
                    <img src="assets/media/icons/book-open.png" style="width : 80%;">
                </span>
                <span class="menu-title" style="">FAQ</span>
            </a>
        </div>

        <div class="menu-item">
            <a class="menu-link" href="{{ route('referensiPohon') }}">
                <span class="menu-icon">
                    <img src="assets/media/icons/options-2.png" style="width : 80%;">
                </span>
                <span class="menu-title" style="">Referensi Pohon</span>
            </a>
        </div>

        <div class="menu-item">
            <a class="menu-link" href="{{ route('akun') }}">
                <span class="menu-icon">
                    <img src="assets/media/icons/user.png" style="width : 80%;">
                </span>
                <span class="menu-title" style="">Akun</span>
            </a>
        </div>

        <div class="menu-item">
            <a class="menu-link" href="{{ route('actionlogout') }}">
                <span class="menu-icon">
                    <img src="assets/media/icons/log-out.png" style="width : 80%;">
                </span>
                <span class="menu-title" style="">Log out</span>
            </a>
        </div>
    </div>
    <!--end::Menu-->
@endsection

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div class="row g-5 g-xxl-8">
                    <!--begin::Col-->
                    <div class="col-xxl-4">
                        <!--begin::Mixed Widget 5-->
                        <div class="card card-xxl-stretch mb-xl-8 mt-5">
                            <!--begin::Beader-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Riwayat Permohonan</span>
                                    <span class="text-muted fw-bold fs-6 mt-3">Ini merupakan hasil riwayat permohonan dari
                                        Nomor Permohonan yang telah melakukan pengimputan data permohonan.</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <!--begin::table -->
                                <table class="table table-striped " style="border: 1;">
                                    <thead>
                                      <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Jenis Pelayanan</th>
                                        <th scope="col">Alasan</th>
                                        <th scope="col">Pemohon</th>
                                        <th scope="col">Tanggal Pemohon</th>
                                        <th scope="col">No.Permohonan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Penebangan Pohon</td>
                                        <td>Menghalangi Jalan</td>
                                        <td>Pribadi</td>
                                        <td>12-12-2024</td>
                                        <td>001/2024</td>
                                        <td>Permohonan dibuat</td>
                                        <td><a class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a></td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>Pengambilan Sampah</td>
                                        <td>Sampah Tertumpuk</td>
                                        <td>Perumahan</td>
                                        <td>12-12-2024</td>
                                        <td>002/2024</td>
                                        <td>Permohonan dibuat</td>
                                        <td><a class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                <!--end::table-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 5-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
