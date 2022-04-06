<?php

namespace App\Http\Controllers;

use App\Exports\ReportExport;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ReportsController extends Controller
{
    public function fileExport($year): BinaryFileResponse
    {
        return Excel::download(new ReportExport($year), 'SISTEMA SANTA ELENA Año '.$year.'.xlsx');
    }
}
