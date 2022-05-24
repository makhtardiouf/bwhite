<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class Categories extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $weight, $icon, $parent_id;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.categories.view', [
            'categories' => Category::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('weight', 'LIKE', $keyWord)
						->orWhere('icon', 'LIKE', $keyWord)
						->orWhere('parent_id', 'LIKE', $keyWord)
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
		$this->name = null;
		$this->weight = null;
		$this->icon = null;
		$this->parent_id = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'weight' => 'required',
        ]);

        Category::create([ 
			'name' => $this-> name,
			'weight' => $this-> weight,
			'icon' => $this-> icon,
			'parent_id' => $this-> parent_id
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Category Successfully created.');
    }

    public function edit($id)
    {
        $record = Category::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->weight = $record-> weight;
		$this->icon = $record-> icon;
		$this->parent_id = $record-> parent_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'weight' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Category::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'weight' => $this-> weight,
			'icon' => $this-> icon,
			'parent_id' => $this-> parent_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Category Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Category::where('id', $id);
            $record->delete();
        }
    }
}
