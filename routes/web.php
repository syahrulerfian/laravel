<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Buku;
use App\Penerbit;

Route::get('/', function() {
    // Return 'ahahaha'
    return Penerbit::all();
});

Route::get('html', function () {
    return 'Ini adalah halaman Utama';
});

Route::get('internet', function () {
    return 'Ini adalah halaman berita Internet';
});

Route::get('seni', function() {
    return 'Ini adalah halaman berita Seni';
});

Route::get('politik', function() {
    return 'Ini adalah halaman berita Politik';
});

Route::get('olahraga', function() {
    return 'Ini adalah halaman berita Olahraga';
});

Route::get('otomotif', function() {
    return 'Ini adalah halaman berita Otomotif';
});

Route::get('variable', function() {
    $data1 = 'Ini DATA Pertama';
    $data2 = 'Ini DATA Kedua';
    $data3 = 'Ini DATA Ketiga';
    $data4 = 'Ini DATA Keempat';
    $data5 = 'Ini DATA Kelima';

    return $data1 .'<br>'. $data2 . '<br>' . $data3 .'<br>'. $data4  ;
});

Route::get('angkot/{jurusan}/{harga}', function () {
    $jurusan = 'Cibaduyut - karang setra';
    $jurusan2 = 'Kopo - Soreang';
    $jurusan3 = 'Dago atas - IR.H.Juanda';
    $jurusan4 = 'Cangkuang - Sukamenak';
    $jurusan5 = 'Moch toha - Kebon kalapa';
    $harga1 = 'Harga 4000';
    $harga2 = 'Harga 2500';
    $harga3 = 'Harga 4500';
    $harga4 = 'Harga 2000';
    $harga5 = 'Harga 5000';
    $angkot = 'Angkot jurusan : ';
    return $angkot . ' ' . $jurusan . ' , '.$harga1 .'<br>' .
    $angkot . ' ' . $jurusan2 . ' , ' .$harga2 .'<br>' .
    $angkot . ' ' . $jurusan3 . ' , ' .$harga3 .'<br>' .
    $angkot . ' ' . $jurusan4 . ' , ' .$harga4 .'<br>' .
    $angkot . ' ' . $jurusan5 . ' , ' .$harga5 ;
});

Route::get('user/{nama}/{alamat}/{nomor}', function ($nama, $alamat, $nomor) {
    return 'Hallo ' . $nama . ' Yang Beralamat di ' . $alamat . ' Nomor ' . $nomor;
});

Route::get('siswa/{nama}/{nilai?}', function ($nama, $nilai ='Anda Belum Memasukan Nilai') {
   $grade = '';
    if ($nilai >= 50) {
        $grade = 'Grade Anda  : A';
    }
     elseif ($nilai <= 50 && $nilai >= 40) {
        $grade = 'Grade Anda  : B';
    }
     elseif ($nilai <= 40 && $nilai >= 30) {
        $grade = 'Grade Anda : C';
    }
     elseif ($nilai <= 30 && $nilai >= 20  ) {
        $grade = 'Grade anda : D';
    }
     elseif ($nilai <= 10 && $nilai >= 0) {
        $grade = 'Grade Anda : E';
    }
    else $grade = 'Tidak Mendapatkan Grade';

    

    
    
    return 'Hallo :' . $nama .'<br>' .' Nilai Anda : ' . $nilai .'<br>' .' Dan ' . $grade;
});