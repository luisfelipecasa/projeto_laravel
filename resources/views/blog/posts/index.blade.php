<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">

                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">Todos os posts</h2>

                    <div class="flex justify-center gap-6" style="flex-direction: column;">
                        @foreach ($posts as $post)
                            <a href="{{ route('posts.show', $post->id) }}">
                                <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden w-full">

                                    <div class="p-4 text-gray-900 dark:text-gray-100">
                                        <h3 class="text-lg font-semibold mb-2">{{ $post->title }}</h3>
                                        <p class="text-sm mb-3"><b>{{ $post->category->name}}</b></p>
                                        <p class="text-sm mb-3">{{ $post->content }}</p>

                                        <div class="flex justify-between items-center mt-4">
                                            <a href="{{ route('posts.edit', $post->id) }}"
                                                class="text-blue-600 dark:text-blue-400 hover:underline">Editar</a>

                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                                onsubmit="return confirm('Tem certeza que deseja apagar este post?');">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                    class="text-red-600 dark:text-red-400 hover:underline">Apagar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    @if($posts->isEmpty())
                        <p class="mt-6 text-gray-600 dark:text-gray-400">Nenhum produto cadastrado ainda.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>