<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Producto;
use Livewire\WithPagination;

class ProductoIndex extends Component
{
    use WithPagination;

    public $search;
    public $sortField = 'updated_at';
    public $sortDirection = 'desc';

    public $queryString = ['search', 'sortField', 'sortDirection'];

    public $confirmingDeletion = false;
    public $deletingProducto;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function confirmDeletion(string $id)
    {
        $this->deletingProducto = $id;

        $this->confirmingDeletion = true;
    }

    public function delete(Producto $producto)
    {
        $producto->delete();

        $this->confirmingDeletion = false;
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection =
                $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function getRowsProperty()
    {
        return $this->rowsQuery->paginate(5);
    }

    public function getRowsQueryProperty()
    {
        return Producto::query()
            ->orderBy($this->sortField, $this->sortDirection)
            ->where('codigo_barras', 'like', "%{$this->search}%");
    }

    public function render()
    {
        return view('livewire.dashboard.productos.index', [
            'productos' => $this->rows,
        ]);
    }
}
