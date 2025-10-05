<x-app-layout>

    <div class="flex flex-col md:flex-row gap-24 w-full">

        <div class="flex-1">
            <img src="{{ Asset('storage/' . $product->gambar) }}" alt=""
                class="w-full aspect-square object-cover border border-zinc-300 rounded-md">
        </div>

        <div class="flex-1 flex flex-col gap-5 justify-evenly">

            <!-- Detail produk -->
            <div class="space-y-5">
                <h1 class="text-4xl font-semibold">{{ $product->nama }}</h1>
                <p class="text-3xl font-semibold">Rp{{ number_format($product->harga, 0, ',', '.') }},00</p>

                <div class="space-y-0">
                    <h4 class="text-xl font-semibold">Deskripsi Produk:</h4>
                    <p class="text-base text-zinc-700 leading-tight">{{ $product->deskripsi }}</p>
                </div>

                <p class="text-xl font-semibold">Stok: {{ $product->stok }}</p>
            </div>

            <!-- Kalau pemilik produk yang view produknya -->
            @auth
                @if ($product->user_id === auth()->id())
                    <div class="flex gap-2 items-center">
                        <a href="{{ route('products.edit', $product->id) }}">
                            <x-primary-button>
                                Edit Produk
                            </x-primary-button>
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-danger-button>Hapus Produk Ini</x-danger-button>
                        </form>
                    </div>

                @else
                    <div class="flex gap-2 items-center">
                        <x-primary-button>
                            Masukkan ke keranjang
                        </x-primary-button>
                        
                        <x-secondary-button>
                            Checkout Sekarang
                        </x-secondary-button>
                    </div>
                @endif
            @endauth

        </div>

    </div>

</x-app-layout>