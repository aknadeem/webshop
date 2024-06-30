<div class="grid grid-cols-4 gap-4 mt-12">
    {{-- Because she competes with no one, no one can compete with her. --}}
    @foreach($this->products as $product)
        <div>
                <img src="/{{$product->image?->path}}" alt="no image">
                <h2 class="font-medium text-lg">{{ $product->name}}</h2>
                <span class="text-gray-700 text-sm">{{ $product->price}}</span>
        </div>

    @endforeach
</div>
