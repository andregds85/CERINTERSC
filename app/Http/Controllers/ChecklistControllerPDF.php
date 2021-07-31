<?php
  
namespace App\Http\Controllers;

use App\Models\Checklist;
  
use Illuminate\Http\Request;
use PDF;
  
class ChecklistControllerPDF extends Controller
{


    public function generatePDF()
    {
        $data = [
            'title' => 'Checklist Transporte Seguro',
            'date' => date('d/m/Y')
        ];
          
        $pdf = PDF::loadView('checklistTransporte.mypdf', $data);
    
        return $pdf->download('ChecklistTransporteSeguro.pdf');
    }

  

}