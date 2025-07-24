@props(['size' => 'base','tag'])

@php
    $classes = "rounded-full font-medium bg-blue-900/30 text-blue-300 group-hover:bg-blue-900/50 transition-colors duration-200";

    if ($size === 'base') {
        $classes .= ' px-4 py-2 text-xs';
    } elseif ($size === 'small') {
        $classes .= ' px-2 py-0.5 text-[10px]';
    }
@endphp

<div class="{{ $classes }}">
    {{ $slot }}
</div>
