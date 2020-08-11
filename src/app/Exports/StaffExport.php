<?php

namespace App\Exports;

use App\Staff;
// use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class StaffExport implements FromQuery
// class StaffExport implements FromQuery
{
    use exportable;

    public function getEstado(int $estado)
    {
        $this->estado = $estado;
        return $this;
    }
    
    // public function view($estado): View
    // {
        
    //     if($this.$estado){
    //         return view('admin.excel.excel-staff', [
    //             'staff' => Staff::orderBy('estado', 'desc')->get(),
    //             'estado' => $this.$estado
    //         ]);
    //     }else{
    //         return view('admin.excel.excel-staff', [
    //             'staff' => Staff::where('estado', true)
    //             ->get(),
    //             'estado' => $this->$estado
    //         ]);
    //     }
    // }

    public function query()
    {
        if($this->estado){
            return Staff::query()->where('estado', true);
        }else{
            return Staff::query();
        }
    }
}
