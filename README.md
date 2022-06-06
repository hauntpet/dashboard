# hauntpet/dashboard

The shared dashboard between the main app and a game.

## Documentation

### Installation
```bash
composer require hauntpet/dashboard
```

## Components

### Alert
| Component | Attribute | Default | Description |
| --- | --- | --- | --- |
| alert | buffer | medium | The padding applied to the sections. Can be small, medium, or large. |
| alert | content | null | The content to show instead of the slot. |
| alert | outlined | false | Whether to show an outlined block. |
| alert | showMargin | true | Whether to show a bottom margin. |
| alert | showRounded | true | Whether to show rounded corners. |
| alert | theme | light | Can be info, error, success, light, dark, primary, or clear. |

```html
<x-haunt::alert content="Alert" />
```

### Button
| Component | Attribute | Default | Description |
| --- | --- | --- | --- |
| button | buffer | medium | The padding applied to the sections. Can be small, medium, or large. |
| button | content | null | The content to show instead of the slot. |
| button | fullWidth | false | Whether to to force the block to full width. |
| button | pill | false | Whether to show a pill shape. |
| button | showRounded | true | Whether to show rounded corners. |
| button | theme | light | Can be info, error, success, light, dark, primary, or clear. |

```html
<x-haunt::button content="Button" />
```

### Card
| Component | Attribute | Default | Description |
| --- | --- | --- | --- |
| card | applyOverflow | true | Whether to apply the overflow classes. |
| card | applyRounded | true | Whether to apply the rounded classes. |
| card | buffer | medium | The padding applied to the sections. Can be small, medium, or large. |
| card | level | 2 | The level of shadow. Can be 0, 1, 2, 3, 4, 5, or 6. |
| card | showBorder | false | Whether to show a border. |
| card | showMargin | true | Whether to show a bottom margin. |
| card | theme | light | Can be info, error, success, light, dark, primary, or clear. |
| card.header | content | null | The content to show instead of the slot. |
| card.footer | content | null | The content to show instead of the slot. |

```html
<x-haunt::card>
    <x-haunt::card.header>Header</x-haunt::card.header>

    <x-haunt::card.content>
        Content
    </x-haunt::card.content>

    <x-haunt::card.footer>Footer</x-haunt::card.footer>
</x-haunt::card>
```
