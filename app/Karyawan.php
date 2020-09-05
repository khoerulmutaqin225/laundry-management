<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user', 'alamat', 'telephone', 'gender'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
