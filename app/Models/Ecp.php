<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ecp extends Model
{
    use HasFactory, Notifiable;
    protected $table = "ecp";
    protected $primaryKey = "id";
    protected $fillable = [
        'ecpno',
        'nama',
        'deskripsi',
        'desktambahan',
        'alasan',
    ];

}
