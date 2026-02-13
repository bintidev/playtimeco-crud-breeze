<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 text-[#484740] bg-[#FF6E7F] border border-[3.5px] border-[#484740] shadow-[0_5px_0_rgb(72_71_64)] hover:bg-[#FF9EAA] border transition duration-300 ease-in-out hover:translate-y-2 hover:shadow-[0_0_0_rgb(72_71_64)]']) }}>
    {{ $slot }}
</button>
