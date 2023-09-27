<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title')</title>

   <link rel="stylesheet" href="/css/app.css">
   <script src="/js/app.js" defer></script>
</head>
<body onload="showLoading()"> 
   @yield('content')
   {{-- @livewire('loading-animation') --}}
  
   <header class="header">
       <div>
           <h1>Cardápio</h1>
       </div>
   </header>
   <div class="sidBar">
       <div>
           <li>
               <ul><a href="/">Cervejas</a></ul>
               <ul><a href="/coquetel">Coquetel</a></ul>
               <ul><a href="/diverso">Diversos</a></ul>
               <ul><a href="/drinks">Drinks</a></ul>
               <ul><a href="/energetico">Energetico</a></ul>
               <ul><a href="/petisco">Petiscos</a></ul>
               <ul><a href="/refrigerante">Refrigerantes</a></ul>
               <ul><a href="/sobremesa">Sobremesa</a></ul>
               <ul><a href="/suco">Suco</a></ul>
               <ul><a href="/sushi">Sushi</a></ul>
               <ul><a href="/vinho">Vinho</a></ul>
           </li>
       </div>
   </div>
 
</body>
</html>
