<x-tiptap-menu {{ $attributes->merge(['class' => 'bg-white border flex space-x-2 px-3 py-2 rounded-t text-sm w-full']) }}>
	<x-haunt::tiptap.menu-item action="toggleBold">
		B
	</x-haunt::tiptap.menu-item>
	<x-haunt::tiptap.menu-item action="toggleItalic">
		I
	</x-haunt::tiptap.menu-item>
	<x-haunt::tiptap.menu-item action="toggleStrike">
		S
	</x-haunt::tiptap.menu-item>
</x-tiptap-menu>
