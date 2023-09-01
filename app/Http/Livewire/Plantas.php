<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Planta;

class Plantas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nom_planta;
    public $updateMode = false;

    protected $rules = [

        'nom_planta' => 'required|unique:nom_planta',

    ];

    protected $messages = [

        'nom_planta.required' => 'No puede dejar en blanco el nombre de la planta.',

        'nom_planta.unique' => 'No pueden existir dos plantas registradas con el mismo nombre',

    ];
    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.plantas.view', [
            'plantas' => Planta::latest()
						->orWhere('nom_planta', 'LIKE', $keyWord)
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
		$this->nom_planta = null;
    }

    public function store()
    {
        $this->validate([
		'nom_planta' => ['required','min:4','unique:plantas'],
        ]);

        Planta::create([ 
			'nom_planta' => $this-> nom_planta
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Planta Successfully created.');
    }

    public function edit($id)
    {
        $record = Planta::findOrFail($id);

        $this->selected_id = $id; 
		$this->nom_planta = $record-> nom_planta;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nom_planta' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Planta::find($this->selected_id);
            $record->update([ 
			'nom_planta' => $this-> nom_planta
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Planta Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Planta::where('id', $id);
            $record->delete();
        }
    }
}
