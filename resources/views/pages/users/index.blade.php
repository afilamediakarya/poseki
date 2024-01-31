@extends('layouts.app')

@section('title')
    POSEKI - Dashboard
@endsection

@section('subtitle')
    Dashboard
@endsection

@section('menu')
    <!--begin::Menu-->
    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
        id="#kt_aside_menu" data-kt-menu="true">

        <div class="menu-item">
            <a class="menu-link active" href="{{ route('dashboard') }}">
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
                    <a class="menu-link " href="{{ url('/buatPermohonan') }}">
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
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Form Permohonan
                        </h1>
                        <!--begin::Mixed Widget 5-->
                        <div class="card card-xxl-stretch mb-xl-8 mt-5">
                            <!--begin::Beader-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Data Pemohon</span>
                                    <span class="text-muted fw-bold fs-6 mt-3">Formulir ini adalah formulir
                                        pengajuan permohonan untuk penebangan, pemangkasan, atau pemindahan
                                        pohon di lingkungan Kota Kendari. Dinas Lingkungan Hidup siap
                                        menerima dan memproses permohonan Anda.</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <!--begin::form -->
                                {{--  <form class="row g-3">  --}}
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                            id='nik' name="nik" placeholder="NIK">
                                        <!-- error message untuk nik -->
                                        @error('nik')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                            id='namaLengkap' name="namaLengkap" disabled
                                            value="{{ Auth::user()->namaLengkap }}">
                                        <!-- error message untuk namaLengkap -->
                                        @error('namaLengkap')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                                            id='no_telp' name="no_telp" placeholder="no_telp">
                                        <!-- error message untuk no_telp -->
                                        @error('no_telp')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id='email' name="email" disabled value="{{ Auth::user()->email }}">
                                        <!-- error message untuk email -->
                                        @error('email')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                            id='gambar' name="gambar" placeholder="gambar">
                                        <!-- error message untuk gambar -->
                                        @error('gambar')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <input type="text"
                                            class="form-control @error('pekerjaan') is-invalid @enderror" id='pekerjaan'
                                            name="pekerjaan" placeholder="pekerjaan">
                                        <!-- error message untuk pekerjaan -->
                                        @error('pekerjaan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                            id='alamat' name="alamat" placeholder="alamat">
                                        <!-- error message untuk alamat -->
                                        @error('alamat')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12 text-end">
                                        <a href="#" class="btn btn-primary btn-rounded"
                                            onclick="simpan()">Update</a>
                                    </div>
                                {{--  </form>  --}}
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
@section('script')
    <script>
        function update() {
            console.log("Hello World")
        }

        function simpan() {
            let csrfToken = document.querySelector('meta[name="csrf-token"]').content;
            let formData = new FormData();
            let nik = document.getElementById('nik');
            let namaLengkap = document.getElementById('namaLengkap');
            let no_telp = document.getElementById('no_telp');
            let email = document.getElementById('email');
            let file = document.getElementById('gambar');
            let gambar = file.files[0];
            let pekerjaan = document.getElementById('pekerjaan');
            let alamat = document.getElementById('alamat');
            formData.append('nik', nik);
            formData.append('namaLengkap', namaLengkap);
            formData.append('no_telp', no_telp);
            formData.append('email', email);
            formData.append('gambar', gambar);
            formData.append('pekerjaan', pekerjaan);
            formData.append('alamat', alamat);

            fetch('/dashboard/store', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: formData,
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.error('Ada kesalahan:', error.message);
                });
        }
    </script>
@endsection
