<div class="flex bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-8">
    <div class="p-5 flex-1">
        <div class="flex gap-2 items-center mb-3">
            <x-user-avatar :user="$post->user" w="6" h="6" />
            <span class="text-sm font-medium text-gray-600 dark:text-white">
                {{ __('By') }} {{ $post->user->name }}
            </span>
        </div>
        <a href="{{ route('post.show', [$post->user->username, $post->slug]) }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
        </a>
        <div class="mb-5 font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($post->content, 100, '...') }}</div>
        <div class="flex gap-2 text-sm text-gray-600 ">
            {{ $post->created_at->diffForHumans() }}
            &bull;
            {{ $post->readTime() }} {{ __('min read') }}
            &bull;
            <a href="#" class="text-blue-600 hover:underline">{{ $post->category->name }}</a>
        </div>
    </div>
    <a href="#">
        <img class="rounded-l-lg w-48 h-full max-h-48 object-cover" src="{{ Storage::url($post->image) }}" alt="" />
    </a>
</div>