@extends('dashboard.layout.template')

@section('content')
    <div class="content">
        <div class="row invisible" data-toggle="appear">
            <!-- Row #1 -->
            @include('dashboard.buttonMenu')
            <!-- END Row #1 -->
        </div>
        <!-- END Bars -->
        <!-- Blog and Sidebar -->

        <div class="row items-push py-30">
            <!-- Posts -->
            <div class="col-xl-8">
                <div class="mb-50">
                    <div class="text-muted mb-10">
                        <h3 class="h4 font-w700 mb-5">{{ $data->nama_lokasi }}</h3>

                        <span class="mr-15">
                            <i class="fa fa-fw fa-calendar mr-5"></i>Di input pada {{ $data->created_at }}
                        </span>
                        <a class="text-muted mr-15" href="#">
                            <i class="fa fa-fw fa-user mr-5"></i>Oleh Admin
                        </a>
                    </div>
                    <img style="width: 100%; border-radius: 15px" class="img-fluid" loading="lazy"
                        src="{{ asset('') . $data->gambar }}" alt="{{ $data->gambar }}">
                    <br>
                    <br>
                    <br>

                    <p><?= $data->informasi ?></p>
                    <hr>
                    <div class="overflow-hidden rounded mb-20" style="">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0"
                                    scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q={{ $data->garis_lintang }},{{ $data->garis_bujur }}&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                    href="https://gachanymph.com/">Gacha Nymph</a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 100%;
                                    height: 400px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 100%;
                                    height: 400px;
                                }

                                .gmap_iframe {
                                    height: 400px !important;
                                }
                            </style>
                        </div>




                    </div>
                </div>

                {{-- <nav class="clearfix push">
                    <a class="btn btn-secondary min-width-100 float-right" href="javascript:void(0)">
                        Next <i class="fa fa-arrow-right ml-5"></i>
                    </a>
                    <a class="btn btn-secondary min-width-100 float-left" href="javascript:void(0)">
                        <i class="fa fa-arrow-left mr-5"></i> Prev
                    </a>
                </nav> --}}
                <hr class="d-xl-none">
            </div>
            <!-- END Posts -->

            <!-- Sidebar -->
            <div class="col-xl-4">
                <!-- Twitter Feed -->
                <div class="block block-transparent">
                    <div class="block-header">
                        <h3 class="block-title text-uppercase" style="border-bottom: 2px solid gray">Daftar Tempat Wisata
                        </h3>
                    </div>
                    <div class="block-content">
                        @foreach ($wisata as $row)
                            <a href="{{ route('dashboard/detailwisata', $row->id) }}">
                                <div class="media mb-10">
                                    <img style="width: 70px" class="mr-10" src="{{ url('') . '/' . $row->gambar }}"
                                        alt="">
                                    <div class="media-body">
                                        <p class="mb-5"><strong>{{ $row->nama_lokasi }}</strong></p>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
                <!-- END Twitter Feed -->
                <!-- Twitter Feed -->

                <div class="block block-transparent">
                    <div class="block-header">
                        <h3 class="block-title text-uppercase" style="border-bottom: 2px solid gray">Berita Terbaru</h3>
                    </div>
                    <div class="block-content">
                        @foreach ($berita as $row)
                            <a href="{{ route('dashboard/detail', $row->id) }}">
                                <div class="media mb-20">
                                    <img style="width: 70px" class="mt-5 mr-10" src="{{ url('') . '/' . $row->post_images }}"
                                        alt="">
                                    <div class="media-body">
                                        <p class="mb-5" style="text-align: justify">{{ $row->post_title }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
                <!-- END Twitter Feed -->



            </div>
            <!-- END Sidebar -->

        </div>

        <!-- END Blog and Sidebar -->


        <!-- END Table Sections -->
    </div>
@endsection
