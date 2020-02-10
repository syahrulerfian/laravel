<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function latihan() {
        return 'Ini Contoh Latihan Controller';
    }

    public function latihan2() {
        $a ='Syahrul' ;
        $b = 'Erfian' ; 

        return 'Nama Saya Adalah ' .$a. ' ' .$b;
    }

    public function latihan3() {
        $a = "Dadang Conelo";

        return view('test', compact('a'));
    }

    public function latihan4() {
        $a = "Aceng Pilek";
        return view('test2' , ['nama' => $a]);
    } 
    
    public function menu ($a) {

        return view('menu', compact('a'));

    }

    public function pesan ($a = null,$b=null,$c=null ) 
            {
            if(isset($a)) {
                $a = "Anda Memesan " . $a;
            }
            if(isset($b)) {
                $b = " & " . $b;
            }
            if(isset($c)) {

            if ($c >= 25000) {
                $c = ", Paket Jumbo";
            } 
             elseif ($c < 25000 && $c > 15000 ) {
                 $c = ", Paket Medium";
            }
             elseif ($c <= 15000 && $c > 0 ) {
                 $c = ", Paket Small";
            }
            else $c = ", Harga Tidak Valid";

            }
            if(!isset($a)) 
            {
                $a = "Anda Belum Memesan Sesuatu";
            }
        return view('pesan', compact('a','b','c'));

    }
    
}
