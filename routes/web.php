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

use App\Siswa;
use App\Buku;
use App\Penerbit;
use App\Gaji;



Route::get('/', function() {
    // Return 'ahahaha'
return Buku::all();
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


Route::get('contoh', 'ContohController@latihan');
Route::get('profil2', 'ContohController@latihan3');
Route::get('profil3', 'ContohController@latihan4');
Route::get('menu/{makan}', 'ContohController@menu');
Route::get('pesan/{makan?}/{minuman?}/{harga?}',('ContohController@pesan'));

Route::get('biodata', 'BiodataController@datadiri');

//CRUD buku
Route::get('get-buku', 'BukuController@index');
Route::get('data/{jdl}', 'BukuController@buatdata');
Route::get('get-buku/{id}', 'BukuController@show');
Route::get('delete-buku/{id}', 'BukuController@delete');
Route::get('update-buku/{id}/{judul}', 'BukuController@update');

Route::get('hitung-buku','BukuController@hitungbuku');

//CRUD Siswa

Route::get('get-siswa', 'SiswaController@index');
Route::get('data/{nama}/{nis}/{tgl}', 'SiswaController@buatdata');
Route::get('get-siswa/{id}', 'SiswaController@show');
Route::get('delete-siswa/{id}', 'SiswaController@delete');
Route::get('update-siswa/{id}/{nama}/{nis}/{tgl}', 'SiswaController@update');


//passing data
Route::get('pass','PracticeController@pass');
Route::get('pass1','PracticeController@pass1');
Route::get('status/{a?}','PracticeController@status');
Route::get('buku','PracticeController@loop');

//book
Route::get('book','BukuController@index');
Route::get('book/{id}','BukuController@show');

//gaji
Route::get('pay','GajiController@index');
Route::get('pay/{id}','GajiController@show');

//Belajar Blade Templating
Route::get('/profile',function()
{
    return view('profile');
});

Route::get('/kontak',function()
{
    return view('kontak');
});
Route::get('/blog',function()
{
    return view('blog');
});

#relasi
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;


//Mahasiswa
Route::get('relasi-1', function() {

    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    return $mahasiswa->wali->nama;

});

Route::get('relasi-2', function() {

    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    return $mahasiswa->dosen->nama;

});

Route::get('relasi-3', function() {

    # Mencari data dosenyang bernama Yulianto
    $dosen = Dosen::where('nama', '=', 'Abdul Musthofa')->first();

    # Tampilkan seluruh data mahasiswa didikannya
    foreach ($dosen->mahasiswa as $temp)
        echo '<li> Nama : ' . $temp->nama .
        '<strong>' . $temp->nim . '</strong></li>';

});

Route::get('relasi-4', function() {

    # Mencari Data Mahasiswa yang bernama Noviyanto Rachmadi
    $novay = Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();

    # Menampilkan seluruh hobi si novay
    foreach ($novay->hobi as $temp)
    echo '<li>' . $temp->hobi . '</li>';

});

Route::get('relasi-5', function() {

    # Mencari Data Mahasiswa yang berhobi mandi hujan
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();

    # Menampilkan semua mahasiswa yang mempunyai hobi mandi hujan
    foreach ($mandi_hujan->mahasiswa as $temp)
    echo '<li> Nama : ' . $temp->nama .
    '<strong> ' . $temp->nim . '</strong></li>';

});

Route::get('eloquent', function (){
    $data = Mahasiswa::with('wali','dosen','hobi')->get();
    return view ('eloquent',compact('data'));
});
