<?php

namespace App\Exports;

use App\Models\inventario;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InventariosExport implements FromView
{
    public function view(): View
    {
        return view('livewire.inventarios.excel.inventario', [
            'inventarios' => Inventario::all()
        ]);
    }
}
