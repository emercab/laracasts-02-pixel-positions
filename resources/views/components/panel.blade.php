@php
  $classes = 'flex p-4 bg-white/5 hover:bg-white/10 rounded-xl border border-transparent hover:border-blue-800 cursor-pointer transition-all duration-300 group';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
  {{ $slot }}
</div>