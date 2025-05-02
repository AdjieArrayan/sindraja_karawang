<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory,SoftDeletes ;

    protected $table = 'laporan';
    protected $primaryKey = 'id_laporan';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama_pelapor',
        'regu_pelapor',
        'jenis_kegiatan',
        'tanggal_kegiatan',
        'waktu_kegiatan',
        'lokasi_kegiatan',
        'anggota_terlibat',
        'unsur_terlibat',
        'laporan_singkat',
        'situasi_kondisi',
        'dokumentasi_laporan',
        'catatan_laporan',
    ];
}
