<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;


class BukuController extends Controller
{
    
    public function index () {
        $buku = Buku::all();
        return view('buku.index',compact('buku'));
    }
    public function show($id) {
        $buku = Buku::find($id);
        return view('buku.show',compact('buku'));
    }
     public function hitungbuku() {
    $buku = Buku::count();
    return $buku;
    }

    public function buatdata($jdl) {
        $buku = new Buku();
        $buku->judul = $jdl;
        $buku->jumlah_halaman = 500;
        $buku->penerbit = "ir.h.dr.prf.Syahrul Erfian";
        $buku->synopsis = "Cuman hanya sebatas impian";
        $buku->status = 0 ;
        $buku->save();
        return $buku;
    }

    public function update($id,$judul) 
    {
        $buku = Buku::find($id);
        $buku->judul = $judul;
        $buku->jumlah_halaman = 100;
        $buku->penerbit = "ir.h.dr.prf.Syahrul Erfian";
        $buku->synopsis = "Cuman hanya sebatas impian";
        $buku->status = 1 ;
        $buku->save();
        return $buku;
    }
    
    public function delete($id) 
    {
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
    }
}
