@extends('layouts.admin')

@section('title')
    POSEKI - Admin Referensi Pohon
@endsection

@section('subtitle')
    Referensi Pohon
@endsection

@section('menu')
<!--begin::Menu-->
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
    id="#kt_aside_menu" data-kt-menu="true">
    <div class="menu-item">
        <a class="menu-link" href="{{ route('admin') }}">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <img src="assets/media/icons/active.png" style="width : 70%; color : #F4BE2A">
                </span>
            </span>
            <span class="menu-title">Dashboard</span>
        </a>
    </div>

    <div class="menu-item">
        <a class="menu-link active" href="{{ route('admin.referensi') }}">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <img src="assets/media/icons/options-2.png" style="width : 70%; color : #F4BE2A">
                </span>
            </span>
            <span class="menu-title" style="">Referensi Pohon</span>
        </a>
    </div>

    <div class="menu-item">
        <a class="menu-link" href="{{ route('actionlogout') }}">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <img src="assets/media/icons/log-out.png" style="width : 70%; color : #F4BE2A">
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
                       
                        <!--begin::Mixed Widget 5-->
                        <div class="card card-xxl-stretch mb-xl-8 mt-5">
                            <!--begin::Beader-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Referensi Pohon</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <!--begin::form -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="card border" style="width: 18rem;">
                                            <img src="assets/media/pohon.png" class="card-img-top" alt="...">
                                            <div class="card-body text-center">
                                                <p class="card-text fw-bold">Pohon Beringin.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card border" style="width: 18rem;">
                                            <img src="assets/media/pohon.png" class="card-img-top" alt="...">
                                            <div class="card-body text-center">
                                                <p class="card-text fw-bold">Pohon Beringin.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card border" style="width: 18rem;">
                                            <img src="assets/media/pohon.png" class="card-img-top" alt="...">
                                            <div class="card-body text-center">
                                                <p class="card-text fw-bold">Pohon Beringin.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card border" style="width: 18rem;">
                                            <img src="assets/media/pohon.png" class="card-img-top" alt="...">
                                            <div class="card-body text-center">
                                                <p class="card-text fw-bold">Pohon Beringin.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary btn-rounded mt-10">Tambah Referensi Pohon</button>
                                    </div>
                                </div>
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
