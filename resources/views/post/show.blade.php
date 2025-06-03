<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="font-bold text-3xl mb-4">{{ $post->title }}</h1>
                <div class="flex gap-4">
                    <x-user-avatar :user="$post->user" />
                    <div>
                        <div class="flex gap-2 items-center">
                            <a href="{{ route('profile.show', $post->user) }}" class="font-bold text-lg text-gray-600 hover:underline hover:text-blue-600">{{ $post->user->name }}</a>
                            &bull;
                            <a href="#" class="text-blue-600 hover:underline">{{ __('Follow') }}</a>
                        </div>
                        <div class="flex gap-2 text-sm text-gray-600">
                            {{ $post->readTime() }} {{ __('min read') }}
                            &bull;
                            {{ $post->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
                
                <x-like-section />

                <div class="mt-8">
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full h-auto object-cover rounded shadow">
                </div>
                <div class="mt-8 text-justify">
                    {!! $post->content !!}
                </div>

                <div class="mt-8">
                    <span class="px-4 py-2 bg-gray-200 rounded-2xl">
                        {{ $post->category->name }}
                    </span>
                </div>
                <x-like-section />
            </div>
        </div>
    </div>
</x-app-layout>
