@props(['employer', 'width' => 90, 'height' => 90])

@php
  $width = 'w-[' . $width . 'px]';
  $height = 'h-[' . $height . 'px]';
  $classes = 'rounded-xl ' . $width . ' ' . $height;
@endphp

<img src="{{ asset($employer->logo) }}" class="{{ $classes }}" alt="Employer Logo">
