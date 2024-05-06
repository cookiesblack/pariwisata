<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Berita;
use App\Models\Wisata;
use App\Models\Kalendar;
use App\Models\Galeri;

class Dashboard extends Controller
{
    public function index()
    {
        $berita = berita::all();
        $Wisata = Wisata::all();
        $data = [
            "berita" => $berita,
            "wisata" => $Wisata,
            "title" => "Dinas Kebudayaan dan Pariwisata Minahasa",
        ];
        return view("dashboard.dashboard", $data);
    }

    public function detail($id)
    {
        $Wisata = Wisata::all();
        $berita = berita::all();
        $data = Berita::find($id);
        $data = [
            "title" => "Aplikasi Pariwisata Minahasa",
            "berita" => $berita,
            "wisata" => $Wisata,
            "data" => $data
        ];
        return view("dashboard.detail", $data);
    }

    public function wisata()
    {
        $Wisata = Wisata::all();
        $berita = Berita::all();
        $data = [
            "wisata" => $Wisata,
            "berita" => $berita,
            "title" => "Dinas Kebudayaan dan Pariwisata Minahasa",
        ];
        return view("dashboard.wisata", $data);
    }

    public function detailwisata($id)
    {
        $wisata = Wisata::all();
        $data = Wisata::find($id);
        $berita = Berita::all();
        $data = [
            "title" => "Aplikasi Pariwisata Minahasa",
            "wisata" => $wisata,
            "berita" => $berita,
            "data" => $data
        ];
        return view("dashboard.detailwisata", $data);
    }

    public function kalendar()
    {
        $Kalendar = Kalendar::all();
        $data = [
            "kalendar" => $Kalendar,
            "title" => "Dinas Kebudayaan dan Pariwisata Minahasa",
        ];
        return view("dashboard.kalendar", $data);
    }

    public function galeri()
    {
        $Galeri = Galeri::all();
        $data = [
            "galeri" => $Galeri,
            "title" => "Dinas Kebudayaan dan Pariwisata Minahasa",
        ];
        return view("dashboard.galeri", $data);
    }

    public function kontak()
    {
        $data = [
            "title" => "Dinas Kebudayaan dan Pariwisata Minahasa",
        ];
        return view("dashboard.kontak", $data);
    }


}
