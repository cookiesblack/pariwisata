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
            <div class="col-md-6">
                <div class="block" id="inputdata">
                    <div class="block-header block-header-default">

                        <h3 class="block-title"><button onclick="Codebase.blocks('#inputdata', 'content_toggle');">Entry
                                Data</button></h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"></button>
                        </div>
                    </div>
                    <div class="block-content">
                        {{ Form::open(['url' => route('postuser')]) }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <table width="100%">
                                        <tr>
                                            <td>Username</td>
                                            <td><input required class="form-control btn-block" type="text"
                                                    name="user_name" id="username">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tipe</td>
                                            <td><select required class="form-control" name="user_level" id="tipe">
                                                    <option value="ADMIN">ADMIN</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input required class="form-control" type="text" name="user_password"
                                                    id="password">
                                            </td>
                                        </tr>
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
                            <code>Data User</code>
                        </h3>
                    </div>
                    <div class="block-content">
                        <table class="js-table-sections table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">User name</th>>
                                    <th class="text-center">User Level</th>
                                    <th class="text-center">User Status</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $item)
                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>

                                        <td class="text-center">{{ $item->user_name }}</td>
                                        <td class="text-center">{{ $item->user_level }}</td>
                                        <td class="text-center">{{ $item->user_status }}</td>
                                        <td class="text-center"><a class="btn btn-sm btn-danger"
                                                href="{{ route('deleteuser', $item->id) }}"
                                                onclick="return confirm('Yakin akan menghapus User ini?');">Hapus</a></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- END Table Sections -->
    </div>
@endsection
