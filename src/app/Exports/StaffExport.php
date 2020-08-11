<?php

namespace App\Exports;

use App\Staff;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class StaffExport implements FromView
{
    use exportable;

    public function getEstado(int $estado)
    {
        $this->estado = $estado;
        return $this;
    }
    
    public function view(): View
    {
        $configuracion['estado'] =  $this->estado;
      
        if($this->estado){
            $configuracion['staff'] = Staff::where('estado', true)->get();
        }else{
            $configuracion['staff'] = Staff::orderBy('estado', 'desc')->get();
        }
        return view('admin.excel.excel-staff', $configuracion);
    }
}
