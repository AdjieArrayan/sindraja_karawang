<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKegiatan extends Model
{
    use HasFactory;

    protected $table = 'jenis_kegiatan'; // Nama tabel di DB

    protected $primaryKey = 'id_kegiatan';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama_kegiatan',
    ];

    public function jenisKegiatan()
    {
        return $this->hasMany(JenisKegiatan::class, 'id_kegiatan', 'kegiatan_id');
    }
}

