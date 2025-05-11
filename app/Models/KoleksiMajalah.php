<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KoleksiMajalah extends Model
{
    protected $fillable = ['judul', 'edisi', 'penerbit', 'tanggal_terbit', 'deskripsi'];

}
