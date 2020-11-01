<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table = 'spps';

    public function kelas(){
        return $this->belongsTo('App\Kelas');
    }

}
