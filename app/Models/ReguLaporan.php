<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReguLaporan extends Model
{
    use HasFactory;

    protected $table = 'regu_laporan';

    protected $primaryKey = 'id_regu';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama_regu',
    ];

    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'regu_id', 'id_regu');
    }
}
