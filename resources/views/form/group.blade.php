<div {{ $attributes }}>
    @if($alignment === 'horizontal')
        <div class="md:flex md:items-center md:space-x-6">
            <div class="md:w-1/4">
                <x-haunt::form.label :content="$content" :for="$attributes['name']" />
                @if($slot->toHtml() !== '')
                    <x-haunt::form.text :content="$slot" />
                @endif
            </div>
            <div class="flex-grow">
    @endif

    @if($alignment === 'vertical' && $field !== 'checkbox')
        <x-haunt::form.label :content="$content" :for="$attributes['name']" />
    @endif

    @if(!$field)
        {{ $slot }}
    @else
        @if($field === 'input')
            <x-haunt::form.input
                :class="!$errors->has($attributes['name']) ?: 'border-red-500'"
                :disabled="$attributes['disabled'] ?? false"
                :margin="$alignment !== 'horizontal'"
                :name="$attributes['name']"
                :readonly="$attributes['readonly'] ?? false"
                :type="$attributes['type']"
                :value="$attributes['value']"
            />
        @elseif($field === 'select')
            <x-haunt::form.select
                :class="!$errors->has($attributes['name']) ?: 'border-red-500'"
                :disabled="$attributes['disabled'] ?? false"
                :name="$attributes['name']"
                :value="$attributes['value']"
            >
                @foreach($options as $key => $value)
                    <option {{ $attributes['selected'] === $key ? 'selected="selected"' : '' }} value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </x-haunt::form.select>
        @elseif($field === 'checkbox')
            <x-haunt::form.checkbox
                :checked="$attributes['checked'] ?? false"
                :class="!$errors->has($attributes['name']) ?: 'border-red-500'"
                :name="$attributes['name']"
            />
        @endif
    @endif

    @if($alignment === 'horizontal')
            </div>
        </div>
    @endif
</div>
