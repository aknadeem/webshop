<x-nav-link href="{{ route('cart') }}" :active="request()->routeIs('cart')">
    {{ __('Your Cart') }} ({{ $this->count ?? 0 }})
</x-nav-link>
