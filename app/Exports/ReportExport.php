<?php

namespace App\Exports;

use App\Exports\Sheets\LoansPerMonthSheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ReportExport implements WithMultipleSheets
{
    use Exportable;

    protected $year;

    public function __construct(int $year)
    {
        $this->year = $year;
    }

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];

        for ($number = 1; $number <= 4; $number++) {
            $sheets[] = new LoansPerMonthSheet($this->year, $number);
        }

        return $sheets;
    }
}

