<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use KyslikColumnSortableSortable;

class SewingSample extends Model
{
    use HasFactory;
    protected $table = 'sewing_line_and_sample_check';
    protected $primaryKey = 'serial_number';
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = false;
}
