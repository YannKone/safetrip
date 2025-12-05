<?php

namespace App\Exports;

use App\Models\Newslettermodels;
use Maatwebsite\Excel\Concerns\FromCollection;

class NewslettersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Newslettermodels::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'email'
            
        ];
    }
}
