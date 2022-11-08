<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Condicion;

class Condicions extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $condicion;
    public $updateMode = false;

    protected $messages = [

        'condicion.required' => 'No puede dejar en blanco el nombre de la condición.',

        'condicion.unique' => 'No pueden existir dos condiciones registradas con el mismo nombre',

    ];

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.condicions.view', [
            'condicions' => Condicion::latest()
						->orWhere('condicion', 'LIKE', $keyWord)
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
		$this->condicion = null;
    }

    public function store()
    {
        $this->validate([
		'condicion' => 'required|unique:condicions',
        ]);

        Condicion::create([ 
			'condicion' => $this-> condicion
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Condicion Creada Exitosamente.');
    }

    public function edit($id)
    {
        $record = Condicion::findOrFail($id);

        $this->selected_id = $id; 
		$this->condicion = $record-> condicion;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'condicion' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Condicion::find($this->selected_id);
            $record->update([ 
			'condicion' => $this-> condicion
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Condicion Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Condicion::where('id', $id);
            $record->delete();
        }
    }
}
