<div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
  <ul class="flex justify-center flex-wrap -mb-px">
    {{-- Aba "All" --}}
    <li class="me-2">
      <a href="{{ route('post.index') }}"
         @class([
           'inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300',
           'border-blue-600 text-blue-600 dark:text-blue-500' => !request()->query('category'),
           'border-transparent' => request()->query('category'),
         ])>
        All
      </a>
    </li>

    {{-- Abas de categorias --}}
    @foreach ($categories as $category)
      <li class="me-2">
        <a href="{{ route('post.index', ['category' => $category->slug]) }}"
           @class([
             'inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300',
             'border-blue-600 text-blue-600 dark:text-blue-500' => request()->query('category') === $category->slug,
             'border-transparent' => request()->query('category') !== $category->slug,
           ])>
          {{ $category->name }}
        </a>
      </li>
    @endforeach
  </ul>
</div>
