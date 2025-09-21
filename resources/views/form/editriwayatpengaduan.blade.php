@extends('layout.template')    

@section('judul')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit Riwayat Pengaduan</h4>
        </div>
    </div>
</div>
@endsection
@section('konten')
<!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6 mx-auto mt-5">
                        <div class="card">
                            <form class="form-horizontal" action='{{ url('riwayatpengaduan/'.$id) }}' method='post' enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="id_pesan"
                                            class="col-sm-3 text-start control-label col-form-label">Id Pesan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('id_pesan') is-invalid @enderror" id="id_pesan"
                                                placeholder="Masukan Id Pesan" name="id_pesan" value="{{ $id_pesan }}">
                                                @error('id_pesan')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_pengadu" class="col-sm-3 text-start control-label col-form-label">Nama Pelapor</label>
                                        <div class="col-sm-9">
                                            <select class="form-select @error('nama_pengadu') is-invalid @enderror"  aria-label="Default select example" name="nama_pengadu" id="nama_pengadu">
                                              <option selected>{{ $nama_pengadu }}</option>
                                              @foreach ($datauser as $item)
                                              <option value= "{{ $item->username }}" {{ old('nama_pengadu') == $item->username ? 'selected':null }}>{{ $item->username }}</option>
                                              @endforeach
                                              </select>
                                              @error('nama_pengadu')
                                              <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                          @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gambar" class="col-sm-3 text-start control-label col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                          <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                            @error('image')
                                            <div class="invalid-feedback">
                                              {{ $message }}
                                            </div>
                                        @enderror
                                        <img src="{{ asset('galerifoto/'.$gambar) }}" class="image-thumbnail mt-3" width="100px" />
                                        <input type="hidden"  class="form-control" name='hidden_image' value="{{ $gambar }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lokasi" class="col-sm-3 text-start control-label col-form-label">Lokasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi"
                                                placeholder="Masukan Lokasi"  name="lokasi" value="{{ $lokasi }}" >
                                                @error('lokasi')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nomorhp"
                                            class="col-sm-3 text-start control-label col-form-label">No. HP Pelapor</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('nomorhp') is-invalid @enderror" id="nomorhp"
                                                placeholder="Masukan nomorhp" name="nomorhp" value="{{ $nomorhp }}">
                                                @error('nomorhp')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_pengaduan" class="col-sm-3 text-start control-label col-form-label">Jenis Pengaduan</label>
                                        <div class="col-sm-9">
                                            <select class="form-select @error('jenis_pengaduan') is-invalid @enderror"  aria-label="Default select example" name="jenis_pengaduan" id="jenis_pengaduan">
                                              <option selected>{{ $jenis_pengaduan }}</option>
                                              <option value= "{{ 'Laporan Kejahatan' }}" {{ old('jenis_pengaduan') == 'Laporan Kejahatan' ? 'selected':null }}>Laporan Kejahatan</option>
                                              <option value= "{{ 'Kekerasan Rumah Tangga' }}" {{ old('jenis_pengaduan') == 'Kekerasan Rumah Tangga' ? 'selected':null }}>Kekerasan Rumah Tangga</option>
                                              </select>
                                              @error('jenis_pengaduan')
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
                                            <input type="date" class="form-control @error('tanggal_kirim') is-invalid @enderror" id="tanggal_kirim"
                                                placeholder="Masukan Tanggal Kirim" name="tanggal_kirim" value="{{ $tanggal_kirim }}">
                                                @error('tanggal_kirim')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="isi_pengaduan"
                                            class="col-sm-3 text-start control-label col-form-label">Isi Pengaduan</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control @error('isi_pengaduan') is-invalid @enderror" name="isi_pengaduan">{{ $isi_pengaduan }}</textarea>
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
                                                placeholder="Masukan status_proses"  name="status_proses" value="{{ $status_proses }}">
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
                                                    <textarea class="form-control @error('komentar') is-invalid @enderror bg-white" name="komentar" placeholder="Masukan Komentar Anda">{{ $komentar }}</textarea>
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
                                                placeholder="Masukan tanggal_validasi"  name="tanggal_validasi" value="{{ $tanggal_validasi }}">
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
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection