<?php

use App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaji = new Gaji();
        $gaji->nip = 315486;
        $gaji->nama = 'Syahrul Erfian';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->alamat = 'Jl.Sayati Hilir';
        $gaji->jabatan = 'Manager';
        $gaji->jam_kerja = '250';
        $gaji->save();

        $gaji = new Gaji();
        $gaji->nip = 351489;
        $gaji->nama = 'Udin Petot';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->alamat = 'Jl.Kenangan';
        $gaji->jabatan = 'Sekertaris';
        $gaji->jam_kerja = '200';
        $gaji->save();
        
        $gaji = new Gaji();
        $gaji->nip = 984753;
        $gaji->nama = 'Yuriska';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = 'Gg.Sudirja';
        $gaji->jabatan = 'Staff';
        $gaji->jam_kerja = '200';
        $gaji->save();
    }
}
