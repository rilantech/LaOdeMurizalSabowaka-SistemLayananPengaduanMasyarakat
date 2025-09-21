@extends('layout.template')    

@section('judul')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Beranda</h4>
           
        </div>
    </div>
</div>
@endsection
@section('konten')
<!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                        <!-- column -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="font-medium">Selamat Datang Di Layanan Pengaduan Masyarakat Desa Waara Kab. Buton Tengah</h6>
                                </div>
                            </div> 
                        </div>
                </div>
                <div class="row">
                    <!-- Column -->
                        <!-- column -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fa fa-user mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ $datauser }}</h5>
                                                <small class="font-light">Data User</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="far fa-share-square mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ $datapengaduan }}</h5>
                                                <small class="font-light">Data Pengaduan</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class=" fas fa-dna mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ $riwayatpengaduanditerima }}</h5>
                                                <small class="font-light">Pengaduan Di Proses</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="far fa-file-excel mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ $riwayatpengaduanditolak }}</h5>
                                                <small class="font-light">Pengaduan Di Tolak</small>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div> 
                        </div>
                </div>
@endsection