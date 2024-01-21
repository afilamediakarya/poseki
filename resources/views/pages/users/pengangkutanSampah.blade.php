@extends('layouts.app')

@section('title')
    Metronic - the worlds by Keenthemes
@endsection

@section('subtitle')
    Buat Permohonan
@endsection

@section('menu')
<!--begin::Menu-->
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
    id="#kt_aside_menu" data-kt-menu="true">
    
    <div class="menu-item">
        <a class="menu-link" href="{{ route('dashboard') }}">
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

    <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                            fill="black" />
                        <path
                            d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                            fill="black" />
                        <path opacity="0.3"
                            d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                            fill="black" />
                        <path opacity="0.3"
                            d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
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
                <a class="menu-link active" href="{{ route('pengangkutanSampah') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Pengangkutan sampah</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="{{ route('layananMasyarakat') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Layanan Masyarakat</span>
                </a>
            </div>
        </div>
    </div>

    <div class="menu-item">
        <a class="menu-link" href="{{ route('riwayat') }}">
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
            <span class="menu-title" style="">Riwayat Permohonan</span>
        </a>
    </div>
   
    <div class="menu-item">
        <a class="menu-link" href="{{ route('faq') }}">
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
            <span class="menu-title" style="">FAQ</span>
        </a>
    </div>

    <div class="menu-item">
        <a class="menu-link" href="{{ route('referensiPohon') }}">
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
        <a class="menu-link" href="{{ route('akun') }}">
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
            <span class="menu-title" style="">Akun</span>
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
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Form Buat Permohonan
                        </h1>
                        <!--begin::Mixed Widget 5-->
                        <div class="card card-xxl-stretch mb-xl-8 mt-5">
                            <!--begin::Beader-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Data Permohonan</span>
                                    <span class="text-muted fw-bold fs-6 mt-3">Formulir ini adalah formulir
                                        pengajuan permohonan untuk penebangan, pemangkasan, atau pemindahan
                                        pohon di lingkungan Kota Kendari.</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <!--begin::form -->
                                <form class="row g-3">
                                    <div class="col-md-12 mb4">
                                        <label for="validationCustom04" class="form-label">Jenis Pemohon</label>
                                        <select class="form-select" id="validationCustom04" required>
                                          <option selected disabled value="">Perumahan</option>
                                          <option>publik</option>
                                        </select>
                                        <div class="invalid-feedback">
                                          Please select a valid state.
                                        </div>
                                      </div>
                                    <div class="col-md-12 mb-4">
                                        <input type="text" class="form-control" id="inputAddress"
                                            aria-describedby="alasan" placeholder="Alasan Permohonan">
                                            <div id="inputAddress" class="form-text">
                                                *Jika alasan permohonan penebangan/pemindahan
                                            karena menghalangi akses, maka pemohon wajib mengunggah gambar letak pohon/site
                                            plan bangunan
                                            </div>
                                    </div>
                                    <div class="col-md-6 mb-4 mt-9 ">
                                        <input type="text" class="form-control" id="inputAddress"
                                            placeholder="Nomor Permohonan">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="floatingInputValue">Tanggal Permohonan</label>
                                        <input type="date" class="form-control" id="inputAddress" placeholder="">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="floatingInputValue">Gambar Denah/Lokasi/Site Plan</label>
                                        <input type="file" class="form-control" id="floatingInputValue" />
                                        <div id="pohon" class="form-text">
                                            *Max 1 mb Pdf (Wajib diisi jika alasan penebangan menghalangi akses)
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="floatingInputValue">Scan IMB</label>
                                        <input type="file" class="form-control" id="floatingInputValue" />
                                        <div id="pohon" class="form-text">
                                            *Max 1 mb Pdf (Opsional)
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="floatingInputValue">Scan Izin Usaha</label>
                                        <input type="file" class="form-control" id="floatingInputValue" />
                                        <div id="pohon" class="form-text">
                                            *Max 1 mb Pdf (Opsional)
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="floatingInputValue">Scan Izin Penyambungan Jalan Masuk</label>
                                        <input type="file" class="form-control" id="floatingInputValue" />
                                        <div id="pohon" class="form-text">
                                            *Max 1 mb Pdf (Opsional)
                                        </div>
                                    </div>
                                </form>
                                <!--end::form-->
                                <hr>
                                <h3 class="card-title align-items-start flex-column mb-3">
                                    <span class="card-label fw-bolder fs-3 mb-1">Pengangkutan Sampah</span>
                                </h3>
                                <form class="row g-3">
                                    <div class="col-md-12 mb-4">
                                        <input type="text" class="form-control" id="inputAddress"
                                            aria-describedby="alasan" placeholder="Alamat">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" id="inputAddress"
                                            placeholder="Kecamatan">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" id="inputAddress"
                                            placeholder="Kelurahan">
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary btn-rounded">Simpan</button>
                                    </div>
                                </form>
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
