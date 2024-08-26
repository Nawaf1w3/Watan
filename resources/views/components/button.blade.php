@props(['type', 'label', 'action'])

@php
    $classes = $type === 'edit' 
        ? 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' 
        : 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded';
    
    $icon = $type === 'edit' 
        ? 'fas fa-edit' 
        : 'fas fa-trash';
@endphp

<a href="{{ $action }}" class="{{ $classes }}">
    <i class="{{ $icon }}"></i> {{ $label }}
</a>
