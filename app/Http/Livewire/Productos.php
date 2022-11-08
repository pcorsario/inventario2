<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Producto;
use App\Models\Categoria;
class Productos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $codigo_producto, $nombre_producto, $fecha_compra, $precio, $caracteristicas, $categoria_id;
    public $updateMode = false;

    protected $messages = [

        'codigo_producto.required' => 'No puede dejar en blanco el código del producto.',
        'codigo_producto.unique' => 'Este Código de producto ya se encuentra registrado',
        'nombre_producto.required' => 'No puede dejar en blanco el nombre del producto.',
        'fecha_compra.required' => 'No puede dejar en blanco la fecha de compra del producto.',
        'precio.required' => 'No puede dejar en blanco el precio del producto.',
        'caracteristicas.required' => 'No puede dejar en blanco las caracteristicas del producto.',

    ];

    public function render()
    {
        
        $categorias=Categoria::all();
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.productos.view', [
            'productos' => Producto::latest()
						->orWhere('codigo_producto', 'LIKE', $keyWord)
						->orWhere('nombre_producto', 'LIKE', $keyWord)
						->orWhere('fecha_compra', 'LIKE', $keyWord)
						->orWhere('precio', 'LIKE', $keyWord)
						->orWhere('caracteristicas', 'LIKE', $keyWord)
						->orWhere('categoria_id', 'LIKE', $keyWord)
						->paginate(10),
        ],compact('categorias'));
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->codigo_producto = null;
		$this->nombre_producto = null;
		$this->fecha_compra = null;
		$this->precio = null;
		$this->caracteristicas = null;
		$this->categoria_id = null;
    }

    public function store()
    {
        $this->validate([
		'codigo_producto' => 'required|unique:productos',
		'nombre_producto' => 'required',
		'fecha_compra' => 'required',
		'precio' => 'required',
		'caracteristicas' => 'required',
        ]);

        Producto::create([ 
			'codigo_producto' => $this-> codigo_producto,
			'nombre_producto' => $this-> nombre_producto,
			'fecha_compra' => $this-> fecha_compra,
			'precio' => $this-> precio,
			'caracteristicas' => $this-> caracteristicas,
			'categoria_id' => $this-> categoria_id
        ]);

        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Producto Successfully created.');
    }

    public function edit($id)
    {
        $record = Producto::findOrFail($id);

        $this->selected_id = $id; 
		$this->codigo_producto = $record-> codigo_producto;
		$this->nombre_producto = $record-> nombre_producto;
		$this->fecha_compra = $record-> fecha_compra;
		$this->precio = $record-> precio;
		$this->caracteristicas = $record-> caracteristicas;
		$this->categoria_id = $record-> categoria_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'codigo_producto' => 'required|unique:productos',
		'nombre_producto' => 'required',
		'fecha_compra' => 'required',
		'precio' => 'required',
		'caracteristicas' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Producto::find($this->selected_id);
            $record->update([ 
			'codigo_producto' => $this-> codigo_producto,
			'nombre_producto' => $this-> nombre_producto,
			'fecha_compra' => $this-> fecha_compra,
			'precio' => $this-> precio,
			'caracteristicas' => $this-> caracteristicas,
			'categoria_id' => $this-> categoria_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Producto Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Producto::where('id', $id);
            $record->delete();
        }
    }
}
