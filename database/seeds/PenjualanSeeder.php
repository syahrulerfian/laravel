<?php

use App\Penjualan;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jual = new Penjualan();
        $jual->judul_buku = 'Sword Art Online';
        $jual->tipe_buku = 'Novel';
        $jual->jumlah_buku = 5;
        $jual->tanggal_penjualan = '28-05-2020';
        $jual->status = 1;
        $jual->save();
    }
}
