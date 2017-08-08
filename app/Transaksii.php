<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksii extends Model
{
    protected $fillable = ['id_barangg','id_pembelii'];

     public function barangg()
    {
    	return $this->belongsToMany('App\Barangg');
    }

     public function pembelii()
    {
    	return $this->belongsToMany('App\Pembelii');
    }
}
