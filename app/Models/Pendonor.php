<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    use HasFactory;

    protected $table = 'pendonor';

    protected $fillable = [
        'name',
        'email',
        'blood_type',
        'phone',
    ];
}
