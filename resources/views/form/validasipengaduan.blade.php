@extends('layout.template')    

@section('judul')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Validasi Data Pengaduan</h4>
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
                            <form class="form-horizontal" action='{{ url('riwayatpengaduan/'.$id) }}' method='post' enctype="multipart/form-data">
                                @csrf
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
                                            <input type="text" class="form-control bg-white" id="id_pesan"
                                                placeholder="Masukan Id Pesan" name="id_pesan" value="{{ $id_pesan }}">
                                               
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_pengadu"
                                            class="col-sm-3 text-start control-label col-form-label">Nama Pengadu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control bg-white" id="nama_pengadu"
                                                placeholder="Masukan Nama Pengadu" name="nama_pengadu" value="{{ $nama_pengadu }}">
                                               
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="nomorhp"
                                            class="col-sm-3 text-start control-label col-form-label">No. HP Pengadu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control bg-white" id="nomorhp"
                                                placeholder="Masukan nomorhp" name="nomorhp" value="{{ $nomorhp }}" >
                                             
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_kirim"
                                            class="col-sm-3 text-start control-label col-form-label">Tanggal Kirim</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control bg-white" id="tanggal_kirim"
                                                placeholder="Masukan Nama Pengadu" name="tanggal_kirim" value="{{ $tanggal_kirim }}">
                                               
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lokasi" class="col-sm-3 text-start control-label col-form-label">Lokasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control  bg-white" id="lokasi"
                                                placeholder="Masukan Lokasi"  name="lokasi" value="{{ $lokasi }}">
                                               
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_pengaduan"
                                            class="col-sm-3 text-start control-label col-form-label">Jenis Pengaduan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control bg-white" id="jenis_pengaduan"
                                                placeholder="Masukan Jenis Pengaduan" name="jenis_pengaduan" value="{{ $jenis_pengaduan }}">
                                                
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label for="isi_pengaduan"
                                            class="col-sm-3 text-start control-label col-form-label">Isi Pengaduan</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control  bg-white" name="isi_pengaduan">{{ $isi_pengaduan }}</textarea>
                                                   
                                                </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status_proses" class="col-sm-3 text-start control-label col-form-label">Status Proses</label>
                                        <div class="col-sm-9">
                                            <select class="form-select @error('status_proses') is-invalid @enderror"  aria-label="Default select example" name="status_proses" id="status_proses">
                                              <option selected>--Pilih Status--</option>
                                              <option value= "{{ 'Diproses' }}" {{ old('status_proses') == 'Diproses' ? 'selected':null }}>Diproses</option>
                                              <option value= "{{ 'Ditolak' }}" {{ old('status_proses') == 'Ditolak' ? 'selected':null }}>Ditolak</option>
                                              </select>
                                              @error('status_proses')
                                              <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                          @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="isi_pengaduan"
                                            class="col-sm-3 text-start control-label col-form-label">Komentar</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control @error('komentar') is-invalid @enderror" name="komentar" placeholder="Masukan Komentar Anda">{{ old('komentar') }}</textarea>
                                                    @error('komentar')
                                                    <div class="invalid-feedback">
                                                      {{ $message }}
                                                    </div>
                                                @enderror
                                                </div>
                                    </div>
                                               
                                       
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection