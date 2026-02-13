<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 text-[#FF4366] bg-transparent text-[#FF4366] border border-[3.5px] border-[#FF4366] shadow-[0_5px_0_rgb(255_67_102)] hover:bg-[#FF4366] hover:text-white transition duration-300 ease-in-out hover:translate-y-2 hover:shadow-[0_0_0_rgb(255_67_102)]']) }}>
    {{ $slot }}
</button>
