<?php

namespace App\Models;

use App\Models\Sparepart;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SewingSample extends Model implements Auditable
{
    use HasFactory, AuditableTrait;
    use Sortable;

    protected $table = 'sewing_line_and_sample_check';
    protected $primaryKey = 'serial_number';
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = false;
    
    public $sortable = [
        'serial_number',
        'tipe',
        'jenis_mesin',
        'merk_mesin',
        'bagian',
    ];

    public function sparepart()
    {
        return $this->belongsTo(Sparepart::class,'id_sparepart', 'id_sparepart');
    }
}
