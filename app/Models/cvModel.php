<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cvModel extends Model
{
    protected $table = 'cv';
    protected $primaryKey = 'cv_id';
    protected $fillable = [
        'nama',
        'tentang_saya',
        'pendidikan',
        'pengalaman_kerja',
    ];
}
