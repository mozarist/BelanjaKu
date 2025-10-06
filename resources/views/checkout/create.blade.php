<x-app-layout>

    <div class="flex flex-col items-center justify-center min-h-[75vh] w-full h-full">
        <div class="flex gap-5 items-start justify-start w-full">

            <div class="flex-1 flex flex-col gap-5 p-5 bg-white border border-zinc-500 rounded-2xl">
                <img src="" alt="" class="w-full h-full aspect-square border border-zinc-500 rounded-xl">

                <div class="space-y-0 border-b border-zinc-300 pb-5">
                    <h6 class="text-2xl font-semibold">Nama Produk</h6>
                    <p class="text-sm text-rose-600 font-semibold">Nama Penjual</p>
                </div>

                <div class="space-y-2">
                    <p class="text-sm text-zinc-700 leading-tight">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum eligendi exercitationem
                        consequuntur facilis vero ipsum, sunt suscipit, ad excepturi in omnis. Rem cupiditate nulla ex?
                    </p>
                </div>
            </div>


            <div class="flex-2">
                <form action="{{ route('checkout.create') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-4 w-full self-center p-5 rounded-2xl border border-zinc-800 bg-gradient-to-tr from-zinc-100 to-white shadow-lg">
                    @csrf

                    <h2 class="text-2xl font-semibold mb-4">Checkout</h2>

                    <div id="imgPreview" class="mt-3 hidden">
                        <p class="text-xs mb-2">Preview:</p>
                        <img id="previewEl" src="#" alt="preview"
                            class="max-h-48 hover:max-h-fit w-full rounded-md object-cover border border-zinc-700" />
                    </div>

                    <label class="block ">
                        <span class="text-sm">Nama Produk</span>
                        <input type="text" name='nama' required value="{{ $product->nama }}" readonly
                            class="mt-1 block w-full rounded-lg bg-transparent border border-zinc-700 px-3 py-2 placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-zinc-600" />
                    </label>

                    <div class=" flex gap-4 items-center w-full">
                        <label class="flex-1">
                            <span class="text-sm">Harga (IDR)</span>
                            <input type="number" min="250" value="{{ $product->harga }}" step="50"
                                name="harga" required readonly
                                class="mt-1 w-full rounded-lg bg-transparent border border-zinc-700 px-3 py-2 placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-zinc-600" />
                        </label>

                        <label class="flex-1">
                            <span class="text-sm">Jumlah barang</span>
                            <input type="number" min="0" value="{{ $product->stok }}" name="stok" required
                                class="mt-1 w-full rounded-lg bg-transparent border border-zinc-700 px-3 py-2 placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-zinc-600" />
                        </label>
                    </div>

                    <label for="status_barang" class="block ">
                        <span class="text-sm">Metode Pembayaran</span>

                        <select name="status"
                            class="mt-1 block w-full rounded-lg bg-zinc-950 text-white border border-zinc-700 px-3 py-2 placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-zinc-600"
                            required>
                            <option value="cod" class="bg-zinc-950 text-white">COD (Cash on Delivery)</option>
                            <option value="bank" class="bg-zinc-950 text-white">Transfer via Bank</option>
                        </select>
                    </label>

                    <div class="flex items-center justify-end gap-3 pt-2">
                        <a href="/seller"
                            class="px-8 py-2 rounded-md bg-zinc-950 text-sm text-zinc-300 hover:bg-zinc-800">
                            Batal
                        </a>
                        <button type="submit"
                            class="px-8 py-2 rounded-md bg-gradient-to-tr from-indigo-600 via-rose-600 to-orange-600 text-white text-sm hover:brightness-110">
                            Checkout Produk Ini
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</x-app-layout>
