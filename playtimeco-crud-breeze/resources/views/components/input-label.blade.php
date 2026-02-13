@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#050302]-700']) }}>
    {{ $value ?? $slot }}
</label>
