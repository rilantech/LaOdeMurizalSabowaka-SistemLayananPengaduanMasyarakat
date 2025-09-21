@extends('layout.templatehalamanlogin')

@section('halaman')
<div class="container-fluid ">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <!-- Authentication card start -->
            <div class="login-card card-block auth-body">
                <form class="md-float-material" action="/login" method="post" >
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
                                <p class="text-inverse m-t-10 text-left">Silahkan Login Terlebih Dahulu</p>
                            </div>
                        </div>
                        @if (session()->has('msg'))
          
                        <div class="alert alert-success alert-dismissible col-xl-6 col-sm-6 fade show mb-2" role="alert">
                              {{ session('msg') }}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show col-xl-6 col-sm-6 " role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                                       
                       @endif

                        <div class="input-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" autofocus value="{{ old('email') }}"  placeholder="Email" name="email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"  value="{{ old('password') }}"  placeholder="Password" id="password" name="password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row m-t-25 text-left">
                            <div class="col-sm-6 col-xs-12">
                                <div class="checkbox-fade fade-in-primary">
                                    <label>
                                        <input type="checkbox" value="" onclick="myFunction()">
                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                      
                                    </label>
                                </div>
                            </div>
                          
                        </div>
                        <script>
                            function myFunction() {
                                var x = document.getElementById("password");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Login</button>
                            </div>
                            <div class="col-sm-6 col-md-12 text-center">
                                <a href="/registrasi" class="f-w-600">Belum Punya Akun ? Registrasi</a>
                            </div>
                        </div>
                       
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

