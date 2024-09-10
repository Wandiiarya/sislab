<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pm_ruangan extends Model
{
    use HasFactory;
    protected $filLable = ['id', 'penanggungjawab','instansi','jenis_kegiatan','id_ruangan','tanggal_peminjaman','documentasi','keterangan'];
    public $timestamps = true;
}