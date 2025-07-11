<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Collection;
use App\Livewire\Dashboard\Productos\Forms\CreateForm;

class ProductoCreate extends Component
{
    use WithFileUploads;

    public CreateForm $form;

    public function mount()
    {
    }

    public function save()
    {
        $this->authorize('create', Producto::class);

        $this->validate();

        $producto = $this->form->save();

        return redirect()->route('dashboard.productos.edit', $producto);
    }

    public function render()
    {
        return view('livewire.dashboard.productos.create', []);
    }
}
