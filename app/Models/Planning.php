<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;

    protected $table = 'planning';
    public $timestamps = false;

    protected $fillable = [
        'AUFNR', 'MOD_NO','MOD_NAME','MAT_NO','MAT_NAME','STR_DATE','TARGET_QTY','ACTUAL_QTY'
    ];
}
