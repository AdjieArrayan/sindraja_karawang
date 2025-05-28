<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnsurTerlibat extends Model
{
    use HasFactory;

    protected $table = 'unsur_terlibat';

    protected $primaryKey = 'id_unsur';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'unsur_terlibat',
    ];

    public function unsurTerlibat()
    {
        return $this->hasMany(AnggotaTerlibat::class, 'id_unsur', 'unsur_id');
    }
}

