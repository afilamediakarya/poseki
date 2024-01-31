@extends('layouts.app')

@section('title')
    POSEKI - Penebangan dan Pemindahan pohon
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
                    <a class="menu-link active" href="{{ route('buatPermohonan') }}">
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
                                <form class="row g-3" method="POST">
                                    <div class="col-md-12 mb4">
                                        <label for="validationCustom04" class="form-label">Jenis Pemohon</label>
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="perumahan">Perumahan</option>
                                            <option value="public">publik</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <input type="text" class="form-control" id="inputAddress" name = "alasan"
                                            aria-describedby="alasan" placeholder="Alasan Permohonan">
                                        <div id="inputAddress" class="form-text">
                                            *Jika alasan permohonan penebangan/pemindahan
                                            karena menghalangi akses, maka pemohon wajib mengunggah gambar letak pohon/site
                                            plan bangunan
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 mt-9 ">
                                        <input type="text" class="form-control" id="inputAddress" name="noPermohonan"
                                            placeholder="Nomor Permohonan">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="floatingInputValue">Tanggal Permohonan</label>
                                        <input type="date" class="form-control" id="inputAddress" name="tglPermohonan">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="floatingInputValue">Gambar Denah/Lokasi/Site Plan</label>
                                        <input type="file" class="form-control" id="floatingInputValue" name="gambar" />
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
                                    <span class="card-label fw-bolder fs-3 mb-1">Data Pohon</span>
                                </h3>
                                <form class="row g-3">
                                    <div class="col-md-12 mb-4">
                                        <input type="text" class="form-control" id="inputAddress" name="alamat"
                                            aria-describedby="alasan" placeholder="Alamat">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" id="inputAddress" name="kecamatan"
                                            placeholder="Kecamatan">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" id="inputAddress" name="kelurahan"
                                            placeholder="Kelurahan">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" for="pohon" name="namaPohon"
                                            placeholder="Nama Pohon">
                                        <div id="pohon" class="form-text">
                                            *Jika tidak mengetahui nama pohon wajib upload gambar pohon.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" id="inputAddress" name="jumlahPohon"
                                            placeholder="Jumlah Pohon">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" id="inputAddress" name="jenisPohon"
                                            placeholder="Jenis Pohon">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" id="inputAddress" name="diameterPohon"
                                            placeholder="Diameter Pohon">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="floatingInputValue">Upload Gambar Pohon</label>
                                        <input type="file" class="form-control" id="floatingInputValue" name="gambarPohon" />
                                        <div id="pohon" class="form-text">
                                            *Max 1 mb Pdf (Opsional)
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 mt-9">
                                        <input type="text" class="form-control" id="inputAddress" name="pohonPengganti"
                                            placeholder="Jenis Pohon Pengganti">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" id="inputAddress" name="jumlahPohonPengganti"
                                            placeholder="Jumlah Pohon Pengganti">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" id="inputAddress" name="lokasiPohonPengganti"
                                            placeholder="Lokasi Pohon Pengganti">
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
