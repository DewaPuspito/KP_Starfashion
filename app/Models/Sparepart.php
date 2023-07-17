<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sparepart extends Model implements Auditable
{
    use HasFactory, AuditableTrait;
    protected $table = 'sparepart';
    protected $primaryKey = 'id_sparepart';
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = false;
}
