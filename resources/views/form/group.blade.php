<div>
    <x-haunt::form.label :for="$attributes['name']" :content="$content" />
    <x-haunt::form.input :name="$attributes['name']" :type="$attributes['type'] ?? 'text'" :value="$attributes['value'] ?? null" />
</div>
