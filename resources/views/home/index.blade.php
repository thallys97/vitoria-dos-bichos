<x-layout>

   
    <header class="cabecalho d-flex flex-column justify-content-center align-items-center pb-5">
        <img src="{{ asset('images/logo-AVB.png') }}" class="w-50" alt="logo da associação vitória dos bichos">
        <nav class="navbar navbar-expand-lg navbar-dark w-100">
            <div class="container-fluid justify-content-center">
              <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item border text-center">
                    <a class="nav-link nav-link-custom fw-bold" href="#">Início</a>
                  </li>
                  <li class="nav-item border text-center">
                    <a class="nav-link nav-link-custom fw-bold" href="#">Sobre a associação</a>
                  </li>
                  <li class="nav-item border text-center">
                    <a class="nav-link nav-link-custom fw-bold" href="#">Serviços de castração</a>
                  </li>
                  <li class="nav-item border text-center">
                    <a class="nav-link nav-link-custom fw-bold" href="#">Doação</a>
                  </li>
                  <li class="nav-item border text-center">
                    <a class="nav-link nav-link-custom fw-bold" href="#">Contatos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
<main>

<section class="sobre-associacao">

      <!-- Camadas parallax -->
    <div class="parallax-container">
        <div class="parallax-black-banner" style="background-image: url('{{ asset('images/black_banner.png') }}');"></div>
        <div class="parallax-layer" style="background-image: url('{{ asset('images/parallax-cao-gato.png') }}');"></div>
    </div>

    <!-- Conteúdo da página -->
    <div class="sobre-associacao-conteudo  d-flex flex-column justify-content-center align-items-center pt-4">
      <img src="{{ asset('images/cachorrinho.png') }}" class="w-50 mb-2" alt="cachorrinho">
      <h2 class="sobre-associacao-titulo text-center my-4 fw-bold">Conheça a Vitória dos <br> Bichos</h2>
      <h4 class="sobre-associacao-subtitulo fw-bold fs-5 mt-1">Sobre a Associação</h4>
      <p class="sobre-associacao-texto mx-4 mt-2 mb-5 ">São vários os chamados por dia que recebemos pela página do Facebook, telefonemas de pessoas que se deparam com animais em risco, atropelados, doentes ou abandonados, mas que sequer se comprometem a se responsabilizar por eles, oferecendo ao menos um local para acomodá-los. Pessoas que passam pelo local e não prestam socorro ao animal, achando que esse trabalho somente pode ser executado por nós. Poucas pessoas vão ao local socorrer ou mesmo se interessam pela causa, e o animal acaba sofrendo e até vindo a falecer sem socorro. Isso é muito triste. Gostaríamos sim de recolher todos os animais de rua e perdemos a conta de quantos já resgatamos por conta própria, assumindo sozinhas as responsabilidades de ter que levá-los para nossas próprias casas. Sem falar que as casas das protetoras já estão abarrotadas de animais, porém são tantos que encontramos na rua que na maioria das vezes só conseguimos alimentá-los. Dispomos de poucos recursos financeiros, vivemos de doações e até mesmo colocamos a mão no bolso para poder oferecer um pouquinho de dignidade e carinho a esses seres indefesos. Fazemos o que podemos e te convidamos a fazer parte da equipe!</p>
    </div>

</section>


<section class="servicos">

      <!-- Camadas parallax -->
      <div class="parallax-container">
          <div class="parallax-layer-gato" style="background-image: url('{{ asset('images/gato-preto.jpg') }}');"></div>
      </div>

    <div class="servicos-conteudo d-flex flex-column justify-content-center align-items-center py-4"> 

      <img src="{{ asset('images/cachorro-adulto.png') }}" class="w-50 mb-2" alt="cachorro adulto">

      <h2 class="servicos-titulo fw-bold display-4 mt-2">Serviços</h2>

      <p class="text-center servicos-texto mx-4"> <span class="fw-bold"> Objetivo: castração </span> <br>  1. Não recebemos ajuda fianceira do municipio e governo <br>
        2. Não dispomos de local para abrigo de animais <br>
        3. Somente recolhemos animais que já possuem local de encaminhamento para o mesmo. <span class="fw-bold"> Ex: Lar temporário até que fique pronto para adoção. </span>  <br>
        Realizamos um trabalho voluntário quando encontramos animais acidentados ou doentes em nosso percurso, ele recebe o tratamento adequado e vai para adoção posteriormente. </p>

    </div>


</section>

<section class="doacao">

  <div class="doacao-conteudo d-flex flex-column justify-content-center align-items-center pt-5 pb-4">

    <h2 class="doacao-titulo fw-bold  display-4">Doação</h2>

    <p class="doacao-texto fw-bold mx-4 mt-3 text-center">Se você gostaria de fazer uma doação para a AVB - Associação Vitória dos Bichos, basta acessar o link abaixo.</p>

    <img src="{{ asset('images/PicPay.jpg') }}" class="w-75 mt-2 rounded-3" alt="PicPay">

    <a href="#" class="btn doacao-botao mt-2 py-3 w-75 rounded-pill fw-bold">QUERO DOAR</a>

  </div>
  
  <div class="parceiros mx-4">

    <h2>Veja alguns dos nossos parceiros</h2>

    <img src="{{ asset('images/PetClinic-Sk1.png') }}" class="w-100" alt="logos da PetClinic e da SK1 embalagens">
    <img src="{{ asset('images/sempre6-cargeo.png') }}" class="w-100" alt="logos da sempre 6 e da cargeo">

  </div>



</section>

</main>




</x-layout>   