<?php

namespace Modules\Gym\Http\Controllers;


use Illuminate\Http\Request;
use View;
use Excel;
class Reporte extends Controller
{
  
    public function getReporte(Request $request){
        
    }
    
       public function getReporteHistorico(Request $request){
        
    }
           private function exportFile($data){
        ob_end_clean();
        ob_start();
        Excel::create('Order_report_'.date('Y_m_d-H:i:s'), function ($excel) use ($data) {
            $excel->sheet('Order', function ($sheet) use ($data) {
                $sheet->with($data, null, 'A1', false, false);
            });
        })->download('xlsx');
    }
    
}
