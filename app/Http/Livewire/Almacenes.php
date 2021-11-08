<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Almacen;
class Almacenes extends Component
{
    public $almacenes;
    public function render()
    {
        $this->productos = Almacen::all();
        return view('livewire.almacenes');
    }
}
