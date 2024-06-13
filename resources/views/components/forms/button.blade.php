@props(['bg' => 'blue-800', 'color' => 'white'])

@php
  $classes = "bg-{$bg} text-{$color} rounded-lg py-2 px-6 font-bold";
@endphp

<button {{ $attributes(['class' => $classes]) }}>
  {{ $slot }}
</button>
