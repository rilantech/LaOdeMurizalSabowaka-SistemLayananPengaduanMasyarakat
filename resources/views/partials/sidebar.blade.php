<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                @can('kades')
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/beranda') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Beranda</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/datauser') }}" aria-expanded="false"><i class="mdi fa fa-user"></i><span
                            class="hide-menu">Data User</span></a></li>
                     
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/riwayatpengaduan') }}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                            class="hide-menu">Riwayat Pengaduan</span></a></li>
                @else
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/beranda') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Beranda</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/datauser') }}" aria-expanded="false"><i class="mdi fa fa-user"></i><span
                            class="hide-menu">Data User</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/daftarpengaduan') }}" aria-expanded="false"><i class="mdi fa fa-table"></i><span
                            class="hide-menu">Daftar Pengaduan</span></a></li>
              
                <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebari-link {{ ($title == "Validasi Data") ?  'active bg-cyan' : '' }}"
                        href="{{ url('/validasipengaduan') }}" aria-expanded="false" style="pointer-events : {{ ($title == "Validasi Data") ?  '' : 'none' }}"><i class="mdi mdi-border-inside"></i><span
                            class="hide-menu">Validasi Pengaduan</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/riwayatpengaduan') }}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                            class="hide-menu">Riwayat Pengaduan</span></a></li>

               
                
                
                @endcan
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>