<script src="/js/app.js" defer></script>
<link rel="stylesheet" href="/css/app.css">
<title><?php echo "Cardápio" ?></title> 
<body onload="showLoading()"></body>
<x-app-layout>
    <x-slot name="header" style="margin-top: 80px">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-top: 60px">
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
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('show-products')
            </div> --}}
            <div>
                <form class="search-box" action="/dashboard" method="GET">
                  @csrf  
                  <input type="text" name="search" placeholder="Faça sua busca">
                  <button type="submit">Buscar</button>
                </form> 

                @if($search)  
                    <h1>Buscando por: {{$search}}</h1>
                @endif
            
                    <table class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Categoria</th>
                                <th></th>
                                <th>Ações</th>
                                <th></th>
                            </tr>
                            @foreach ($products as $product)
                                </tr>
                                    <td>{{$product->id}}</td>
                                    <td><img src="img/products/{{$product->img}}" alt="imagem"></td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    @if($product->category == 0)         
                                        <td>Cerveja</td> 
                                    @elseif($product->category == 1)
                                        <td>Coquetel</td>
                                    @elseif($product->category == 2)
                                        <td>Diversos</td>
                                    @elseif($product->category == 3)
                                        <td>Drinks</td>
                                    @elseif($product->category == 4)
                                        <td>Energético</td>
                                    @elseif($product->category == 5)
                                        <td>Petiscos</td>
                                    @elseif($product->category == 6)
                                        <td>Refrigerantes</td>
                                    @elseif($product->category == 7)
                                        <td>Sobremesa</td>
                                    @elseif($product->category == 8)
                                        <td>Suco</td>
                                    @elseif($product->category == 9)
                                        <td>Sushi</td>
                                    @elseif($product->category == 10)
                                        <td>Vinho</td>    
                                    @endif
                                    <td>
                                        <div>
                                            <a href="/showProduto/{{ $product->id }}" ><button id="view">Visualizar</button></a>
                                        </div>
                                    </td>
                                    <td> 
                                        <div>
                                            <a href="/edit/{{ $product->id }}"><button id="edit">Editar</button></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <form action="/admin/{{$product->id}}" method="POST" id="formDelete">
                                                @csrf
                                                @method('DELETE')
                                                <button className="buttonDelete" id="delete" type="submit">Excluir</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>  
                            @endforeach  
                        </tbody>
                    </table>
            </div>
            
        </div>
    </div>
</x-app-layout>
