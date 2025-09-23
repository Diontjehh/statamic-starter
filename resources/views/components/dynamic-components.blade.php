@props([
    'page',
])

<div class="py-6 lg:py-10">
    @foreach($page->dynamic_components as $index => $component)
        @if ($component instanceof \Statamic\Fields\Values)
            @include('dynamic_components.' . $component->type, ['content' => $component])
        @endif
    @endforeach
</div>