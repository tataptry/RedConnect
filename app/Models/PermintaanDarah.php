<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermintaanDarah extends Model
{
    protected $table = 'permintaan_darah';
    protected $fillable = ['nama', 'golongan', 'jumlah', 'kontak'];
}
