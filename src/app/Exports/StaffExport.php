<?php

namespace App\Exports;

use App\Staff;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StaffExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function view(): View
    {
        $estado = true;

        if($estado){
            return view('admin.excel.excel-staff', [
                'staff' => Staff::orderBy('estado', 'desc')->get(),
                'estado' => $estado
            ]);
        }else{
            return view('admin.excel.excel-staff', [
                'staff' => Staff::where('estado', true)
                ->get(),
                'estado' => $estado
            ]);
        }
    }
}
