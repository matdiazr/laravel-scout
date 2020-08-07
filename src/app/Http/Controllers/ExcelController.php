<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StaffExport;

class ExcelController extends Controller
{
    //
    public function export() 
    {
        return Excel::download(new StaffExport, 'users.xlsx');
    }
}
