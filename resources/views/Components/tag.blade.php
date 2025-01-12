@props(['size'=> 'base'])

@php
    $classes = "font-bold rounded-xl bg-white/10 houver:bg-white/25 transition-colors durations-300";

    if ($size === 'base'){
        $classes .= " px-5 py-1 text-sm";
    }
    if ($size === 'small'){
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp
<a href="#" class=" {{ $classes }}">{{ $slot }}</a>
