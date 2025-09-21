@extends('layout.templatehalamanlogin')

@section('halaman')
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-6 mx-auto">
          <!-- Authentication card start -->
          <div class="login-card card-block auth-body">
              <form class="md-float-material" action="/registrasi" method="post">
                @csrf
                  <div class="row m-b-5">
                      <div class="col-md-12 text-center">
                          <img class="img-fluid" src='{{ asset('templateadminsuparman/assests/images/logobuteng.png') }}' alt="logoku.png" width="50" height="50">
                          <h3 class="text-center text-white">Selamat Datang Di Layanan Pengaduan</h3>
                          <h3 class="text-center text-white">Masyarakat Desa Waara</h3>
                      </div>
                  </div>
                  
                  <div class="auth-box">
                      <div class="row m-b-15">
                          <div class="col-md-9">
                              <p class="text-inverse m-t-10 text-left">Silahkan Registrasi Terlebih Dahulu</p>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="username"
                            class="col-sm-3  control-label col-form-label text-left">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control  @error('username') is-invalid @enderror" id="fname"
                                placeholder="Masukan Username" name="username" value="{{ old('username') }}"  autofocus autocomplete="off">
                                @error('username')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 control-label col-form-label text-left">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="lname"
                                placeholder="Masukan Email"  name="email" value="{{ old('email') }}" >
                                @error('email')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password"
                            class="col-sm-3 text-start control-label col-form-label text-left">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('password') is-invalid @enderror" id="lname"
                                placeholder="Masukan Password" name="password" value="{{ old('password') }}">
                                @error('password')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                  </div>

                      <div class="row mt-3">
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Registrasi</button>
                          </div>
                          <div class="col-sm-6 col-md-12 text-center">
                              <a href="/login" class="f-w-600">Sudah Punya Akun ? Login</a>
                          </div>
                      </div>
                      <!-- <div class="card-footer"> -->
                      <!-- <div class="col-sm-12 col-xs-12 text-center">
                          <span class="text-muted">Don't have an account?</span>
                          <a href="register2.html" class="f-w-600 p-l-5">Sign up Now</a>
                      </div> -->
                      <!-- </div> -->
                  </div>
              </form>
              <!-- end of form -->
          </div>
          <!-- Authentication card end -->
      </div>
      <!-- end of col-sm-12 -->
  </div>
  <!-- end of row -->
</div>
@endsection

