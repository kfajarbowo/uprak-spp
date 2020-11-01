<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas','jurusan'];

    public function spp(){
        return $this->hasMany('App\Spp');
    }
}
