<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Manga as Authenticatable;

class Manga extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table='mangas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'genre',
        'image',
        'keterangan',
    ];
}
