@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-indigo-700']) }}>
    {{ $value ?? $slot }}
</label>
