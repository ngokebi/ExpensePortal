<?php

namespace App\Imports;

use App\Models\Expense;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExpenseImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Expense([
            'Merchant' => $row[0],
            'Total' => $row[1],
            'Status' => $row[2],
            'Comment' => $row[3],
            'Receipt' => $row[4],
            'Date_Issue' => $row[5],
        ]);
    }
}
