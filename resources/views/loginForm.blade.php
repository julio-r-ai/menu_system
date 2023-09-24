<link rel="stylesheet" href="/css/app.css">

@section('title', 'Login')

<div class="login">
  @if(session('msg'))
    <div id="msgProduto"><p>{{session('msg')}}</p></div>
  @endif

  <form action="/admin/auth" method="POST" id="formLogin">
    @csrf
    <div class="title-login">
      <h2>Fazer login</h2>
    </div>

    <div>
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" placeholder="Digite seu e-mail...">
    </div>

    <div>
      <label for="password">Senha</label>
      <input type="password" id="password" name="password" placeholder="Digite sua senha...">
    </div>

    <div class="divButton">
      <button type="submit" id="buttonEntrar">Entrar</button>
    </div>
  </form> 
</div>