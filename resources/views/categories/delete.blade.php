<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Deseja realmente excluir esse registro de Categoria?') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('categories.destroy', $category->id)}}">
                        @csrf
                        @method('DELETE')
                        <div>
                            <x-label for="descricao" :value="__('Descrição')" />
                            <x-input id="descricao" class="block mt-1 w-full" type="text"
                                     name="descricao" disabled
                                     value="{{$category->name}}"/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Excluir') }}
                            </x-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
