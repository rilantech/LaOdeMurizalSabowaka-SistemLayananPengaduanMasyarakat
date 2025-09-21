@extends('layout.template')    

@section('judul')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit Data User</h4>
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
                            <form class="form-horizontal" action='{{  url('datauser/'.$id) }}' method='post' enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fotoprofil"
                                            class="col-sm-3 text-start control-label col-form-label">Foto Profil</label>
                                        <div class="col-sm-9">
                                            <input type="file"  class="form-control @error('fotoprofil') is-invalid @enderror" name='fotoprofil'>
                                            @error('fotoprofil')
                                            <div class="invalid-feedback">
                                              {{ $message }}
                                            </div>
                                        @enderror
                                        <img src="{{ asset('galerifoto/'.$fotoprofil) }}" class="image-thumbnail mt-3" width="100px" />
                                        <input type="hidden"  class="form-control" name='hidden_image' value="{{ $fotoprofil }}">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="username"
                                            class="col-sm-3 text-start control-label col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control  @error('username') is-invalid @enderror" id="fname"
                                                placeholder="Masukan Username" name="username" value="{{ $username }}"  autofocus autocomplete="off">
                                                @error('username')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-start control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="lname"
                                                placeholder="Masukan Email"  name="email" value="{{ $email }}" >
                                                @error('email')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-sm-3 text-start control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('password') is-invalid @enderror" id="lname"
                                                placeholder="Masukan Password" name="password" value="{{ $password }}">
                                                @error('password')
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