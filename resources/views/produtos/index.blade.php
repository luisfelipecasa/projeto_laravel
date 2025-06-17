<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Produtos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <x-link-button href="{{ route('produtos.create') }}">
                        + Adicionar Produto
                    </x-link-button>
                </div>

                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">Seus produtos</h2>

                    <div class="flex flex-wrap justify-center gap-6">
                        @foreach ($produtos as $produto)
                            <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden w-full" style="max-width: 200px;">
                                @if ($produto->image)
                                    <img src="{{ asset('storage/' . $produto->image) }}" alt="Imagem de {{ $produto->nome }}"
                                        class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 flex items-center justify-center bg-gray-300 dark:bg-gray-600 text-gray-500 dark:text-gray-300">
                                        Sem imagem
                                    </div>
                                @endif

                                <div class="p-4 text-gray-900 dark:text-gray-100">
                                    <h3 class="text-lg font-semibold mb-2">{{ $produto->nome }}</h3>
                                    <p class="text-sm mb-1">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                                    <p class="text-sm mb-3">{{ $produto->descricao }}</p>

                                    <div class="flex justify-between items-center mt-4">
                                        <a href="{{ route('keep.editar', $produto->id) }}"
                                           class="text-blue-600 dark:text-blue-400 hover:underline">Editar</a>

                                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST"
                                              onsubmit="return confirm('Tem certeza que deseja apagar este produto?');">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="text-red-600 dark:text-red-400 hover:underline">Apagar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if($produtos->isEmpty())
                        <p class="mt-6 text-gray-600 dark:text-gray-400">Nenhum produto cadastrado ainda.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
