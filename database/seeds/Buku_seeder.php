<?php

use App\Buku;
use Illuminate\Database\Seeder;

class Buku_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = new Buku();
        $buku->judul = 'Belajar PHP ';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar PHP 1';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar PHP 2';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar PHP 3';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar PHP 4';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar PHP 5';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar PHP 6';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar PHP 7';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar PHP 8';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar PHP 9';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar PHP 10';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini Adalah...';
        $buku->status = 1;
        $buku->save();
    }
}
