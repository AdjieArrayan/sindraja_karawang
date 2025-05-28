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
        'regu_id',
        'kegiatan_id',
        'tanggal_kegiatan',
        'waktu_kegiatan',
        'lokasi_kegiatan',
        'anggota_id',
        'unsur_id',
        'laporan_singkat',
        'situasi_id',
        'catatan_laporan',
    ];

    public function detail()
    {
        return $this->hasMany(LaporanDetail::class, 'id_laporan', 'id_laporan');
    }

    public function dokumentasi()
    {
        return $this->hasMany(LaporanDetail::class, 'id_laporan', 'id_laporan');
    }

    public function regu()
    {
        return $this->belongsTo(ReguLaporan::class, 'regu_id', 'id_regu');
    }

    public function jenisKegiatan()
    {
        return $this->belongsTo(JenisKegiatan::class, 'kegiatan_id', 'id_kegiatan');
    }

    public function anggotaTerlibat()
    {
        return $this->belongsTo(AnggotaTerlibat::class, 'anggota_id', 'id_anggota');
    }

    public function unsurTerlibat()
    {
        return $this->belongsTo(UnsurTerlibat::class, 'unsur_id', 'id_unsur');
    }

    public function situasiKondisi()
    {
        return $this->belongsTo(SituasiKondisi::class, 'situasi_id', 'id_situasi');
    }

}
