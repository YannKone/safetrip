<?php

namespace App\Exports;

use App\Models\Contactuser;
use Maatwebsite\Excel\Concerns\FromCollection;

class ContactusersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contactuser::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'Nom et Prenom',
            'Email',
            'Objet du message',
            'Message'
            
        ];
    }
}
