<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 space-y-4">
    <x-ui.breadcrumbs>
        <x-ui.breadcrumbs.link href="/dashboard"
            >Dashboard</x-ui.breadcrumbs.link
        >
        <x-ui.breadcrumbs.separator />
        <x-ui.breadcrumbs.link href="{{ route('dashboard.productos.index') }}"
            >{{ __('crud.productos.collectionTitle') }}</x-ui.breadcrumbs.link
        >
        <x-ui.breadcrumbs.separator />
        <x-ui.breadcrumbs.link active
            >Edit {{ __('crud.productos.itemTitle') }}</x-ui.breadcrumbs.link
        >
    </x-ui.breadcrumbs>

    <x-ui.toast on="saved"> Producto saved successfully. </x-ui.toast>

    <div class="w-full text-gray-500 text-lg font-semibold py-4 uppercase">
        <h1>Edit {{ __('crud.productos.itemTitle') }}</h1>
    </div>

    <div class="overflow-hidden border rounded-lg bg-white">
        <form class="w-full mb-0" wire:submit.prevent="save">
            <div class="p-6 space-y-3">
                <div class="w-full">
                    <x-ui.label for="codigo_barras"
                        >{{ __('crud.productos.inputs.codigo_barras.label')
                        }}</x-ui.label
                    >
                    <x-ui.input.text
                        class="w-full"
                        wire:model="form.codigo_barras"
                        name="codigo_barras"
                        id="codigo_barras"
                        placeholder="{{ __('crud.productos.inputs.codigo_barras.placeholder') }}"
                    />
                    <x-ui.input.error for="form.codigo_barras" />
                </div>

                <div class="w-full">
                    <x-ui.label for="nombre"
                        >{{ __('crud.productos.inputs.nombre.label')
                        }}</x-ui.label
                    >
                    <x-ui.input.text
                        class="w-full"
                        wire:model="form.nombre"
                        name="nombre"
                        id="nombre"
                        placeholder="{{ __('crud.productos.inputs.nombre.placeholder') }}"
                    />
                    <x-ui.input.error for="form.nombre" />
                </div>

                <div class="w-full">
                    <x-ui.label for="descripcion"
                        >{{ __('crud.productos.inputs.descripcion.label')
                        }}</x-ui.label
                    >
                    <x-ui.input.text
                        class="w-full"
                        wire:model="form.descripcion"
                        name="descripcion"
                        id="descripcion"
                        placeholder="{{ __('crud.productos.inputs.descripcion.placeholder') }}"
                    />
                    <x-ui.input.error for="form.descripcion" />
                </div>

                <div class="w-full">
                    <x-ui.label for="stock"
                        >{{ __('crud.productos.inputs.stock.label')
                        }}</x-ui.label
                    >
                    <x-ui.input.number
                        class="w-full"
                        wire:model="form.stock"
                        name="stock"
                        id="stock"
                        placeholder="{{ __('crud.productos.inputs.stock.placeholder') }}"
                        step="1"
                    />
                    <x-ui.input.error for="form.stock" />
                </div>

                <div class="w-full">
                    <x-ui.label for="precio"
                        >{{ __('crud.productos.inputs.precio.label')
                        }}</x-ui.label
                    >
                    <x-ui.input.number
                        class="w-full"
                        wire:model="form.precio"
                        name="precio"
                        id="precio"
                        placeholder="{{ __('crud.productos.inputs.precio.placeholder') }}"
                        step="1"
                    />
                    <x-ui.input.error for="form.precio" />
                </div>

                <div class="w-full">
                    <x-ui.label for="iva"
                        >{{ __('crud.productos.inputs.iva.label') }}</x-ui.label
                    >
                    <x-ui.input.select
                        wire:model="form.iva"
                        class="w-full"
                        id="iva"
                        name="iva"
                    >
                        <option value="">Select</option>
                        <option value="0">0</option>
                        <option value="16">16</option>
                    </x-ui.input.select>
                    <x-ui.input.error for="iva" />
                </div>
            </div>

            <div class="flex justify-between mt-4 border-t border-gray-50 p-4">
                <div>
                    <!-- Other buttons here -->
                </div>
                <div>
                    <x-ui.button type="submit">Save</x-ui.button>
                </div>
            </div>
        </form>
    </div>
</div>
