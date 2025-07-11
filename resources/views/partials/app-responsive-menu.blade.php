@can('view-any', App\Models\User::class)
<x-responsive-nav-link
    href="{{ route('dashboard.users.index') }}"
    :active="request()->routeIs('dashboard.users.index')"
>
    {{ __('navigation.users') }}
</x-responsive-nav-link>
@endcan @can('view-any', App\Models\Producto::class)
<x-responsive-nav-link
    href="{{ route('dashboard.productos.index') }}"
    :active="request()->routeIs('dashboard.productos.index')"
>
    {{ __('navigation.productos') }}
</x-responsive-nav-link>
@endcan
