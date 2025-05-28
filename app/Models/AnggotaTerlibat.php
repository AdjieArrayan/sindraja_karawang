<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaTerlibat extends Model
{
    use HasFactory;

    protected $table = 'anggota_terlibat';

    protected $primaryKey = 'id_anggota';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'anggota_terlibat',
    ];

    public function anggotaTerlibat()
    {
        return $this->hasMany(AnggotaTerlibat::class, 'id_anggota', 'anggota_id');
    }
}

