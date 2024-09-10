<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lp_ruangan extends Model
{
    use HasFactory;
     protected $filLable = ['id', 'id_peminjaman','keterangan'];
    public $timestamps = true;

}
