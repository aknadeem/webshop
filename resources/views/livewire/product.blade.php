<div class="grid grid-cols-2 gap-10 my-12">
    <div class="space-y-4" x-data="{ image: '/{{$this->product->image?->path}}' }">
        <div class="bg-white p-5 rounded-lg shadow">
            <img x-bind:src="image" alt="no image" />
        </div>

        <div class="grid grid-cols-4 gap-10">
            @foreach($this->product->productImages as $image)
                <div class="bg-white p-5 rounded shadow">
                    <img src="/{{$image->path}}" @click="image = '/{{$image->path}}'" class="rounded cursor-pointer" alt="no image" />
                </div>
            @endforeach
        </div>
    </div>
    <div>
        <h1 class="text-3xl font-medium"> {{$this->product?->name}} </h1>
        <div class="text-xl text-gray-700"> {{$this->product?->price}} </div>

        <div class="mt-4">
            {{ $this->product?->description }}
        </div>
        
        <div class="mt-4 space-y-4">
            <select wire:model="variant" class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-800">
                @foreach($this->product->variants as $variant)
                    <option value="{{$variant->id}}"> {{$variant->size}} / {{$variant->color}} </option>

                @endforeach
            </select>

            @error('variant')
                <div class="mt-2 text-red-600 text-sm"> {{$message}} </div>
            @enderror
            <x-button wire:click="addToCart">Add to Cart</x-button>
        </div>
        
    </div>
</div>
