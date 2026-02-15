<!-- Supervisor -->
<div>
    <x-input-label for="user_id" :value="__('Supervisor')" />

    <x-text-input id="user_id" class="block mt-1 w-full" type="number" min="1" name="user_id"
        value="{{ old('user_id', $toy->user_id ?? '') }}" autofocus autocomplete="user_id" />

    <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
</div>

<!-- Alias -->
<div class="mt-4">
    <x-input-label for="alias" :value="__('*Alias')" />

    <x-text-input id="alias" class="block mt-1 w-full" type="text" name="alias" autocomplete="alias"
        value="{{ old('alias', $toy->alias ?? '') }}" />

    <x-input-error :messages="$errors->get('alias')" class="mt-2" />

</div>

<!-- Name -->
<div class="mt-4">
    <x-input-label for="name" :value="__('*Name')" />

    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" autocomplete="name"
        value="{{ old('name', $toy->name ?? '') }}" />

    <x-input-error :messages="$errors->get('name')" class="mt-2" />

</div>

<!-- Gender -->
<div class="mt-4">
    <ul
        class="items-center w-full text-sm font-medium text-heading bg-neutral-primary-soft border border-[#FF6E7F] rounded-lg sm:flex">
        <li class="w-full border-b border-[#FF6E7F] sm:border-b-0 sm:border-r">
            <div class="flex items-center ps-3">
                <input id="horizontal-list-radio-license" type="radio" value="Male" name="gender"
                    {{ old('gender', $toy->gender ?? '') == 'Male' ? 'checked' : '' }}
                    class="w-4 h-4 text-neutral-primary border-default-medium bg-neutral-secondary-medium rounded-full checked:border-[#FF6E7F] checked:accent-[#FF6E7F] focus:ring-2 focus:outline-none focus:ring-[#FF6E7F]-subtle border border-default appearance-none">
                <label for="horizontal-list-radio-license"
                    class="w-full py-3 select-none ms-2 text-sm font-medium text-heading">Male</label>
            </div>
        </li>
        <li class="w-full">
            <div class="flex items-center ps-3">
                <input id="horizontal-list-radio-passport" type="radio" value="Female" name="gender"
                    {{ old('gender', $toy->gender ?? '') == 'Female' ? 'checked' : '' }}
                    class="w-4 h-4 text-neutral-primary border-default-medium bg-neutral-secondary-medium rounded-full checked:border-[#FF6E7F] checked:accent-[#FF6E7F] focus:ring-2 focus:outline-none focus:ring-[#FF6E7F]-subtle border border-default appearance-none">
                <label for="horizontal-list-radio-passport"
                    class="w-full py-3 select-none ms-2 text-sm font-medium text-heading">Female</label>
            </div>
        </li>
    </ul>

    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
</div>

<!-- Height and Weight -->
<div class="mt-4 grid grid-cols-2 gap-4">
    <div>
        <x-input-label for="height" :value="__('Height')" />

        <x-text-input id="height" class="block mt-1 w-full" type="number" name="height" autocomplete="name"
            value="{{ old('height', $toy->height ?? '') }}" step="0.01" />

        <x-input-error :messages="$errors->get('height')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="weight" :value="__('Weight')" />

        <x-text-input id="weight" class="block mt-1 w-full" type="number" name="weight" autocomplete="name"
            value="{{ old('weight', $toy->weight ?? '') }}" step="0.01" />

        <x-input-error :messages="$errors->get('weight')" class="mt-2" />
    </div>
</div>

<!-- Subject -->
<div class="mt-4">
    <x-input-label for="subject" :value="__('*Subject')" />

    <x-text-input id="subject" class="block mt-1 w-full" type="number" min="1" name="subject"
        autocomplete="name" value="{{ old('subject', $toy->subject ?? '') }}" />

    <x-input-error :messages="$errors->get('subject')" class="mt-2" />

</div>

<!-- Status -->
<div class="mt-4">
    <x-input-label for="status" :value="__('*Status')" />

    <x-select-input id="status" class="block mt-1 w-full" name="status" autocomplete="name" :toy="$toy" />

    <x-input-error :messages="$errors->get('status')" class="mt-2" />

</div>

<!-- Creation Date -->
<div class="mt-4 ">
    <x-input-label for="creation_date" :value="__('*Creation Date')" />

    <x-text-input id="creation_date" class="block mt-1 w-full" name="creation_date" type="date" autocomplete="name"
        value="{{ old('creation_date', $toy->creation_date ?? '') }}" />

    <x-input-error :messages="$errors->get('creation_date')" class="mt-2" />

</div>

<!-- Species -->
<div class="mt-4 ">
    <x-input-label for="species" :value="__('*Species')" />

    <x-text-input id="species" class="block mt-1 w-full" name="species" type="text" autocomplete="name"
        value="{{ old('species', $toy->species ?? '') }}" />

    <x-input-error :messages="$errors->get('species')" class="mt-2" />
</div>

<!-- Visual -->
<div class="mt-4">
    <x-input-label for="visual" :value="__('Visual')" />

    <x-text-input id="visual" class="block mt-1 w-full" type="text" name="visual" autocomplete="name"
        value="{{ old('visual', $toy->visual ?? '') }}" />

    <x-input-error :messages="$errors->get('visual')" class="mt-2" />

</div>

<!-- Description -->
<div class="mt-4 ">
    <x-input-label for="description" :value="__('Description')" />

    <x-textarea-input id="description" class="block mt-1 w-full" name="description" autocomplete="name">
        {{ old('description', $toy->description ?? '') }}
    </x-textarea-input>

    <x-input-error :messages="$errors->get('description')" class="mt-2" />
</div>
