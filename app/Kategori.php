<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Kategori extends Model implements SluggableInterface
{
    use SluggableTrait;
    protected $table = 'kategori';
    
    protected $sluggable = [
        'build_from' => 'namakategori',
        'save_to'    => 'slug',
    ];

    public function artikel() {
    	return $this->hasMany('App\Artikel');
    }

    public function indukkategori() {
    	return $this->belongsTo('App\IndukKategori');
    }
}
