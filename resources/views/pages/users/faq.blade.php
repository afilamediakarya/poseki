@extends('layouts.app')

@section('title')
    POSEKI - FaQ
@endsection

@section('subtitle')
    FaQ
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
            <a class="menu-link active" href="{{ route('faq') }}">
                <span class="menu-icon">
                    <img src="assets/media/icons/book-open.png" style="width : 80%;">
                </span>
                <span class="menu-title" style="">FaQ</span>
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
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">FaQ
                        </h1>
                        <!--begin::Mixed Widget 5-->
                        <div class="card card-xxl-stretch mb-xl-8 mt-5">
                            <!--begin::Beader-->
                            <div class="card-header border-0 py-3">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="text-muted fw-bold fs-4 mt-3">Frequently Asked Questions (FAQ).</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <!--begin::Section-->
                            <div class="px-6">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center collapsible py-3 toggle mb-0"
                                    data-bs-toggle="collapse" data-bs-target="#kt_job_8_1">
                                    <!--begin::Icon-->
                                    <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                        <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                    rx="5" fill="black" />
                                                <rect x="6.0104" y="10.9247" width="12" height="2" rx="1"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                        <span class="svg-icon toggle-off svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                    rx="5" fill="black" />
                                                <rect x="10.8891" y="17.8033" width="12" height="2"
                                                    rx="1" transform="rotate(-90 10.8891 17.8033)"
                                                    fill="black" />
                                                <rect x="6.01041" y="10.9247" width="12" height="2"
                                                    rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Bagaimana cara mengajukan
                                        permohonan?</h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Body-->
                                <div id="kt_job_8_1" class="collapse show fs-6 ms-1">
                                    <!--begin::Text-->
                                    <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">Kamu bisa ke menu buat permohonan
                                        lalu memilih jenis permohonan apa yang ingin diajukan lalu mengisi form
                                        pengajuannya.</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed"></div>
                                <!--end::Separator-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="px-6">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                    data-bs-toggle="collapse" data-bs-target="#kt_job_8_2">
                                    <!--begin::Icon-->
                                    <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                        <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                    rx="5" fill="black" />
                                                <rect x="6.0104" y="10.9247" width="12" height="2" rx="1"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                        <span class="svg-icon toggle-off svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                    rx="5" fill="black" />
                                                <rect x="10.8891" y="17.8033" width="12" height="2"
                                                    rx="1" transform="rotate(-90 10.8891 17.8033)"
                                                    fill="black" />
                                                <rect x="6.01041" y="10.9247" width="12" height="2"
                                                    rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Apakah layanan ini berbayar?
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Body-->
                                <div id="kt_job_8_2" class="collapse fs-6 ms-1">
                                    <!--begin::Text-->
                                    <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">Tidak, layanan ini gratis.</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed"></div>
                                <!--end::Separator-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="px-6">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                    data-bs-toggle="collapse" data-bs-target="#kt_job_8_3">
                                    <!--begin::Icon-->
                                    <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                        <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                    rx="5" fill="black" />
                                                <rect x="6.0104" y="10.9247" width="12" height="2" rx="1"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                        <span class="svg-icon toggle-off svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                    rx="5" fill="black" />
                                                <rect x="10.8891" y="17.8033" width="12" height="2"
                                                    rx="1" transform="rotate(-90 10.8891 17.8033)"
                                                    fill="black" />
                                                <rect x="6.01041" y="10.9247" width="12" height="2"
                                                    rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Bagaimana cara melacak status
                                        permohonan saya?</h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Body-->
                                <div id="kt_job_8_3" class="collapse fs-6 ms-1">
                                    <!--begin::Text-->
                                    <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">Kamu bisa ke menu lacak permohonan
                                        lalu mengimput nomor permohonan.</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed"></div>
                                <!--end::Separator-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
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
