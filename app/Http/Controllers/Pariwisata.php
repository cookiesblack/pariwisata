<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Wisata;
use App\Models\Kalendar;
use App\Models\Galeri;
use App\Models\users;


class Pariwisata extends Controller
{
    public function __construct()
    {
    }


    public function index()
    {
        if (empty(session('tipe'))) {
            return redirect()->route('login');
        }
        
        $data = [
            "title" => "Dinas Pariwisata dan Kebudayaan Minahasa",

            // "dataStunting" => $dataStunting
        ];
        return view("pariwisata.dashboard", $data);
    }

    public function berita()
    {
        $kolom = "post_title, post_content, post_images, post_date";
        $kolomCaption = "Judul Berita, Isi Berita, Gambar, Tanggal, user_id";
        $berita = Berita::all();
        $data = [
            "title" => "Aplikasi Pariwisata Minahasa",
            "data" => $berita,
            "kolomTable" => explode(', ', $kolom),
            "kolomCaption" => explode(', ', $kolomCaption),
            "post" => "post_berita",
            "delete" => "deleteinput",
            "image" => "post_images"
        ];
        return view("pariwisata.berita", $data);
    }


    public function post_berita(Request $request)
    {
        $kolom = "post_title, post_content, post_images, post_date, user_id";
        $kolomTable = explode(', ', $kolom);
        $data = array();
        $berita = new Berita();
        foreach ($kolomTable as $key => $value) {
            if ($value == 'user_id') {
                $berita->$value = session('id');
            } elseif ($value == 'post_images') {
                // $foto_kunjungan = $request->file('post_image');

                if ($request->hasFile('post_images')) {
                    $image = $request->file('post_images');
                    $post_image = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload_manual');
                    $image->move('upload_manual', $post_image);
                }

                if (!empty($post_image)) {
                    $valueCell = 'upload_manual/' . $post_image;
                    $berita->$value = empty($valueCell) == true ? "-" : $valueCell;
                }
            } elseif ($value == 'post_date') {
                $valueCell = date('Y-m-d', strtotime($request->$value));
                $berita->$value = empty($valueCell) == true ? "-" : $valueCell;
            } else {
                $valueCell = $request->$value;
                $berita->$value = empty($valueCell) == true ? "-" : $valueCell;
            }
        }
        $berita->save();

        return back()->withSuccess('Great! Data has been successfully uploaded.');
    }
    public function deleteinput($id)
    {
        $datainput = Berita::find($id);
        $datainput->delete();
        return redirect()->route('berita');
    }

    public function wisata()
    {
        $kolom = "nama_lokasi, garis_lintang, garis_bujur, informasi, gambar";
        $kolomCaption = "Lokasi Wisata, Garis Lintang, Garis Bujur, Informasi, Gambar";
        $Wisata = Wisata::all();
        $data = [
            "title" => "Aplikasi Pariwisata Minahasa",
            "data" => $Wisata,
            "kolomTable" => explode(', ', $kolom),
            "kolomCaption" => explode(', ', $kolomCaption),
            "post" => "post_wisata",
            "delete" => "deletewisata",
            "image" => "gambar"
        ];
        return view("pariwisata.berita", $data);
    }

    public function post_wisata(Request $request)
    {
        $kolom = "nama_lokasi, garis_lintang, garis_bujur, informasi, gambar, user_id";
        $kolomTable = explode(', ', $kolom);

        $Wisata = new Wisata();
        foreach ($kolomTable as $key => $value) {
            if ($value == 'user_id') {
                $Wisata->$value = session('id');
            } elseif ($value == 'gambar') {
                if ($request->hasFile('gambar')) {
                    $image = $request->file('gambar');
                    $post_image = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload_manual');
                    $image->move('upload_manual', $post_image);
                }

                if (!empty($post_image)) {
                    $valueCell = 'upload_manual/' . $post_image;
                    $Wisata->$value = empty($valueCell) == true ? "-" : $valueCell;
                }
            } else {
                $valueCell = $request->$value;
                $Wisata->$value = empty($valueCell) == true ? "-" : $valueCell;
            }
        }
        $Wisata->save();

        return back()->withSuccess('Great! Data has been successfully uploaded.');
    }
    public function deletewisata($id)
    {
        $datainput = Wisata::find($id);
        $datainput->delete();
        return redirect()->route('wisata');
    }

    public function kalendar()
    {
        $kolom = "title, start, end";
        $kolomCaption = "Judul Kegiatan, Tanggal Mulai, Tanggal Selesai";
        $Kalendar = Kalendar::all();
        $data = [
            "title" => "Aplikasi Pariwisata Minahasa",
            "data" => $Kalendar,
            "kolomTable" => explode(', ', $kolom),
            "kolomCaption" => explode(', ', $kolomCaption),
            "post" => "post_kalendar",
            "delete" => "deletekalendar",
            "image" => "gambar"
        ];
        return view("pariwisata.berita", $data);
    }

    public function post_kalendar(Request $request)
    {
        $kolom = "title, start, end";
        $kolomTable = explode(', ', $kolom);
        $kolomTanggal = ['start', 'end'];

        $Kalendar = new Kalendar();
        foreach ($kolomTable as $key => $value) {
            if ($value == 'user_id') {
                $Kalendar->$value = session('id');
            } elseif ($value == 'gambar') {
                if ($request->hasFile('gambar')) {
                    $image = $request->file('gambar');
                    $post_image = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload_manual');
                    $image->move('upload_manual', $post_image);
                }

                if (!empty($post_image)) {
                    $valueCell = 'upload_manual/' . $post_image;
                    $Kalendar->$value = empty($valueCell) == true ? "-" : $valueCell;
                }
            } elseif (in_array($value, $kolomTanggal)) {
                $valueCell = date('Y-m-d', strtotime($request->$value));
                $Kalendar->$value = empty($valueCell) == true ? "-" : $valueCell;
            } else {
                $valueCell = $request->$value;
                $Kalendar->$value = empty($valueCell) == true ? "-" : $valueCell;
            }
        }
        $Kalendar->save();

        return back()->withSuccess('Great! Data has been successfully uploaded.');
    }
    public function deletekalendar($id)
    {
        $datainput = Kalendar::find($id);
        $datainput->delete();
        return redirect()->route('kalendar');
    }

    public function galeri()
    {
        $kolom = "title, image";
        $kolomCaption = "Judul, Gambar";
        $Galeri = Galeri::all();
        $data = [
            "title" => "Aplikasi Pariwisata Minahasa",
            "data" => $Galeri,
            "kolomTable" => explode(', ', $kolom),
            "kolomCaption" => explode(', ', $kolomCaption),
            "post" => "post_galeri",
            "delete" => "deletegaleri",
            "image" => "image"
        ];
        return view("pariwisata.berita", $data);
    }

    public function post_galeri(Request $request)
    {
        $kolom = "title, image";
        $kolomTable = explode(', ', $kolom);
        $kolomTanggal = [];

        $Kalendar = new Galeri();
        foreach ($kolomTable as $key => $value) {
            if ($value == 'user_id') {
                $Kalendar->$value = session('id');
            } elseif ($value == 'image') {
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $post_image = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload_manual');
                    $image->move('upload_manual', $post_image);
                }

                if (!empty($post_image)) {
                    $valueCell = 'upload_manual/' . $post_image;
                    $Kalendar->$value = empty($valueCell) == true ? "-" : $valueCell;
                }
            } elseif (in_array($value, $kolomTanggal)) {
                $valueCell = date('Y-m-d', strtotime($request->$value));
                $Kalendar->$value = empty($valueCell) == true ? "-" : $valueCell;
            } else {
                $valueCell = $request->$value;
                $Kalendar->$value = empty($valueCell) == true ? "-" : $valueCell;
            }
        }
        $Kalendar->save();

        return back()->withSuccess('Great! Data has been successfully uploaded.');
    }
    public function deletegaleri($id)
    {
        /*
        if (empty(session('user_level'))) {
            return redirect()->route('login');
        }
*/
        $datainput = Galeri::find($id);
        $datainput->delete();
        return redirect()->route('galeri');
    }
    public function users()
    {
        $users = users::all();
        $data = [
            "title" => "Dinas Pariwisata dan Kebudayaan Minahasa",
            "users" => $users,
        ];
        return view("pariwisata.users", $data);
    }

    public function postuser(Request $request)
    {
        $users = new users();
        $users->user_name = $request->user_name;
        $users->user_status = "AKTIF";
        $users->user_level = $request->user_level;
        $users->user_password = $request->user_password;
        $users->save();

        return redirect()->route('users');
    }
    public function deleteuser($id)
    {
        $users = users::find($id);
        $users->delete();
        return redirect()->route('users');
    }
}
