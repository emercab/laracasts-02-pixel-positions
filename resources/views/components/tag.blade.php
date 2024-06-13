@props(['tag', 'size' => 'md'])

@php
  $classes = 'py-1 bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300';

  if ($size === 'sm') {
      $classes .= ' px-2 text-2xs';
  } elseif ($size === 'md') {
      $classes .= ' px-5 text-md';
  }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">
  {{ $tag->name }}
</a>
