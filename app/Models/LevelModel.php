<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    protected $table = 'm_level';      // nama tabel
    protected $primaryKey = 'level_id'; // primary key
    public $timestamps = true;

    protected $fillable = [
        'level_nama',
        'level_kode'
    ];
}
