@extends('dashboard.layout.template')

@section('content')
    <div class="content">
        <div class="row invisible" data-toggle="appear">
            <!-- Row #1 -->
            @include('dashboard.buttonMenu')
            <!-- END Row #1 -->
        </div>
        <div class="row invisible" data-toggle="appear" style="display: none">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-content block-content-full">
                        <div class="pull-all">
                            <img src="{{ asset('assets') }}/depan.jpg" style="width: 100%" alt="">
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row items-push">
                            <div class="col-6 col-sm-4 text-center text-sm-left">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Tarian Kabasaran dari Minahasa
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Row #2 -->
        </div>


        <h2 class="content-heading">Galeri <small>Foto</small></h2>
        <div class="row items-push js-gallery img-fluid-100">
            @foreach ($galeri as $row)
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{ asset('') . $row->image }}">
                    <img class="img-fluid" src="{{ asset('') . $row->image }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
        <!-- END Simple Gallery -->

    </div>
@endsection
