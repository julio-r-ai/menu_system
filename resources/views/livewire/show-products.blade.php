<link rel="stylesheet" href="/css/app.css">
<title><?php echo "Cardápio" ?></title>

<div>
    {{-- <form class="search-box" action="/" method="GET">
        <input type="text" name="search" placeholder="Faça sua busca">
       <a href="#" class="search-btn"><button>Buscar</button></a>
     </form> --}}

        <table>
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
