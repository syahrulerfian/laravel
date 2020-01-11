<?php

use App\Penerbit;
use Illuminate\Database\Seeder;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penerbit = new Penerbit();
        $penerbit->nama_penerbit = 'Syahrul Erfian';
        $penerbit->judul_buku = 'Kisah Tanah Jawa';
        $penerbit->jumlah_buku = 50;
        $penerbit->save();
    }
}
