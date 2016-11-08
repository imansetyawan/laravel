<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Artikel extends Model implements SluggableInterface
{
	use SluggableTrait;
    protected $table = 'artikel';
	protected $sluggable = [
	    'build_from' => 'judulartikel',
	    'save_to'    => 'slug',
	];

    public function kategori() {
    	return $this->belongsTo('App\Kategori');
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
