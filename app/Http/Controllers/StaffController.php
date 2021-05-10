<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function allStaffs()
    {
        $staffs = Staff::get();
        return response()->json($staffs);
    }

    public function getStaff($id)
    {
        $staff = Staff::where('empNo', $id)
                    ->take(1)
                    ->get();

        return response()->json($staff);
    }
}
