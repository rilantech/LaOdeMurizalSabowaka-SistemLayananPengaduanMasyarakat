@extends('layout.template')    

@section('judul')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Tambah Data Pengaduan</h4>
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
                            <form class="form-horizontal" action='{{ url('daftarpengaduan') }}' method='post' enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="id_pesan"
                                            class="col-sm-3 text-start control-label col-form-label">Id Pesan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('id_pesan') is-invalid @enderror" id="id_pesan"
                                                placeholder="Masukan Id Pesan" name="id_pesan" value="{{ old('id_pesan') }}">
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
                                              <option selected>--Pilih Pelapor--</option>
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
                                          <input type="file"  class="form-control @error('gambar') is-invalid @enderror" name='gambar'>
                                            @error('gambar')
                                            <div class="invalid-feedback">
                                              {{ $message }}
                                            </div>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-start control-label col-form-label">Lokasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi"
                                                placeholder="Masukan Lokasi"  name="lokasi" value="{{ old('lokasi') }}" >
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
                                                placeholder="Masukan No. HP Pelapor" name="nomorhp" value="{{ old('nomorhp') }}">
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
                                              <option selected>--Pilih Jenis Pengaduan--</option>
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
                                            <input type="date" class="tm form-control @error('tanggal_kirim') is-invalid @enderror" id="tanggal_kirim"
                                                placeholder="Masukan Tanggal Kirim" name="tanggal_kirim" value="{{ old('tanggal_kirim') }}" data-date-format="DD/MMM/YYYY"  placeholder="dd/mm/yyyy">
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
                                                    <textarea class="form-control @error('isi_pengaduan') is-invalid @enderror" name="isi_pengaduan">{{ old('isi_pengaduan') }}</textarea>
                                                    @error('isi_pengaduan')
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
                <script
src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js">
<script>
    
    $(".tm").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
    }).trigger("change")

</script>
</script>
@endsection