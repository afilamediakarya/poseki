@extends('layouts.app')

@section('title')
    POSEKI - Akun
@endsection

@section('subtitle')
    Akun
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
            <a class="menu-link" href="{{ route('riwayat') }}">
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
            <a class="menu-link active" href="{{ route('akun') }}">
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
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Akun
                        </h1>
                        <!--begin::Mixed Widget 5-->
                        <div class="card card-xxl-stretch mb-xl-8 mt-5">
                            <!--begin::Beader-->
                            <div class="card-header border-0 py-5">
                                <table>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-100px symbol-circle mt-5">
                                                <img src="assets/media/avatars/150-26.jpg" alt="image" />
                                            </div>
                                        </td>
                                        <td>
                                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 ms-6">Muhammad parif</h1>
                                            <span class="mx-6 d-none d-lg-inline text-small text-active-gray-100">parif</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <form class="row g-3 mt-md-5">
                                                <div class="col-md-6 mb-4">
                                                    <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                                                    <input type="email" class="form-control" id="inputEmail4" value="Muhammad parif">
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="inputUsername" class="form-label">Username</label>
                                                    <input type="text" class="form-control" id="inputUsername" value="parif">
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="inputEmail5" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="inputEmail5" value="muhammadparif028@gmail.com">
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="inputPassword" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword" value="12345678">
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="inputNomorTelepon" class="form-label">NomorTelepon</label>
                                                    <input type="text" class="form-control" id="inputNomorTelepon" value="082349389244">
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button type="submit" class="btn btn-primary btn-rounded">Edit
                                                        Profile</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </table>

                                {{--  <div class="row">
                                    <div class="col-4">
                                        <div class="symbol symbol-100px symbol-circle mb-7">
                                            <img src="assets/media/avatars/150-1.jpg" alt="image" />
                                        </div>
                                    </div>
                                </div>  --}}

                                {{--  <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Data Pemohon</span>
                                    <span class="text-muted fw-bold fs-6 mt-3">Formulir ini adalah formulir
                                        pengajuan permohonan untuk penebangan, pemangkasan, atau pemindahan
                                        pohon di lingkungan Kota Kendari. Dinas Lingkungan Hidup siap
                                        menerima dan memproses permohonan Anda.</span>
                                </h3>  --}}

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <!--begin::form -->
                                <!--end::form-->
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
