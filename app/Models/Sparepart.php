<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sparepart extends Model
{
    use HasFactory;
    protected $table = 'sparepart';
    protected $primaryKey = 'id_sparepart';
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = false;
}
