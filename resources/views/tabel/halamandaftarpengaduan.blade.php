@extends('layout.template')    

@section('judul')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Daftar Pengaduan</h4>
        </div>
    </div>
    @if (session()->has('msg'))
          
    <div class="alert alert-success alert-dismissible col-xl-6 col-sm-6 fade show mb-2" role="alert">
          {{ session('msg') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        
   @endif
</div>
@endsection
@section('konten')

<!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-3">
                            <h5 class="card-title">Tabel Daftar Pengaduan</h5>    
                        </div>
                        </div>
                        <div class="row">
                        <form class="app-search-form col-6" method="GET"> 
                            <div class="input-group">
                                <input type="text" placeholder="Cari Data Pengaduan..." name="search" class="form-control search-input" value="{{ $search }}" id="search">
                                <button type="submit" class="btn search-btn btn-primary" value="Search"><i class=" fas fa-search"></i></button> 
                            </div> 
                                @error('username')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </form>

                        <div class="col-3">
                            <button type="button" class="btn btn-primary" onclick="window.location='{{ url('tambahdatapengaduan') }}'" >Tambah</button>
                        </div>
                        </div>
                                
                        </div>
                       <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center bg-cyan">
                                    <tr>
                                        <th class="col-1 text-white">No</th>
                                        <th class="col-1 text-white">Id Pesan</th>
                                        <th class="col-1 text-white">Nama Pengadu</th>
                                        <th class="col-1 text-white">No. HP Pengadu</th>
                                        <th class="col-2 text-white">Tanggal Kirim</th>
                                        <th class="col-2 text-white">Lokasi Pengaduan</th>
                                        <th class="col-2 text-white">Jenis Pengaduan</th>
                                        <th class="col-2 text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $nomor = 1 + (($daftarpengaduan->currentPage()-1)* $daftarpengaduan->perPage());;
                                @endphp
                                    @foreach ($daftarpengaduan as $row)
                                    <tr>
                                        <td>{{ $nomor ++ }}</td>
                                        <td>{{ $row->id_pesan }}</td>
                                        <td>{{ $row->nama_pengadu }}</td>
                                        <td>{{ $row->nomor_hp_pelapor }}</td>
                                        <td>{{ $row->tanggal_kirim }}</td>
                                        <td>{{ $row->lokasi }}</td>
                                        <td>{{ $row->jenis_pengaduan }}</td>
                                        <td>  <div class="row">
                                            <div class="col-4 text-center">
                                                <button onclick="window.location='{{ url('validasipengaduan/'.$row->id) }}'" type="button" class="btn btn-success btn-md" title="Validasi Pengaduan">
                                                     <i class="fas fa-list"></i>
                                                </button>
                                               </div>
                                            <div class="col-4 text-center">
                                             <button onclick="window.location='{{ url('daftarpengaduan/'.$row->id) }}'" type="button" class="btn btn-md btn-warning" title="Edit Data">
                                                  <i class="fa fa-edit"></i>
                                             </button>
                                            </div>
                                            <div class="col-4 text-center">
                                             <form onsubmit="return deleteData('{{ $row->nama_pengadu }}')" action="{{ url('daftarpengaduan/'.$row->id) }}" method="POST"> 
                                              @csrf
                                              @method('DELETE')
                                                 <button type="submit" title="Hapus Data" class="btn btn-danger btn-md">
                                                  <i class="fa fa-trash-alt"></i>
                                                 </button>
                                            </form>
                                          </div>
                                        </td>
                                       
                                    </tr>
                                
                                    @endforeach      
                                  
                                </tbody>
                             
                            </table>
                            {!! $daftarpengaduan->appends(Request::except('page'))->render() !!}
                        </div>
                    </div>
                    
                    </div>
             
@endsection