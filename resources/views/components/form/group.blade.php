@php
$classes = Str::squish("
    {$applyShowMargin('mb-3')}
");
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
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
                :placeholder="$attributes['placeholder']"
                :readonly="$attributes['readonly'] ?? false"
                :type="$attributes['type']"
                :value="$attributes['value']"
                :wire:model="$attributes['wire:model']"
            />
        @elseif($field === 'textarea')
            <x-haunt::form.label
                :content="$content"
                :for="$attributes['name']"
            />
            <x-haunt::form.textarea
                :class="!$errors->has($attributes['name']) ?: 'border-red-500'"
                :disabled="$attributes['disabled'] ?? false"
                :name="$attributes['name']"
                :placeholder="$attributes['placeholder']"
                :readonly="$attributes['readonly'] ?? false"
            >{{ $attributes['value'] }}</x-haunt::form.textarea>
        @elseif($field === 'select')
            <x-haunt::form.label
                :content="$content"
                :for="$attributes['name']"
            />
            <x-haunt::form.select
                :class="!$errors->has($attributes['name']) ?: 'border-red-500'"
                :disabled="$attributes['disabled'] ?? false"
                :name="$attributes['name']"
            >
                @foreach($options as $key => $value)
                    <option {{ $attributes['value'] === $key ? 'selected="selected"' : '' }} value="{{ $key }}">{{ $value }}</option>
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
