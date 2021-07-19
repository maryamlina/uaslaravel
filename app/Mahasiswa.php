<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table    = 'mahasiswa';
    protected $fillable = ['user_id', 'Npm', 'Tempat_lahir', 'tgl_lahir', 'gender', 'telepon', 'alamat'];
    public $timestamps  = false;


    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
 

}
