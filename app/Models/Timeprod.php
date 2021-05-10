<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeprod extends Model
{
    use HasFactory;

    protected $table = 'timeprod';

    protected $fillable = [
        'BARCODE', 'STATION','MODEL','MODEL_NAME','EMP_NO','NEW_EMP_NO','START_TIME','END_TIME','START_REST_TIME','END_REST_TIME'
    ];
}
