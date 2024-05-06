 @php
     $activeMenu = request()->segment(count(request()->segments()));
 @endphp

 <!-- Row #5 -->
 <div class="col-md-12">
    <div class="block">
        <div class="block-content block-content-full">
            <div class="pull-all">
                <img src="{{ asset('assets') }}/admin.jpg" style="width: 100%" alt="">
            </div>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-6 col-sm-4 text-center text-sm-left">
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Selamat datang, </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-6 col-md-4 col-xl-2">
    <a class="block block-link-shadow text-center" href="{{ route('berita') }}">
        <div class="block-content {{ $activeMenu == 'berita' ? 'btn-danger' : '' }}"">
            <p class="mt-5">
                <i class="si si-note fa-3x"></i>
            </p>
            <p class="font-w600">Berita</p>
        </div>
    </a>
</div>
 <div class="col-6 col-md-4 col-xl-2">
     <a class="block block-link-shadow text-center" href="{{ route('wisata') }}">
         <div class="block-content {{ $activeMenu == 'wisata' ? 'btn-danger' : '' }}"">
             <p class="mt-5">
                 <i class="si si-flag fa-3x"></i>
             </p>
             <p class="font-w600">Wisata</p>
         </div>
     </a>
 </div>
 <div class="col-6 col-md-4 col-xl-2">
     <a class="block block-link-shadow text-center" href="{{ route('kalendar') }}">
         <div class="block-content {{ $activeMenu == 'kalendar' ? 'btn-danger' : '' }}"">
             <p class="mt-5">
                 <i class="si si-calendar fa-3x"></i>
             </p>
             <p class="font-w600">Kalendar</p>
         </div>
     </a>
 </div>
 <div class="col-6 col-md-4 col-xl-2">
     <a class="block block-link-shadow text-center" href="{{ route('galeri') }}">
         <div class="block-content {{ $activeMenu == 'galeri' ? 'btn-danger' : '' }}">
             <p class="mt-5">
                 <i class="si si-camera fa-3x"></i>
             </p>
             <p class="font-w600">Galeri</p>
         </div>
     </a>
 </div>
 <!-- END Row #5 -->


 {{--
<!-- Row #1 -->

<div class="col-md-6 col-xs-12 col-xl-3">
    <a class="block block-link-shadow text-right" href="{{ route('pariwisata') }}">
        <div class="block-content block-content-full clearfix {{ $activeMenu == 'pariwisata' ? 'btn-success' : '' }}">
            <div class="float-left mt-10 d-none d-sm-block">
                <i class="fa fa-book fa-3x text-body-bg-dark"></i>
            </div>
            <div class="font-size-sm font-w600 text-uppercase"><b>Dashboard</b></div>
            <div class="font-size-sm font-w600 text-uppercase text-muted">Data Statistik</div>
        </div>
    </a>
</div>
<div class="col-md-6 col-xs-12 col-xl-3">
    <a class="block block-link-shadow text-right" href="{{ route('profil') }}">
        <div class="block-content block-content-full clearfix {{ $activeMenu == 'profil' ? 'btn-success' : '' }}">
            <div class="float-left mt-10 d-none d-sm-block">
                <i class="fa fa-group fa-3x text-body-bg-dark"></i>
            </div>
            <div class="font-size-sm font-w600 text-uppercase"><b>Profil Balita</b></div>
            <div class="font-size-sm font-w600 text-uppercase text-white">dan Tindak Lanjut</div>
        </div>
    </a>
</div>
{{-- <div class="col-md-6 col-xs-12 col-xl-3">
    <a class="block block-link-shadow text-right" href="{{ route('geospasial') }}">
        <div class="block-content block-content-full clearfix {{ $activeMenu == 'geospasial' ? 'btn-success' : '' }}">
            <div class="float-left mt-10 d-none d-sm-block">
                <i class="fa fa-globe fa-3x text-body-bg-dark"></i>
            </div>
            <div class="font-size-sm font-w600 text-uppercase"><b>Peta Geospasial</b></div>
            <div class="font-size-sm font-w600 text-uppercase text-muted">Bayi Stunting</div>
        </div>
    </a>
</div> 
<div class="col-md-6 col-xs-12 col-xl-3">
    <a class="block block-link-shadow text-right" href="{{ route('berita') }}">
        <div class="block-content block-content-full clearfix {{ $activeMenu == 'inputdataumumfisik' ? 'btn-success' : '' }}">
            <div class="float-left mt-10 d-none d-sm-block">
                <i class="fa fa-plus fa-3x text-body-bg-dark"></i>
            </div>
            <div class="font-size-sm font-w600 text-uppercase"><b>Input Manual</b></div>
        </div>
    </a>
</div>
<div class="col-md-6 col-xs-12 col-xl-3">
    <a class="block block-link-shadow text-right" href="{{ route('infrastruktur') }}">
        <div class="block-content block-content-full clearfix {{ $activeMenu == 'infrastruktur' ? 'btn-success' : '' }}">
            <div class="float-left mt-10 d-none d-sm-block">
                <i class="fa fa-building fa-3x text-body-bg-dark"></i>
            </div>
            <div class="font-size-sm font-w600 text-uppercase"><b>Data Infrastruktur</b></div>
            <div class="font-size-sm font-w600 text-uppercase text-white">Pelayanan Dasar</div>
        </div>
    </a>
</div>
 --}}
