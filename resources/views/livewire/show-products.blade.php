<link rel="stylesheet" href="/css/app.css">

<div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Descrição</th>
                    <th>Preco</th>
                    <th>Categoria</th>
                    <th></th>
                    <th>Ações</th>
                    <th></th>

                </tr>
                @foreach ($products as $product)
                    </tr>
                        <td>{{$product->id}}</td>
                        <td><img src="{{$product->img}}" alt="imagem"></td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->category}}</td>

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
