<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <x-category-tabs />
                </div>
            </div>
            <div class="mt-8 text-gray-900">
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
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
