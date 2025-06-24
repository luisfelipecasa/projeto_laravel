<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Meu carrinho
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">

                <div class="p-6">

                    <div class="flex flex-wrap justify-center gap-6">
                        @if(count($carrinho) > 0)
                            @foreach ($carrinho as $id => $item)
                                <div
                                    class="w-full sm:w-64 bg-white dark:bg-gray-700 rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">
                                        {{ $item['nome'] }}
                                    </h3>
                                    <p class="text-sm text-gray-700 dark:text-gray-300 mb-1">
                                        R$ {{ number_format($item['preco'], 2, ',', '.') }}
                                    </p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        {{ $item['descricao'] }}
                                    </p>
                                    <form action="{{ route('carrinho.remover', $item['id']) }}" method="GET"
                                        onsubmit="return confirm('Tem certeza que deseja remover este produto?');">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit"
                                            class="text-red-600 dark:text-red-400 hover:underline">Remover</button>
                                    </form>
                                </div>
                            @endforeach
                        @else
                            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Seu carrinho está vazio</h3>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>