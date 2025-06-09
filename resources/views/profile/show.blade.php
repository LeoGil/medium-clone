<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="flex">
                    <div class="flex-1 pr-8">
                        <h1 class="text-4xl">
                            {{ $user->name }}
                        </h1>
                        <div class="mt-8">
                            @forelse ($posts as $post)
                                <x-post-item :post="$post" />
                            @empty
                                <div class="flex bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-8">
                                    <div class="p-5 flex-1">
                                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">No posts found</h5>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="w-[320px] border-l px-8">
                        <x-user-avatar :user="$user" w="32" h="32" />
                        <x-follow-ctr :user="$user">
                            <h2 class="font-semibold text-lg text-gray-800">
                                {{ $user->name }}
                            </h2>
                            <div class="mt-2">
                                <p class="text-gray-600">
                                   <span x-text="followersCount"></span> followers
                                </p>
                            </div>
                            <div class="mt-2">
                                <p>
                                    {{ $user->bio }}
                                </p>
                            </div>
                            @if (auth()->user() && auth()->user()->id !== $user->id)
                                <div class="mt-4">
                                    <button 
                                        @click="follow()"
                                        class="px-4 py-1 rounded-full text-white" 
                                        x-text="following ? 'Unfollow' : 'Follow'"
                                        :class="following ? 'bg-red-600' : 'bg-gray-800'">
                                    </button>
                                </div>
                            @endauth
                        </x-follow-ctr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
