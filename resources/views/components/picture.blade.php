@props([
    'src',
    'alt' => '',
    'width' => null,
    'height' => null,
    'class' => ''
])

<img 
    src="{{ Statamic::tag('glide')->src($src)->width($width)->height($height)->fetch() }}" 
    alt="{{ $alt }}" 
    @if($width) width="{{ $width }}" @endif
    @if($height) height="{{ $height }}" @endif
    class="{{ $class }}"
>
