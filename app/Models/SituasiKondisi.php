<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SituasiKondisi extends Model
{
    use HasFactory;

    protected $table = 'situasi_kondisi';

    protected $primaryKey = 'id_situasi';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'situasi_kondisi',
    ];

    public function situasiKondisi()
    {
        return $this->hasMany(SituasiKondisi::class, 'id_situasi', 'situasi_id');
    }
}

