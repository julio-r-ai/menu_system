<link rel="stylesheet" href="/css/app.css">

@section('title', 'Aditar Produto')

@section('content')

<div class="admin">

    <div class="registerAdmin">

        <div><h1>Editando o Produto: {{ $products->description }} </h1></div>

        <form action="/edit/{{ $products->id }}" method="POST" id="formCadastroProduct">
            @csrf
            @method('PUT')
            <div>
                <label for="">Adicione uma foto</label>
                <input type="text" name="img" id="img" value="{{ $products->img }}">
            </div>
            <div>
                <label for="">Descrição</label>
                <input type="text" name="description"  id="description" value="{{ $products->description }}">
            </div>
            <div>
                <label for="">Preço</label>
                <input type="text" name="price" id="price" value="{{ $products->price }}">
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
            <div><button type="submit">Editar</button></div>
        </form>
        @if(session('msg'))
            <div id="msgProduto"><p>{{session('msg')}}</p></div>
        @endif
</div>