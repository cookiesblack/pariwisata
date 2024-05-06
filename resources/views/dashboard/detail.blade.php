@extends('dashboard.layout.template')

@section('content')
    <div class="content">
        <div class="row invisible" data-toggle="appear">
            <!-- Row #1 -->
            @include('dashboard.buttonMenu')
            <!-- END Row #1 -->
        </div>
        <div class="row invisible" data-toggle="appear" style="display: none">
            <!-- Row #3 -->
            <div class="col-md-4">
                <div class="block">
                    <div class="block-content block-content-full">
                        <div class="py-20 text-center">
                            <div class="mb-20">
                                <i class="fa fa-envelope-open fa-4x text-primary"></i>
                            </div>
                            <div class="font-size-h4 font-w600">Kontak Email</div>
                            <div class="text-muted">dinpar@minahasa.go.id</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <div class="block-content block-content-full">
                        <div class="py-20 text-center">
                            <div class="mb-20">
                                <i class="fa fa-twitter fa-4x text-info"></i>
                            </div>
                            <div class="font-size-h4 font-w600">Twitter</div>
                            <div class="text-muted">@dinpar_minahasa</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <div class="block-content block-content-full">
                        <div class="py-20 text-center">
                            <div class="mb-20">
                                <i class="fa fa-phone fa-4x text-success"></i>
                            </div>
                            <div class="font-size-h4 font-w600">Telepon</div>
                            <div class="text-muted">0431 - 312332</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Row #3 -->
        </div>
        <div class="row items-push py-30">
            <!-- Posts -->
            <div class="col-xl-8">
                <div class="mb-50">

                    <h3 class="h4 font-w700 mb-5">{{ $data->post_title }}</h3>
                    <div class="overflow-hidden rounded mb-20">
                        <a class="img-link" href="#">
                            <img class="img-fluid" loading="lazy" src="{{ asset('') . $data->post_images }}"
                                alt="{{ $data->post_images }}">
                        </a>
                    </div>
                    <div class="text-muted mb-10">
                        <span class="mr-15">
                            <i class="fa fa-fw fa-calendar mr-5"></i>{{ $data->created_at }}
                        </span>
                        <a class="text-muted mr-15" href="#">
                            <i class="fa fa-fw fa-user mr-5"></i>Admin
                        </a>
                    </div>
                    <p>{{ $data->post_content }}</p>
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
                        <h3 class="block-title text-uppercase" style="border-bottom: 2px solid gray">Daftar Tempat Wisata</h3>
                    </div>
                    <div class="block-content">
                        @foreach ($wisata as $row)
                            <a href="{{ route('dashboard/detailwisata', $row->id) }}">
                                <div class="media mb-10">
                                    <img style="width: 70px" class="mr-10" src="{{ url(''). '/'.  $row->gambar }}"
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
                                    <img style="width: 70px" class="mt-5 mr-10"
                                    src="{{url(''). '/'. $row->post_images }}" alt="">
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

    </div>
@endsection
