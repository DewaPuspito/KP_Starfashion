<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fabric extends Model
{
    use HasFactory;
    protected $table = 'gudang_fabric';
    protected $primaryKey = 'serial_number';
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = false;
}
