<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass() 
    {
        $nama = "Ucup Abdul Mustofa";
        return view('Latihan', compact('nama'));
    }
    
    public function pass1()
    {
        $gaji = 2000000;
        return view('Latihan1',['penghasilan'=>$gaji]);
    }

    public function status($status='jomblo')
    {
        return view('Latihan2',compact('status'));
    }
    public function loop()
    {
        $buku = [
            ['judul'=>'Bangkit dari remedial','penerbit'=>'erlangga',
            'harga'=>10000,'penulis'=>'Aku yang suka remedial'],

            ['judul'=>'Tips Move On','penerbit'=>'erlangga',
            'harga'=>250000,'penulis'=>'Aku si move on'],
            
            ['judul'=>'Kekuatan 1/3 Malam','penerbit'=>'erlangga',
            'harga'=>190000,'penulis'=>'Aku sipenakut']
        ];
        return view('Latihan33',compact('buku'));
    }
}
