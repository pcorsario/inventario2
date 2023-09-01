<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\InventariosExport;
use Maatwebsite\Excel\Facades\Excel;
class InventarioexcelController extends Controller
{
    public function export() 
    {
        return Excel::download(new InventariosExport, 'inventarios.xlsx');
    }
}
