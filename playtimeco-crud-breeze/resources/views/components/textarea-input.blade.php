@props(['disabled' => false])

<textarea @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-5 border-[#FF6E7F] bg-white-900 text-[#353e43] border focus:border-[#FF6E7F] focus:ring-[#FF6E7F] shadow-sm']) }}></textarea>
