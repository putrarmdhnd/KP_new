<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihAssesor extends Model
{
    use HasFactory;

    protected $fillable = ['nama','nik','ttd_assesor', 'status_konfirmasi'];

}
