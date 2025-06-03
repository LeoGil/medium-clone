@props(['user', 'w' => 12, 'h' => 12])

@php
    $classes = "w-{$w} h-{$h} object-cover rounded-full";
@endphp

@if ($user->image)
    <img src="{{ $user->imageUrl() }}" alt="{{ $user->name }}" class="{{ $classes }}">
@else
    <img src="https://ui-avatars.com/api/?name={{ $user->name }}" alt="{{ $user->name }}" class="{{ $classes }}">
@endif