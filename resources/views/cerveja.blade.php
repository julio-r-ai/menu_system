<link rel="stylesheet" href="/css/app.css">

@extends('layouts.main')

@section('title', 'Cervejas')

@section('content')

<div class="general" onload="showLoading()">
    
    {{-- <h1>Cervejas</h1> --}}
    @foreach ($products as $product)

        @if ($product->category == 0)   
            <div class="card">
                <div class="card-inter">
                    <div>
                            <img src="img/products/{{$product->img}}" alt="imagem">
                    </div>
                    <div>
                        <h2 id="descriH2">{{$product->description}}</h2>
                        <h3 id="descriH3">R$ {{$product->price}}</h3>                        
                    </div>
                </div>
                <div >
                    <a href="/showProduto/{{ $product->id }}"><button id="buttonVer">Ver</button></a>
                </div>
            </div> 
        @endif
    @endforeach 

  

</div>  

