<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table    = 'nilai';
    protected $fillable = ['makul_id', 'mahasiswa_id', 'nilai'];
    public $timestamps  = false;


    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
 

}
