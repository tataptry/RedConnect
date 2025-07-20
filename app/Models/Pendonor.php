<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    use HasFactory;

    protected $table = 'pendonor';

    protected $fillable = [
        'nama',
        'umur',
        'jenis_kelamin',
        'no_hp',
        'golongan_darah',
        'riwayat_penyakit',
        'pernah_donor',
    ];
}
