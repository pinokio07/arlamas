<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryFoto extends Model
{
    use HasFactory;

    protected $table = 'gallery_foto';
    protected $guarded = ['id'];
}
