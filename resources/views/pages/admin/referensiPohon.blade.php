@extends('layouts.admin')

@section('title')
    Metronic - the worlds by Keenthemes
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
                <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                        fill="none">
                        <path opacity="0.3"
                            d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                            fill="black" />
                        <path
                            d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Dashboard</span>
        </a>
    </div>

    <div class="menu-item">
        <a class="menu-link active" href="{{ url('admin/referensiPohon') }}">
            <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                        fill="none">
                        <path opacity="0.3"
                            d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                            fill="black" />
                        <path
                            d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </span>
            <span class="menu-title" style="">Referensi Pohon</span>
        </a>
    </div>

    <div class="menu-item">
        <a class="menu-link" href="{{ url('/') }}">
            <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                        fill="none">
                        <path opacity="0.3"
                            d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                            fill="black" />
                        <path
                            d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
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
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Referensi Pohon
                        </h1>
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
