<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Honey;
use Livewire\WithPagination;

class HoneyFilter extends Component
{
    use WithPagination;

    public $search = '';
    public function updateSearchTerm($value)
    {
        $this->search = $value;
    }
    public function render()
    {
        $honeys = Honey::where('kind_of_honey', 'like', '%' . $this->search . '%')->paginate(4);

        return view('livewire.honey-filter', ['honeys' => $honeys]);
    }
}
