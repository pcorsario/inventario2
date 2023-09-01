<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Categoria;

class Categorias extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre_categoria;
    public $updateMode = false;

    protected $messages = [

        'nombre_categoria.required' => 'No puede dejar en blanco el nombre de la categoria.',

        'nombre_categoria.unique' => 'No pueden existir dos categorias registradas con el mismo nombre',

    ];

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.categorias.view', [
            'categorias' => Categoria::latest()
						->orWhere('nombre_categoria', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->nombre_categoria = null;
    }

    public function store()
    {
        $this->validate([
		'nombre_categoria' => 'required|unique:categorias',
        ]);

        Categoria::create([ 
			'nombre_categoria' => $this-> nombre_categoria
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Categoria Successfully created.');
    }

    public function edit($id)
    {
        $record = Categoria::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre_categoria = $record-> nombre_categoria;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre_categoria' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Categoria::find($this->selected_id);
            $record->update([ 
			'nombre_categoria' => $this-> nombre_categoria
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Categoria Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Categoria::where('id', $id);
            $record->delete();
        }
    }
}
