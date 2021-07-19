<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    protected $table    = 'makul';
    protected $fillable = ['kd_matkul', 'nama_matkul', 'sks'];
    public $timestamps  = false;


    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
 

}
