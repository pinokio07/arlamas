<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $guarded = ['id'];

    public function getAvatar()
    {
    	return !$this->avatar ? '/images/personalia/default.jpg' : '/images/personalia/'.$this->avatar;
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
