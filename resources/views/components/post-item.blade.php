<div class="flex bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-8">
    <div class="p-5 flex-1">
        @if (request()->is('/') || request()->is('post'))
            <div class="flex gap-2 items-center mb-3">
                <a href="{{ route('profile.show', $post->user) }}">
                    <x-user-avatar :user="$post->user" w="6" h="6" />
                </a>
                <span class="text-sm font-medium text-gray-600 dark:text-white">
                    <a href="{{ route('profile.show', $post->user) }}" class="hover:underline">{{ $post->user->name }}</a>
                </span>
            </div>
        @endif
        <a href="{{ route('post.show', [$post->user->username, $post->slug]) }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
        </a>
        <div class="mb-5 font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($post->content, 100, '...') }}</div>
        <div class="flex gap-2 text-sm text-gray-600 ">
            <span data-tooltip-target="tooltip-default-{{ $post->slug }}">{{ $post->created_at->diffForHumans() }}</span>
            <div id="tooltip-default-{{ $post->slug }}" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
               {{ $post->created_at->format('d M Y H:i') }}
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            &bull;
            {{ $post->readTime() }} {{ __('min read') }}
            &bull;
            <a href="#" class="text-blue-600 hover:underline">{{ $post->category->name }}</a>
        </div>
    </div>
    <a href="{{ route('post.show', [$post->user->username, $post->slug]) }}">
        <img class="rounded-l-lg w-48 h-full max-h-48 object-cover" src="{{ Storage::url($post->image) }}"
            alt="" />
    </a>
</div>
