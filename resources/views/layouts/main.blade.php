<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title')</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
   <link rel="stylesheet" href="/css/app.css">
   <script src="/js/app.js" defer></script>    
</head>
<body onload="showLoading()"> 
   @yield('content')
   <header class="header">
       <div>
           <h1>Cardápio</h1>
       </div>
        <span class="material-symbols-outlined menu">
            menu
       </span>
   </header>
   <div>
        <li class="sidBar">
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
</body>
</html>
