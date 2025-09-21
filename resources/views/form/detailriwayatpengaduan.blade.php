@extends('layout.template')    

@section('judul')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Detail Riwayat Pengaduan</h4>
        </div>
    </div>
</div>
@endsection
@section('konten')
<!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8 mx-auto mt-5">
                        <div class="card">
                            <form class="form-horizontal" action='{{ url('validasipengaduan/'.$id) }}' method='post' enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @method('DELETE')
                                {{-- <input type="hidden"  class="form-control" name='id' value="{{ $id }}"> --}}
                                <div class="card-body">
                                    <div class="form-group row">
                                        <img src="{{ asset('galerifoto/'.$gambar) }}" class="img-fluid rounded" />
                                        <input type="hidden"  class="form-control" name='hidden_image' value="{{ $gambar }}">
                                    </div>
                                    <div class="form-group row">
                                        <label for="id_pesan"
                                            class="col-sm-3 text-start control-label col-form-label">Id Pesan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('id_pesan') is-invalid @enderror bg-white" id="id_pesan"
                                                placeholder="Masukan Id Pesan" name="id_pesan" value="{{ $id_pesan }}" disabled>
                                                @error('id_pesan')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_pengadu"
                                            class="col-sm-3 text-start control-label col-form-label">Nama Pengadu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('nama_pengadu') is-invalid @enderror bg-white" id="nama_pengadu"
                                                placeholder="Masukan Nama Pengadu" name="nama_pengadu" value="{{ $nama_pengadu }}" disabled>
                                                @error('nama_pengadu')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="nomorhp"
                                            class="col-sm-3 text-start control-label col-form-label">No. HP Pengadu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('nomorhp') is-invalid @enderror bg-white" id="nomorhp"
                                                placeholder="Masukan nomorhp" name="nomorhp" value="{{ $nomorhp }}" disabled>
                                                @error('nomorhp')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_kirim"
                                            class="col-sm-3 text-start control-label col-form-label">Tanggal Kirim</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('tanggal_kirim') is-invalid @enderror bg-white" id="tanggal_kirim"
                                                placeholder="Masukan Nama Pengadu" name="tanggal_kirim" value="{{ $tanggal_kirim }}" disabled>
                                                @error('tanggal_kirim')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lokasi" class="col-sm-3 text-start control-label col-form-label">Lokasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('lokasi') is-invalid @enderror bg-white" id="lokasi"
                                                placeholder="Masukan Lokasi"  name="lokasi" value="{{ $lokasi }}" disabled>
                                                @error('lokasi')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label for="jenis_pengaduan" class="col-sm-3 text-start control-label col-form-label">Jenis Pengaduan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('jenis_pengaduan') is-invalid @enderror bg-white" id="jenis_pengaduan"
                                                placeholder="Masukan jenis_pengaduan"  name="jenis_pengaduan" value="{{ $jenis_pengaduan }}" disabled>
                                                @error('jenis_pengaduan')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label for="isi_pengaduan" class="col-sm-3 text-start control-label col-form-label">Isi Pengaduan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('isi_pengaduan') is-invalid @enderror bg-white" id="isi_pengaduan"
                                                placeholder="Masukan isi_pengaduan"  name="isi_pengaduan" value="{{ $isi_pengaduan }}" disabled>
                                                @error('isi_pengaduan')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status_proses" class="col-sm-3 text-start control-label col-form-label">Status Proses</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('status_proses') is-invalid @enderror bg-white" id="status_proses"
                                                placeholder="Masukan status_proses"  name="status_proses" value="{{ $status_proses }}" disabled>
                                                @error('status_proses')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="komentar"
                                            class="col-sm-3 text-start control-label col-form-label">Komentar</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control @error('komentar') is-invalid @enderror bg-white" name="komentar" placeholder="Masukan Komentar Anda" disabled>{{ $komentar }}</textarea>
                                                    @error('komentar')
                                                    <div class="invalid-feedback">
                                                      {{ $message }}
                                                    </div>
                                                @enderror
                                                </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_validasi" class="col-sm-3 text-start control-label col-form-label">Tanggal Validasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('tanggal_validasi') is-invalid @enderror bg-white" id="tanggal_validasi"
                                                placeholder="Masukan tanggal_validasi"  name="tanggal_validasi" value="{{ $tanggal_validasi }}" disabled>
                                                @error('tanggal_validasi')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                               
                                       
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary" onclick=window.location='{{ url('riwayatpengaduan') }}'>Kembali</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection