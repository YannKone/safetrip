<?php

namespace App\Exports;

use App\Models\Demopagemodel;
use Maatwebsite\Excel\Concerns\FromCollection;

class DemopagesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Demopagemodel::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'Nom de l\'Entreprise',
            'Nom et Prenoms',
            'Email',
            'Profession',
            'description',
            'Pays',
            'Numero de Telephone'


            
        ];
    }
}
