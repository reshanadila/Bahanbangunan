<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangg extends Model
{
    protected $fillable = ['nama','merk','ukuran','harga'];

    public function pembeliis()
    {
    	return $this->hasMany('App\pembelii');
    }
}
