<link rel="stylesheet" href="/css/app.css">

@extends('layouts.main')

@section('title', 'Sobremesa')

@section('content')

<div class="general">
   {{--  <h1>Pagina de sobremesa</h1> --}}
    @foreach ($products as $product)
        @if ($product->category == 7)
            <div class="card">
                <div class="card-inter">
                <div>
                    <img src="{{$product->img}}" alt="imagem">
                </div>
                    <div>                        
                        <h2 id="descriH2">{{$product->description}}</h2>
                        <h2 id="descriH3">R$ {{$product->price}}</h2>                        
                    </div>
                </div>
                <div>
                    <a href="/showProduto/{{ $product->id }}"><button id="buttonVer">Ver</button></a>
                </div>
            </div> 
        @endif
    @endforeach 
</div>