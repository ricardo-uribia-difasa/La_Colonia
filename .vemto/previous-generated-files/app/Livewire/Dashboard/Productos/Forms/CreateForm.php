<?php

namespace App\Livewire\Dashboard\Productos\Forms;

use Livewire\Form;
use App\Models\Producto;
use Livewire\Attributes\Rule;

class CreateForm extends Form
{
    #[Rule('required')]
    public $codigo_barras = '';

    #[Rule('required')]
    public $nombre = '';

    #[Rule('required')]
    public $descripcion = '';

    #[Rule('required')]
    public $stock = '';

    #[Rule('required')]
    public $precio = '';

    #[Rule('required')]
    public $iva = '';

    public function save()
    {
        $this->validate();

        $producto = Producto::create($this->except([]));

        $this->reset();

        return $producto;
    }
}
