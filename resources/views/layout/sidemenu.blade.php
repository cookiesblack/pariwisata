            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="#">
                                    <img src="{{asset("minahasa.png")}}" alt="" style="height: 100%">
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="{{ asset('assets') }}/media/avatars/avatar15.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="#">
                                <img class="img-avatar" src="{{ asset('assets') }}/media/avatars/avatar15.jpg" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#">{{session('name')}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="si si-drop"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="{{route('logout')}}">
                                        <i class="si si-logout"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a class="active" href="{{ route('pariwisata') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">Data</span><span class="sidebar-mini-hidden">Data</span></li>

                            <li {{ (session('tipe')!='ADMIN'?"hidden":"")}}>
                                <a class="active" href="{{ route('berita') }}"><i class="fa fa-file-excel-o"></i><span class="sidebar-mini-hide">Input Berita</span></a>
                            </li>
                            <li {{ (session('tipe')!='ADMIN'?"hidden":"")}}>
                                <a class="active" href="{{ route('wisata') }}"><i class="fa fa-file-excel-o"></i><span class="sidebar-mini-hide">Input Wisata</span></a>
                            </li>
                            <li {{ (session('tipe')!='ADMIN'?"hidden":"")}}>
                                <a class="active" href="{{ route('kalendar') }}"><i class="fa fa-file-excel-o"></i><span class="sidebar-mini-hide">Input Kalender</span></a>
                            </li>
                            <li {{ (session('tipe')!='ADMIN'?"hidden":"")}}>
                                <a class="active" href="{{ route('galeri') }}"><i class="fa fa-file-excel-o"></i><span class="sidebar-mini-hide">Input Galeri</span></a>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">Pengaturan</span><span class="sidebar-mini-hidden">Pengaturan</span></li>
                            <li {{ (session('tipe')!='ADMIN'?"hidden":"")}}>
                                <a class="active" href="{{ route('users') }}"><i class="si si-user"></i><span class="sidebar-mini-hide">Manajemen Pengguna</span></a>
                            </li>
                            <li>
                                <a class="active" href="{{ route('logout') }}"><i class="si si-logout"></i><span class="sidebar-mini-hide">Keluar</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>