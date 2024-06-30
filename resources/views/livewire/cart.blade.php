<div class="bg-white rounded-lg shadow p-5 mt-12">
    <table class="w-full">
        <thead>
            <tr>
                <th class="text-left">Product</th>
                <th class="text-left">Size</th>
                <th class="text-left">Color</th>
                <th class="text-left">Price</th>
                <th class="text-left">Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($this->items as $item)
                <tr>
                    <td>{{ $item->product?->name }}</td>
                    <td>{{ $item->variant->size }}</td>
                    <td>{{ $item->variant->color }}</td>
                    <td>{{ $item->product?->price }}</td>
                    <td>
                        <button wire:click="decreaseQuantity({{ $item->id }})">-</button>
                        {{ $item->quantity }}
                        <button wire:click="increaseQuantity({{ $item->id }})">+</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach($this->items as $item)
        {{ $item->id }}
    @endforeach
</div>
