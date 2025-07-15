<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-bold mb-2">{{ $post->title }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Categoria: {{ $post->category->name }}</p>
                    <div class="text-base leading-relaxed">
                        {{ $post->content }}
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('posts.index') }}" class="text-blue-600 dark:text-blue-400 hover:underline">← Voltar para todos os posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
