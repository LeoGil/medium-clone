@props(['user', 'w' => 12, 'h' => 12])

@if ($user->image)
    <img src="{{ $user->imageUrl() }}" alt="{{ $user->name }}" class="w-{{ $w }} h-{{ $h }} rounded-full">
@else
    <img src="https://ui-avatars.com/api/?name={{ $user->name }}" alt="{{ $user->name }}" class="w-{{ $w }} h-{{ $h }} rounded-full">
@endif