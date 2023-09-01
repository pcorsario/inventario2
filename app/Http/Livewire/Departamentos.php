<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Departamento;

class Departamentos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre_departamento;
    public $updateMode = false;

    protected $messages = [

        'nombre_departamento.required' => 'No puede dejar en blanco el nombre del departamento.',

        'nombre_departamento.unique' => 'No pueden existir dos departamentos registrados con el mismo nombre',

    ];

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.departamentos.view', [
            'departamentos' => Departamento::latest()
						->orWhere('nombre_departamento', 'LIKE', $keyWord)
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
		$this->nombre_departamento = null;
    }

    public function store()
    {
        $this->validate([
		'nombre_departamento' => 'required|unique:departamentos',
        ]);

        Departamento::create([ 
			'nombre_departamento' => $this-> nombre_departamento
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Departamento creado exitosamente.');
    }

    public function edit($id)
    {
        $record = Departamento::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre_departamento = $record-> nombre_departamento;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre_departamento' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Departamento::find($this->selected_id);
            $record->update([ 
			'nombre_departamento' => $this-> nombre_departamento
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Departamento Actualizado Correctamente.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Departamento::where('id', $id);
            $record->delete();
        }
    }
}
