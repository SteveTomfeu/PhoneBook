<?php

namespace App\Http\Livewire;

use App\Service\PhoneBook;
use Livewire\Component;

class LiveSearch extends Component
{
    public $name;

    public function mount()
    {
        dd(PhoneBook::searchByCity('france'));
    }

    public function render()
    {
        return view('livewire.live-search');
    }
}
