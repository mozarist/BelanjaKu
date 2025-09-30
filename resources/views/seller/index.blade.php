<x-app-layout>

    <div class="mx-auto">
        <div
            class="bg-gradient-to-r from-indigo-600 to-rose-600 overflow-hidden border border-indigo-600 shadow-sm sm:rounded-md">
            <p class="p-5 text-white font-semibold">
                Selamat datang kembali, {{ Auth::user()->name }}!
            </p>
        </div>
    </div>

    <div class="mx-auto">
        <div
            class="flex gap-4 justify-between items-center bg-gradient-to-tr from-zinc-100 to-white overflow-hidden border border-zinc-300 shadow-sm sm:rounded-md p-5">
            <div class="text-zinc-950">
                <h4 class="text-xl font-semibold">
                    Kelola Produk
                </h4>
                <p>Kelola produk anda dengan mengeklik tombol disamping</p>
            </div>

            <a href="seller/products/create" class="bg-gradient-to-tr from-zinc-950 to-zinc-700 text-white border border-zinc-800 hover:underline hover:brightness-90 transition px-4 py-2 rounded-md">
                + Tambah Produk
            </a>
        </div>
    </div>

    <hr class="text-zinc-500">

    <h4 class="text-3xl font-semibold">
        Daftar Produk di Toko {{ Auth::user()->name }}
    </h4>

    {{-- @if ($product->isEmpty()) --}}
        
    {{-- @else --}}
        
    {{-- @endif --}}

</x-app-layout>
