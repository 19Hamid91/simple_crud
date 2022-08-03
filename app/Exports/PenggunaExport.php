<?php

namespace App\Exports;

use App\pengguna;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenggunaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pengguna::all();
    }
}
