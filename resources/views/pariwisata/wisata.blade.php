@extends('layout.template')

@section('content')
    <div class="content">
        <div class="row invisible" data-toggle="appear">
            <!-- Row #1 -->
            @include('pariwisata.buttonMenu')
            <!-- END Row #1 -->
        </div>
        <!-- END Bars -->
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <code>Input Berita</code>
                        </h3>
                    </div>
                    <div class="block-content">
                        {{ Form::open(['url' => route('post_berita'), 'files' => true]) }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <table class="js-table-sections table table-hover">
                                        <tbody>
                                            @php
                                                $kolomTanggal = ['post_date'];
                                                $kolomImage = ['post_images'];
                                            @endphp
                                            @foreach ($kolomTable as $item)
                                                <tr>
                                                    <th>{{ strtoupper($item) }}</th>
                                                    <td class="font-w600">
                                                        @if (in_array($item, $kolomImage))
                                                            <input type="file" name="{{ $item }}"
                                                                id="{{ $item }}">
                                                        @elseif (in_array($item, $kolomTanggal))
                                                            <input required class="form-control block" type="date"
                                                                name="{{ $item }}">
                                                        @elseif ($item == 'post_content')
                                                            <textarea  required class="form-control block" name="{{ $item }}" id="{{ $item }}" cols="30" rows="10"></textarea>
                                                        @else
                                                            <input required class="form-control block" type="text"
                                                                name="{{ $item }}">
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="block">
                                    <button type="submit" class="btn btn-primary btn-block text-white">Tambah</button>
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <code>Data Berita</code>
                        </h3>
                    </div>
                    <div class="block-content" style="overflow-x:auto;">
                        {{-- <table class="table table-bordered table-striped table-vcenter js-dataTable-full"> --}}
                        <div style="overflow-x:auto;">
                            <table class="js-table-sections table table-hover  table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th>No</th>

                                        @foreach ($kolomTable as $itemName)
                                            <th>{{ $itemName }}</th>
                                        @endforeach
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($berita as $key => $item)
                                        <tr>
                                            <td class="text-left">{{ $key + 1 }}</td>
                                            @foreach ($kolomTable as $itemName)
                                                @if ($itemName == 'post_image')
                                                    <td class="text-center"><a target="_blank"
                                                            href="{{ asset('') . $item->$itemName }}"><img loading="lazy"
                                                                style="max-width:200px"
                                                                src="{{ asset('') . $item->$itemName }}"
                                                                alt="{{ $item->$itemName }}"></a></td>
                                                @else
                                                    @php
                                                        $kolomTanggal = ['post_date'];
                                                    @endphp
                                                    @if (in_array($itemName, $kolomTanggal))
                                                        <td class="text-left">
                                                            {{ date('d-m-Y', strtotime($item->$itemName)) }}</td>
                                                    @else
                                                        <td class="text-left">{{ $item->$itemName }}</td>
                                                    @endif
                                                @endif
                                            @endforeach
                                            <td class="text-left"><a style="color: red"
                                                    onclick="return confirm('Yakin akan menghapus data ini?');"
                                                    href="{{ route('deleteinput', $item->id) }}"><i
                                                        class="fa fa-trash"></i></a></td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END Table Sections -->
    </div>
@endsection
