<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hive;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http; // Import the Http facade

class HiveSearch extends Component
{
    use WithPagination;

    public $searchTerm;

    // public function mount()
    // {
    //     $this->search = Session::get('search', '');
    // }
    public function updateSearchTerm($value)
    {
        $this->searchTerm = $value;
    }

    public function render()
    {
        $hives = Hive::where('HiveColor', 'like', '%' . $this->searchTerm . '%')->paginate(4);

        return view('livewire.hive-search', ['hives' => $hives]);
    }

}
