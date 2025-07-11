<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Producto;
use Illuminate\Support\Collection;
use App\Livewire\Dashboard\Productos\Forms\UpdateForm;

class ProductoEdit extends Component
{
    public ?Producto $producto = null;

    public UpdateForm $form;

    public function mount(Producto $producto)
    {
        $this->authorize('view-any', Producto::class);

        $this->producto = $producto;

        $this->form->setProducto($producto);
    }

    public function save()
    {
        $this->authorize('update', $this->producto);

        $this->validate();

        $this->form->save();

        $this->dispatch('saved');
    }

    public function render()
    {
        return view('livewire.dashboard.productos.edit', []);
    }
}
