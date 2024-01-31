@extends('layouts.admin')

@section('title')
    POSEKI - Admin Dashboard
@endsection

@section('subtitle')
    Dashboard
@endsection

@section('navbar')
<!--begin::Topbar-->
<div class="d-flex align-items-stretch flex-shrink-0">
    <!--begin::Toolbar wrapper-->
    <div class="d-flex align-items-stretch flex-shrink-0">
        <!--begin::User-->
        <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->
            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
                data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                <img src="assets/media/avatars/150-26.jpg" alt="user" style="border-radius: 50%;" />
                <span class="mr-2 d-none d-lg-inline text- small"></span>
            </div>
            <!--end::Menu wrapper-->
        </div>
        <!--end::User -->
        <!--begin::Heaeder menu toggle-->
        <!--end::Heaeder menu toggle-->
    </div>
    <!--end::Toolbar wrapper-->
</div>
<!--end::Topbar-->

@endsection

@section('menu')
    <!--begin::Menu-->
    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
        id="#kt_aside_menu" data-kt-menu="true">
        <div class="menu-item">
            <a class="menu-link active" href="{{ route('admin') }}">
                <span class="menu-icon">
                    <span class="svg-icon svg-icon-2">
                        <img src="assets/media/icons/active.png" style="width : 70%; color : #F4BE2A">
                    </span>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </div>

        <div class="menu-item">
            <a class="menu-link" href="{{ route('admin.referensi') }}">
                <span class="menu-icon">
                    <img src="assets/media/icons/options-2.png" style="width : 80%;">
                </span>
                <span class="menu-title" style="">Referensi Pohon</span>
            </a>
        </div>

        <div class="menu-item">
            <a class="menu-link" href="{{ route('actionlogout') }}">
                <span class="menu-icon">
                    <span class="svg-icon svg-icon-2">
                        <img src="assets/media/icons/log-out.png" style="width : 80%; color : #F4BE2A">
                    </span>
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
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Form Permohonan
                        </h1>
                        <!--begin::Mixed Widget 5-->
                        <div class="card card-xxl-stretch mb-xl-8 mt-5">
                            <!--begin::Beader-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Data Pemohon</span>
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
                                        <td>
                                            <a class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-sm btn-success"><i class="fas fa-check-circle"></i></a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>Pengambilan Sampah</td>
                                        <td>Sampah Tertumpuk</td>
                                        <td>Perumahan</td>
                                        <td>12-12-2024</td>
                                        <td>002/2024</td>
                                        <td>Permohonan dibuat</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-sm btn-success"><i class="fas fa-check-circle"></i></a>
                                        </td>
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
