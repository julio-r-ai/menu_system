<link rel="stylesheet" href="/css/app.css">

<div class="showProduto">
    <div class="headerShow">
        <div>
            <h1>{{$products->description}}</h1>
        </div>
    
    </div>
    <div class="productDescri">
        <div>
            <img src="{{$products->img}}" alt="Imagem do Produto">
        </div>
    </div>
    <div class="footerShow">
        <div>
            <a href="javascript:void(0)" onClick="history.go(-1); return false;"><button>Voltar</button></a>
        </div>
        <div id="priceShow">
           <h2> Preço: R$ {{$products->price}}</h2>
        </div>
    </div>
</div>