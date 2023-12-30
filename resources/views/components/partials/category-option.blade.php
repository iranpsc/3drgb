
@props(['category', 'level' => 0])

<option value="{{ $category->id }}">{{ str_repeat('-', $level) . $category->name }}</option>
@if ($category->children)
    @foreach ($category->children as $child)
        <x-partials.category-option :category="$child" :level="$level + 1" />
    @endforeach
@endif