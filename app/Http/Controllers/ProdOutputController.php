<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scanning;
use Carbon\Carbon;

class ProdOutputController extends Controller
{
    public function getOutputScans()
    {
        $date = Carbon::now()->toDayDateTimeString();

        $scans = Scanning::groupBy('MODEL')
            ->selectRaw('count(*) as total,MODEL')
            ->selectSub("SELECT SUM(CAST(TARGET_QTY as DECIMAL(9,2))) as qty FROM planning WHERE MOD_NAME = scanning.MODEL AND cast(STR_DATE as date) = cast(getdate() as date) ", "target")
            ->whereDate('DATETIME_', Carbon::today())
            ->orderBY('MODEL','ASC')
            ->paginate(20);

        $count = Scanning::groupBy('MODEL')
            ->selectRaw('MODEL')
            ->whereDate('DATETIME_', Carbon::today())->get()->count();

            return response()->json(array('date' => $date, 'scans' => $scans, 'count' => $count));
    }
}
