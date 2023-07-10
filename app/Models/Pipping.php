<?php

namespace App\Models;

use App\Models\Sparepart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pipping extends Model
{
    use HasFactory;
    protected $table = 'rewinding_pipping_check';
    protected $primaryKey = 'serial_number';
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = false;

    public function sparepart()
    {
        return $this->belongsTo(Sparepart::class,'id_sparepart', 'id_sparepart');
    }
}
