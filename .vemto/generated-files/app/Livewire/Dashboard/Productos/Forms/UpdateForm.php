<?php

namespace App\Livewire\Dashboard\Productos\Forms;

use Livewire\Form;
use App\Models\Producto;
use Illuminate\Validation\Rule;

class UpdateForm extends Form
{
    public ?Producto $producto;

    public $codigo_barras = '';

    public $nombre = '';

    public $descripcion = '';

    public $stock = '';

    public $precio = '';

    public $iva = '';

    public function rules(): array
    {
        return [
            'codigo_barras' => ['required'],
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'stock' => ['required'],
            'precio' => ['required'],
            'iva' => ['required'],
        ];
    }

    public function setProducto(Producto $producto)
    {
        $this->producto = $producto;

        $this->codigo_barras = $producto->codigo_barras;
        $this->nombre = $producto->nombre;
        $this->descripcion = $producto->descripcion;
        $this->stock = $producto->stock;
        $this->precio = $producto->precio;
        $this->iva = $producto->iva;
    }

    public function save()
    {
        $this->validate();

        $this->producto->update($this->except(['producto']));
    }
}
