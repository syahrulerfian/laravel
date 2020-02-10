<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{

	protected $fillable = array('nama', 'id_mahasiswa');
	public $timestamps = true;

	public function mahasiswa() {
		return $this->belongsTo('Mahasiswa', 'id_mahasiswa');
	}
}
