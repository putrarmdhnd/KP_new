<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nik';

    public function siswa_apl2()
    {
        return $this->hasOne(PilihAssesor::class, 'nik', 'nik');
    }


}
