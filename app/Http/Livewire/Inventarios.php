<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\inventario;
use App\Models\Producto;
use App\Models\Condicion;
use App\Models\Sede;
use App\Models\Planta;
use App\Models\Departamento;
use App\Models\User;
use App\Exports\InventariosExport;
use Maatwebsite\Excel\Facades\Excel;

class Inventarios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $fecha_inventario, $hora_inventario, $producto_id, $condicion_id, $sede_id, $planta_id, $departamento_id, $user_id, $cantidad=1;
    public $updateMode = false;

    public function render()
    {
		$productos=Producto::all();
		$condicions=Condicion::all();
		$sedes=Sede::all();
		$plantas=Planta::all();
		$departamentos=Departamento::all();
		$users=User::all();
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.inventarios.view', [
            'inventarios' => Inventario::latest()
						->orWhere('fecha_inventario', 'LIKE', $keyWord)
						->orWhere('hora_inventario', 'LIKE', $keyWord)
						->orWhere('producto_id', 'LIKE', $keyWord)
						->orWhere('condicion_id', 'LIKE', $keyWord)
						->orWhere('sede_id', 'LIKE', $keyWord)
						->orWhere('planta_id', 'LIKE', $keyWord)
						->orWhere('departamento_id', 'LIKE', $keyWord)
						->orWhere('user_id', 'LIKE', $keyWord)
						->orWhere('cantidad', 'LIKE', $keyWord)
						->paginate(10),
        ],compact('productos','condicions','sedes','plantas','departamentos','users'));
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->fecha_inventario = null;
		$this->hora_inventario = null;
		$this->producto_id = null;
		$this->condicion_id = null;
		$this->sede_id = null;
		$this->planta_id = null;
		$this->departamento_id = null;
		$this->user_id = null;
		$this->cantidad = null;
    }

    public function store()
    {
		$cantidad=1;
        $this->validate([
		'fecha_inventario' => 'required',
		'hora_inventario' => 'required',
		// 'cantidad' => 'required',
        ]);

        Inventario::create([ 
			'fecha_inventario' => $this-> fecha_inventario,
			'hora_inventario' => $this-> hora_inventario,
			'producto_id' => $this-> producto_id,
			'condicion_id' => $this-> condicion_id,
			'sede_id' => $this-> sede_id,
			'planta_id' => $this-> planta_id,
			'departamento_id' => $this-> departamento_id,
			'user_id' => $this-> user_id,
			'cantidad' => 1
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Inventario Guardado 1234.');
    }

    public function edit($id)
    {
        $record = Inventario::findOrFail($id);

        $this->selected_id = $id; 
		$this->fecha_inventario = $record-> fecha_inventario;
		$this->hora_inventario = $record-> hora_inventario;
		$this->producto_id = $record-> producto_id;
		$this->condicion_id = $record-> condicion_id;
		$this->sede_id = $record-> sede_id;
		$this->planta_id = $record-> planta_id;
		$this->departamento_id = $record-> departamento_id;
		$this->user_id = $record-> user_id;
		$this->cantidad = $record-> cantidad;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'fecha_inventario' => 'required',
		'hora_inventario' => 'required',
		'cantidad' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Inventario::find($this->selected_id);
            $record->update([ 
			'fecha_inventario' => $this-> fecha_inventario,
			'hora_inventario' => $this-> hora_inventario,
			'producto_id' => $this-> producto_id,
			'condicion_id' => $this-> condicion_id,
			'sede_id' => $this-> sede_id,
			'planta_id' => $this-> planta_id,
			'departamento_id' => $this-> departamento_id,
			'user_id' => $this-> user_id,
			'cantidad' => 1
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Inventario Actualizado.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Inventario::where('id', $id);
            $record->delete();
        }
    }

}
