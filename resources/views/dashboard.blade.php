<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Produtos
        </h2>
        
    </x-slot>

    @if(session('msg'))
        <div id="msgProduto"><p>{{session('msg')}}</p></div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="headerProducs">
                <a href="/addProduct" ><button id="formButton">+ Adicionar</button></a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('show-products')
            </div>
        </div>
    </div>
</x-app-layout>
