<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelii extends Model
{
    protected $fillable = ['id_barangg','nama','alamat','nohp','jk'];

    public function barangg()
    {
    	return $this->belongsTo('App\Barangg');
    }
}
