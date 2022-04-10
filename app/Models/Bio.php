<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Bio as Authenticatable;

class Bio extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table='bios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'nama',
        'image',
        'keterangan',
    ];
}
