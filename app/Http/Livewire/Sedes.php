<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Sede;

class Sedes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nom_sede;
    public $updateMode = false;

    protected $messages = [

        'nom_sede.required' => 'No puede dejar en blanco el nombre de la sede.',

        'nom_sede.unique' => 'No pueden existir dos sedes registradas con el mismo nombre',

    ];

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.sedes.view', [
            'sedes' => Sede::latest()
						->orWhere('nom_sede', 'LIKE', $keyWord)
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
		$this->nom_sede = null;
    }

    public function store()
    {
        $this->validate([
		'nom_sede' => 'required|unique:sedes',
        ]);

        Sede::create([ 
			'nom_sede' => $this-> nom_sede
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Sede Successfully created.');
    }

    public function edit($id)
    {
        $record = Sede::findOrFail($id);

        $this->selected_id = $id; 
		$this->nom_sede = $record-> nom_sede;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nom_sede' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Sede::find($this->selected_id);
            $record->update([ 
			'nom_sede' => $this-> nom_sede
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Sede Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Sede::where('id', $id);
            $record->delete();
        }
    }
}
