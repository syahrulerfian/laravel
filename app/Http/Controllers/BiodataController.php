<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function datadiri() {
        $nama ='Syahrul Erfian' ;
        $agama = 'ISLAM' ;
        $jk ='Laki-Laki' ;
        $alamat ='Jl.Sayati Hilir' ;
        $sekolah = 'SMK ASSALAAM';
        $kelas = 'XI RPL 3';
        $jurusan = 'RPL(Rekayasa Perangkat Lunak)';
        $hobi = 'Renang';
        $umur = '16 Tahun';

        return view('biodata' , ['a' => $nama , 'b' =>$agama , 'c' => $jk , 'd' =>$alamat , 'e' => $sekolah ,
         'f' =>$kelas , 'g' => $jurusan , 'h' => $hobi , 'i' =>$umur]);
         

        
    }


}
