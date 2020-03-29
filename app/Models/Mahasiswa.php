<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    
    protected $table = 'students';

    protected $fillable = [
        'name','nim','email','jurusan'
    ];

    protected $hidden = [

    ];

}
