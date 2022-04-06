<?php

namespace App\Exports\Sheets;

use App\Models\Loans;
use App\Models\Members;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;

class LoansPerMonthSheet implements ShouldAutoSize, FromCollection, WithTitle, WithMapping, WithHeadings
{
    private $number;
    private $year;

    public function __construct(int $year, int $number)
    {
        $this->year = $year;
        $this->number = $number;
    }

    /**
     * @return Builder
     */
    public function collection()
    {
        $loans = Loans::whereHas('payments', function ($q) {
            $q->whereYear('payment_date', $this->year);
        })->with(['payments' => function ($q) {
            $q->orderBy('payment_date', 'ASC');
        }])->orderBy('loan_date', 'ASC')->get();

        $members = Members::orderBy('order', 'ASC')->get();

        $members->each(function ($member) use ($loans) {
            $loansGrouped = array();
            foreach ($loans as $loan) {
                if ($loan->members_id == $member->id) {
                    $loansGrouped[] = $loan;
                }
            }
            $member->loans = $loansGrouped;
        });
        return $members;
    }

    public function map($member): array
    {
        $row = [
            $member->order,
            $member->first_name . ' ' . $member->last_name
        ];

        if (isset($member->loans[$this->number])) {
            $row[] = $member->loans[$this->number]->amount;
            for ($month = 1; $month <= 12; $month++) {
                foreach ($member->loans[$this->number]->payments as $payment) {
                    if (date('m', strtotime($payment->payment_date)) == $month) {
                        $row[] = $payment->amount;
                        continue 2;
                    }
                }
                $row[] = '';
            }
        }
        return $row;
    }

    public function headings(): array
    {
        return [
            'Nº DE ORDEN',
            'NOMBRE DEL SOCIO',
            'SALDO',
            'ENERO',
            'FEBRERO',
            'MARZO',
            'ABRIL',
            'MAYO',
            'JUNIO',
            'JULIO',
            'AGOSTO',
            'SEPTIEMBRE',
            'OCTUBRE',
            'NOVIEMBRE',
            'DICIEMBRE'
        ];
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Prestamo ' . $this->number;
    }
}
