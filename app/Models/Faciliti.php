<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faciliti extends Model
{
    use HasFactory;
    protected $table = 'facilities';
    protected $fillable = ['nama_fasilitas', 'keterangan', 'image'];
}
