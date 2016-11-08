<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndukKategori extends Model
{
    protected $table = 'induk_kategori';

    public function kategori() {
    	return $this->hasMany('App\Kategori');
    }
}
