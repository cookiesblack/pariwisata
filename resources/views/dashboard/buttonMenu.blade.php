@php
    $activeMenu = request()->segment(count(request()->segments()));
@endphp
<div class="col-12" class="text-center" style="height: 100px;{{ $activeMenu == 'dashboard' ? 'display: none' : '' }}">
    <img height="80px" src="{{ asset('minahasa.png') }}" alt="">
</div>
<!-- Row #5 -->
<div class="col-6 col-md-4 col-xl-2">
    <a class="block block-link-shadow text-center" href="{{ route('dashboard') }}">
        <div
            class="block-content ribbon ribbon-bookmark ribbon-danger ribbon-left {{ $activeMenu == 'dashboard' ? 'btn-danger' : '' }}">
            <p class="mt-5">
                <i class="si si-home fa-3x"></i>
            </p>
            <p class="font-w600">Dashboard</p>
        </div>
    </a>
</div>
<div class="col-6 col-md-4 col-xl-2">
    <a class="block block-link-shadow text-center" href="{{ route('dashboard/wisata') }}">
        <div class="block-content {{ $activeMenu == 'wisata' ? 'btn-danger' : '' }}">
            <p class="mt-5">
                <i class="si si-flag fa-3x"></i>
            </p>
            <p class="font-w600">Wisata</p>
        </div>
    </a>
</div>
<div class="col-6 col-md-4 col-xl-2">
    <a class="block block-link-shadow text-center" href="{{ route('dashboard/kalendar') }}">
        <div class="block-content {{ $activeMenu == 'kalendar' ? 'btn-danger' : '' }}">
            <p class="mt-5">
                <i class="si si-calendar fa-3x"></i>
            </p>
            <p class="font-w600">Kalendar</p>
        </div>
    </a>
</div>
<div class="col-6 col-md-4 col-xl-2">
    <a class="block block-link-shadow text-center" href="{{ route('dashboard/galeri') }}">
        <div class="block-content {{ $activeMenu == 'galeri' ? 'btn-danger' : '' }}">
            <p class="mt-5">
                <i class="si si-camera fa-3x"></i>
            </p>
            <p class="font-w600">Galeri</p>
        </div>
    </a>
</div>
<div class="col-6 col-md-4 col-xl-2">
    <a class="block block-link-shadow text-center" href="{{ route('dashboard/kontak') }}">
        <div class="block-content {{ $activeMenu == 'kontak' ? 'btn-danger' : '' }}">
            <p class="mt-5">
                <i class="si si-phone fa-3x"></i>
            </p>
            <p class="font-w600">Hubungi Kami</p>
        </div>
    </a>
</div>
<div class="col-6 col-md-4 col-xl-2">
    <a class="block block-link-shadow text-center" href="{{ route('login') }}">
        <div class="block-content">
            <p class="mt-5">
                <i class="si si-settings fa-3x"></i>
            </p>
            <p class="font-w600">Login</p>
        </div>
    </a>
</div>
<!-- END Row #5 -->
