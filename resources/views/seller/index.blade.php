<x-app-layout>

    <!-- welcoming user -->
    <div class="bg-gradient-to-tl from-indigo-600 via-rose-600 to-orange-600 overflow-hidden shadow-sm sm:rounded-md">
        <p class="p-5 text-white font-semibold">
            Selamat datang kembali, {{ Auth::user()->name }}!
        </p>
    </div>


    <!-- analytics -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 w-full pb-5">

        <!-- card -->
        <x-analytics-card title="Total Produk" data="{{ $product->count() }}" />

        <x-analytics-card title="Total Penjualan" data="0" />

        <x-analytics-card title="Total Pendapatan" data="0" />

        <x-analytics-card title="Pesanan Pending" data="0" />

    </div>


    <!-- products list -->
    <div class="space-y-2">
        <h3 class="text-6xl font-semibold">
            Daftar Produk
        </h3>

        <h4 class="text-xl">
            Daftar Produk di Toko {{ Auth::user()->name }}
        </h4>
    </div>

    <div
        class="flex gap-5 justify-between items-center bg-gradient-to-tr from-zinc-100 to-white overflow-hidden border border-zinc-500 sm:rounded-md p-5">
        <div class="text-zinc-950">
            <h4 class="text-xl font-semibold">
                Kelola Produk
            </h4>
            <p>Kelola produk yang akan anda jual di katalog toko anda.</p>
        </div>

        <a href="seller/products/create"
            class="bg-gradient-to-tr from-zinc-950 to-zinc-700 text-white border border-zinc-800 hover:underline hover:brightness-90 transition px-4 py-2 rounded-md">
            + Tambah Produk
        </a>
    </div>

    @if ($product->isEmpty())
        <p
            class="bg-transparent text-rose-600 text-center font-semibold p-5 py-24 w-full border-2 border-rose-600 border-dashed rounded-md">
            Anda belum memiliki produk di katalog anda</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols:3 xl:grid-cols-3 2xl-grid-cols-4 gap-5">

            @foreach ($product as $p)
                <div class="flex flex-col gap-5 bg-white p-5 w-full h-full border border-zinc-500 shadow-sm rounded-xl">
                    <a href="{{ route('products.show', $p->id) }}">
                        <img src="{{ asset('storage/' . $p->gambar) }}" alt=""
                            class="flex-2 w-full aspect-square object-cover border border-zinc-500 rounded-xl">
                        <div class="flex-1 flex flex-col gap-5 justify-between w-full h-full">
                            <div class="space-y-2">
                                <h6 class="text-lg font-semibold line-clamp-2 leading-tight">
                                    {{ $p->nama }}
                                </h6>

                                <p class="text-sm leading-tight line-clamp-2">
                                    {{ $p->deskripsi }}
                                </p>
                            </div>

                            <div class="flex flex-col gap-5">
                                <div class="space-y-2">

                                    <div class="flex items-center gap-5">
                                        <p class="text-base font-semibold leading-none">
                                            Stok: {{ $p->stok }}
                                        </p>

                                        <p class="text-base font-semibold leading-none">
                                            Status:
                                            <span class="@if ($p->status === 'aktif') text-green-600 @else text-red-600 @endif">
                                                {{ $p->status }}
                                            </span>
                                        </p>
                                    </div>

                                    <h6 class="text-lg text-rose-600 font-semibold leading-tight">
                                        Rp {{ number_format($p->harga, 0, ',', '.') }},00
                                    </h6>

                                </div>

                                <a href="{{ route('products.edit', $p->id) }}">
                                    <x-primary-button class="w-full text-center items-center justify-center">
                                        Kelola produk ini
                                    </x-primary-button>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    @endif

</x-app-layout>