<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spv extends Model
{
    protected $table = "spv";
    protected $primaryKey = "id";
    protected $fillable = [
        'ecpnomor',
        'keputusan_spv',
        'alasan_spv',
        'nama_spv'
    ];
}
