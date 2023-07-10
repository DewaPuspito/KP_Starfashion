<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strip extends Model
{
    use HasFactory;
    protected $table = 'strip_cutter_check';
    protected $primaryKey = 'serial_number';
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = false;

    public function sparepart()
    {
        return $this->belongsTo(Sparepart::class,'id_sparepart', 'id_sparepart');
    }
}
