<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StaffExport;

class ExcelController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function export() 
    {
        return Excel::download(new StaffExport, 'staff.xlsx');
    }
    // public function allExport() 
    // {
    //     return Excel::download(new StaffExport, 'staff.xlsx');
    // }
}
