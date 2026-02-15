@props(['disabled' => false, 'toy' => null])

<select @disabled($disabled)
    {{ $attributes->merge(['class' => 'border border-[#FF6E7F] bg-white text-[#353e43] focus:border-[#FF6E7F] focus:ring-[#FF6E7F] shadow-sm']) }}>
    <option value="Alive" {{ old('status', $toy->status ?? '') === 'Alive' ? 'selected' : '' }}>Alive</option>
    <option value="Deceased" {{ old('status', $toy->status ?? '') === 'Deceased' ? 'selected' : '' }}>Deceased</option>
</select>
