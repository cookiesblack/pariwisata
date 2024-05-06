@extends('dashboard.layout.template')

@section('content')
    <div class="content">
        <div class="row invisible" data-toggle="appear">
            <!-- Row #1 -->
            @include('dashboard.buttonMenu')
            <!-- END Row #1 -->
        </div>
        <div class="row invisible" data-toggle="appear">
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

        <div class="row invisible" data-toggle="appear">
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

    </div>
@endsection
