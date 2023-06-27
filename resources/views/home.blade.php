@extends('layouts.initial')

@section('content')
  
  <!--Header do Site-->
  <header>

    <!--Parte superior do header-->
    <div id="top">

      <!--Parte esquerda do header onde contém a logo e o nome do site-->
      <div>
        <img id="logo" src="https://cdn.discordapp.com/attachments/724849934817558531/1044699176778342584/Picsart_22-11-22_15-11-08-412.png" alt="Pegasus">
      </div>

      <!--Parte central do header onde contém a barra de busca-->
      <div id="search-div">
        <input type="text" id="search-txt" placeholder="Buscar...">
        <img id="search-button" src="https://cdn.discordapp.com/attachments/764255748359847936/1034239163404386304/Picsart_22-10-24_19-57-02-974.png" alt="Buscar">
      </div>

      <!--Parte direita do header onde contém algumas opções-->
      <div>
        <img class="right" src="https://cdn.discordapp.com/attachments/764255748359847936/1034254156065669202/Picsart_22-10-24_20-51-31-506.png" alt="perfil">
        <a href="login">
          <img class="right" src="https://cdn.discordapp.com/attachments/724849934817558531/1044704430529974403/Picsart_22-11-22_17-01-24-103.png" alt="Icon">
        </a>
        
        <button class="hamburger r">
          <div class="bar"></div>
        </button>
      </div>

    </div>
  
    <!--NavBar do Site-->
    <nav>
      <div>
        <a href="/">Livros</a>
        <a href="/">Eletrônicos</a>
        <a href="/">Papelaria</a>
        <a href="/">Móveis</a>
        <a href="/">Cosméticos</a>
        <a href="/">Cupons</a>
      </div>
    </nav>

  </header>

  <!--Parte oculta do site - disponível apenas ao clicar no ícone de "mais"-->
  <span class="mobile-nav">
    <a href="produtos" class="a-nav"> Cadastro de Produtos</a>
    <a href="https://gitlab.com/viniciuspinheiroara/trabalho-de-html-e-css" class="a-nav" > GitHub</a>
    <a href="contatos" class="a-nav"> Contatos</a>

    <a class="a-nav" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
  </span>

  <!--Slide de imagens-->
  <div class="slide">

    <!--Parte das imagens-->
    <div class="images">
      <img class="checked" src="https://img.olhardigital.com.br/wp-content/uploads/2021/12/montar-pc-gamer-shutterstock_1430140055.jpg">
      <img src="https://piauihoje.com/uploads/imagens/tecno-divulgacao-1654806461.jpeg">
      <img src="https://www.bbva.com/wp-content/uploads/2018/06/fintech-tecnologia-innovacion-digital-blockchain-bbva_opt-1920x808.jpg">
      <img src="https://www.leidainformatica.com/wp-content/uploads/2020/05/205-1024x576.jpg">
    </div>

    <div class="manual-navigation">
      <label for="radio1" class="manual-btn checked"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>

  </div>

  <!--Parte inferior do site-->
  <div class="bottom">
      <div>
        <img src="https://cdn-icons-png.flaticon.com/512/8189/8189058.png">
      </div>

      <div>
        <img src="https://cdn-icons-png.flaticon.com/512/8189/8189058.png">
      </div>

      <div>
        <img src="https://cdn-icons-png.flaticon.com/512/8189/8189058.png">
      </div>

      <div>
        <img src="https://cdn-icons-png.flaticon.com/512/8189/8189058.png">
      </div>

      <div>
        <img src="https://cdn-icons-png.flaticon.com/512/8189/8189058.png">
      </div>
  </div>

  <!--Script do site-->
  <script src="{{url('js/script.js')}}"></script>

</body>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <h1>Apenas um teste</h1>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
