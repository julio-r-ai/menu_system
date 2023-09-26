<link rel="stylesheet" href="/css/app.css">

@section('title', 'Admin')

@section('content')

<div class="admin">

    <div class="registerAdmin">

        <div><h1>Bem vindo! Administrador</h1></div>
        
        <form action="/admin" method="POST" id="formCadastroProduct">
            @csrf
            <div>
                <label for="">Adicione uma foto</label>
                <input type="text" name="img" id="img">
            </div>
            <div>
                <label for="">Descrição</label>
                <input type="text" name="description"  id="description">
            </div>
            <div>
                <label for="">Preço</label>
                <input type="text" name="price" id="price">
            </div>
            <div>
                <label for="">Categoria</label>
                <select name="category" id="category">
                    <option selected disabled>Selecione</option>
                    <option value="0">Cerveja</option>
                    <option value="1">Coquetel</option>
                    <option value="2">Diversos</option>
                    <option value="3">Drinks</option>
                    <option value="4">Energético</option>
                    <option value="5">Petiscos</option>
                    <option value="6">Refrigerantes</option>
                    <option value="7">Sobremesa</option>
                    <option value="8">Suco</option>
                    <option value="9">Sushi</option>
                    <option value="10">Vinho</option>
                </select>
            </div>
            <div><button type="submit">Adicionar</button></div>
        </form>
    </div>

    @if(session('msg'))
        <div id="msgProduto"><p>{{session('msg')}}</p></div>
    @endif

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
                                <button id="delete" type="submit">Excluir</button>
                            </form>
                        </div>
                    </td>
                </tr>  
            @endforeach  
        </tbody>
    </table>
</div>