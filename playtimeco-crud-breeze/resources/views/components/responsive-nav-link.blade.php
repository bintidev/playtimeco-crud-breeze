@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-[#FFB544] text-start text-base font-medium text-[#FFB544] bg-[#FFF7EC] focus:outline-none focus:text-[#FFB544] focus:bg-[#FFF7EC] focus:border-[#FFB544] transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-[#ceeef5] hover:bg-[#69C9DD]/70 hover:border-[#ceeef5] focus:outline-none focus:text-[#ceeef5] focus:bg-[#69C9DD]/70 focus:border-[#ceeef5] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
