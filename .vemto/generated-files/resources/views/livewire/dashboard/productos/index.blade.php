<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 space-y-4">
    <x-ui.breadcrumbs>
        <x-ui.breadcrumbs.link href="/dashboard"
            >Dashboard</x-ui.breadcrumbs.link
        >
        <x-ui.breadcrumbs.separator />
        <x-ui.breadcrumbs.link active
            >{{ __('crud.productos.collectionTitle') }}</x-ui.breadcrumbs.link
        >
    </x-ui.breadcrumbs>

    <div class="flex justify-between align-top py-4">
        <x-ui.input
            wire:model.live="search"
            type="text"
            placeholder="Search {{ __('crud.productos.collectionTitle') }}..."
        />

        @can('create', App\Models\Producto::class)
        <a wire:navigate href="{{ route('dashboard.productos.create') }}">
            <x-ui.button>New</x-ui.button>
        </a>
        @endcan
    </div>

    {{-- Delete Modal --}}
    <x-ui.modal.confirm wire:model="confirmingDeletion">
        <x-slot name="title"> {{ __('Delete') }} </x-slot>

        <x-slot name="content"> {{ __('Are you sure?') }} </x-slot>

        <x-slot name="footer">
            <x-ui.button
                wire:click="$toggle('confirmingDeletion')"
                wire:loading.attr="disabled"
            >
                {{ __('Cancel') }}
            </x-ui.button>

            <x-ui.button.danger
                class="ml-3"
                wire:click="delete({{ $deletingProducto }})"
                wire:loading.attr="disabled"
            >
                {{ __('Delete') }}
            </x-ui.button.danger>
        </x-slot>
    </x-ui.modal.confirm>

    {{-- Index Table --}}
    <x-ui.container.table>
        <x-ui.table>
            <x-slot name="head">
                <x-ui.table.header for-crud wire:click="sortBy('codigo_barras')"
                    >{{ __('crud.productos.inputs.codigo_barras.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.header for-crud wire:click="sortBy('nombre')"
                    >{{ __('crud.productos.inputs.nombre.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.header for-crud wire:click="sortBy('descripcion')"
                    >{{ __('crud.productos.inputs.descripcion.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.header for-crud wire:click="sortBy('stock')"
                    >{{ __('crud.productos.inputs.stock.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.header for-crud wire:click="sortBy('precio')"
                    >{{ __('crud.productos.inputs.precio.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.header for-crud wire:click="sortBy('iva')"
                    >{{ __('crud.productos.inputs.iva.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.action-header>Actions</x-ui.table.action-header>
            </x-slot>

            <x-slot name="body">
                @forelse ($productos as $producto)
                <x-ui.table.row wire:loading.class.delay="opacity-75">
                    <x-ui.table.column for-crud
                        >{{ $producto->codigo_barras }}</x-ui.table.column
                    >
                    <x-ui.table.column for-crud
                        >{{ $producto->nombre }}</x-ui.table.column
                    >
                    <x-ui.table.column for-crud
                        >{{ $producto->descripcion }}</x-ui.table.column
                    >
                    <x-ui.table.column for-crud
                        >{{ $producto->stock }}</x-ui.table.column
                    >
                    <x-ui.table.column for-crud
                        >{{ $producto->precio }}</x-ui.table.column
                    >
                    <x-ui.table.column for-crud
                        >{{ $producto->iva }}</x-ui.table.column
                    >
                    <x-ui.table.action-column>
                        @can('update', $producto)
                        <x-ui.action
                            wire:navigate
                            href="{{ route('dashboard.productos.edit', $producto) }}"
                            >Edit</x-ui.action
                        >
                        @endcan @can('delete', $producto)
                        <x-ui.action.danger
                            wire:click="confirmDeletion({{ $producto->id }})"
                            >Delete</x-ui.action.danger
                        >
                        @endcan
                    </x-ui.table.action-column>
                </x-ui.table.row>
                @empty
                <x-ui.table.row>
                    <x-ui.table.column colspan="7"
                        >No {{ __('crud.productos.collectionTitle') }} found.</x-ui.table.column
                    >
                </x-ui.table.row>
                @endforelse
            </x-slot>
        </x-ui.table>

        <div class="mt-2">{{ $productos->links() }}</div>
    </x-ui.container.table>
</div>
