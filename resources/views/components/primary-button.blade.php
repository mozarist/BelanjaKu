<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-tr from-zinc-950 to-zinc-800 hover:from-zinc-900 hover:to-zinc-700 rounded-md text-sm text-white tracking-widest transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
