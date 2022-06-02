<div {{ $attributes }}>
    @if($field === null)
        <x-haunt::form.label
            :content="$content"
            :for="$attributes['name']"
        />
        {{ $slot }}
    @else
        @if($field === 'input')
            <x-haunt::form.label
                :content="$content"
                :for="$attributes['name']"
            />
            <x-haunt::form.input
                :class="!$errors->has($attributes['name']) ?: 'border-red-500'"
                :disabled="$attributes['disabled'] ?? false"
                :name="$attributes['name']"
                :readonly="$attributes['readonly'] ?? false"
                :type="$attributes['type']"
                :value="$attributes['value']"
            />
        @elseif($field === 'select')
            <x-haunt::form.label
                :content="$content"
                :for="$attributes['name']"
            />
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
                :class="!$errors->has($attributes['name']) ?: 'border-red-500'"
                :content="$content"
                :name="$attributes['name']"
                :checked="$attributes['checked'] ?? false"
            />
        @endif
    @endif

    <x-haunt::form.errors :name="$attributes['name']" />
</div>
