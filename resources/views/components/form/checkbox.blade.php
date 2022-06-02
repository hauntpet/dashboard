<input type="hidden" name="{{ $attributes['name'] }}" value="0">
<input {{ $attributes->merge(['class' => "align-middle appearance-none cursor-pointer h-4 inline-block rounded w-4 {$applyInputStyles()} {$applyLabel()}"]) }} @checked($checked) type="checkbox" value="1" />

@if($content !== '')
    <x-form.label :content="$content" inline />
@endif
