<!-- Supervisor -->
<div>
    <x-input-label for="supervisor" :value="__('Supervisor')" />
    <x-text-input id="supervisor" class="block mt-1 w-full" type="number" min="1" name="supervisor"
        value="{{ old('supervisor', $toy->user_id ?? '') }}" autofocus autocomplete="supervisor" />
</div>

<!-- Alias -->
<div class="mt-4">
    <x-input-label for="alias" :value="__('Alias')" />

    <x-text-input id="alias" class="block mt-1 w-full" type="text" name="alias" required autocomplete="alias"
        value="{{ old('alias', $toy->alias ?? '') }}" />

</div>

<!-- Name -->
<div class="mt-4">
    <x-input-label for="name" :value="__('Name')" />

    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autocomplete="name"
        value="{{ old('name', $toy->name ?? '') }}" />

</div>

<!-- Gender -->
<div class="mt-4">
    <ul
        class="items-center w-full text-sm font-medium text-heading bg-neutral-primary-soft border border-[#FF6E7F] rounded-lg sm:flex">
        <li class="w-full border-b border-[#FF6E7F] sm:border-b-0 sm:border-r">
            <div class="flex items-center ps-3">
                <input id="horizontal-list-radio-license" type="radio"
                    value="Male" name="gender" @php $toy->gender == 'Male' ? 'checked' : '' @endphp
                    class="w-4 h-4 text-neutral-primary border-default-medium bg-neutral-secondary-medium rounded-full checked:border-[#FF6E7F] checked:accent-[#FF6E7F] focus:ring-2 focus:outline-none focus:ring-[#FF6E7F]-subtle border border-default appearance-none">
                <label for="horizontal-list-radio-license"
                    class="w-full py-3 select-none ms-2 text-sm font-medium text-heading">Male</label>
            </div>
        </li>
        <li class="w-full">
            <div class="flex items-center ps-3">
                <input id="horizontal-list-radio-passport" type="radio"
                    value="Female" name="gender"  @php $toy->gender == 'Male' ? 'checked' : '' @endphp
                    class="w-4 h-4 text-neutral-primary border-default-medium bg-neutral-secondary-medium rounded-full checked:border-[#FF6E7F] checked:accent-[#FF6E7F] focus:ring-2 focus:outline-none focus:ring-[#FF6E7F]-subtle border border-default appearance-none">
                <label for="horizontal-list-radio-passport"
                    class="w-full py-3 select-none ms-2 text-sm font-medium text-heading">Female</label>
            </div>
        </li>
    </ul>
</div>

<!-- Height and Weight -->
<div class="mt-4 grid grid-cols-2 gap-4">
    <div>
        <x-input-label for="height" :value="__('Height')" />

        <x-text-input id="height" class="block mt-1 w-full" type="number" name="height" required
            autocomplete="name" value="{{ old('height', $toy->height ?? '') }}" step="0.01" />
    </div>
    <div>
        <x-input-label for="weight" :value="__('Weight')" />

        <x-text-input id="weight" class="block mt-1 w-full" type="number" name="weight" required
            autocomplete="name" value="{{ old('weight', $toy->weight ?? '') }}" step="0.01" />
    </div>
</div>

<!-- Subject -->
<div class="mt-4">
    <x-input-label for="subject" :value="__('Subject')" />

    <x-text-input id="subject" class="block mt-1 w-full" type="number" min="1" name="subject" required
        autocomplete="name" value="{{ old('subject', $toy->subject ?? '') }}" />

</div>

<!-- Status -->
<div class="mt-4">
    <x-input-label for="status" :value="__('Status')" />

    <x-select-input id="status" class="block mt-1 w-full" name="status" required autocomplete="name"
        value="{{ old('status', $toy->status ?? '') }}" />

</div>

<!-- Creation Date -->
<div class="mt-4 ">
    <x-input-label for="creation_date" :value="__('Creation Date')" />

    <x-text-input id="creation_date" class="block mt-1 w-full" name="creation_date" type="date" required
        autocomplete="name" value="{{ old('creation_date', $toy->creation_date ?? '') }}" />

</div>

<!-- Species -->
<div class="mt-4 ">
    <x-input-label for="species" :value="__('Species')" />

    <x-text-input id="species" class="block mt-1 w-full" name="species" type="text" required autocomplete="name"
        value="{{ old('species', $toy->species ?? '') }}" />
</div>

<!-- Description -->
<div class="mt-4 ">
    <x-input-label for="description" :value="__('Description')" />

    <x-textarea-input id="description" class="block mt-1 w-full" name="description" required
        autocomplete="name" value="{{ old('description', $toy->description ?? '') }}">
    </x-textarea-input>
</div>
