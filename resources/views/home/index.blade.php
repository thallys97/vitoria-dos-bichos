<x-layout>

   
    <header class="cabecalho d-flex flex-column flex-lg-row justify-content-center justify-content-lg-around align-items-center">
      <div class="cabecalho-logo-container d-flex justify-content-center">
        <a href="http://avitoriadosbichos.com.br/">
          <img src="{{ asset('images/logo-AVB.png') }}" class="cabecalho-logo" alt="logo da associação vitória dos bichos">
        </a>
      </div> 
        <nav class="cabecalho-navbar navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid justify-content-center">
              <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav cabecalho-navbar-lista">
                  <li class="nav-item cabecalho-navbar-item border border-secondary text-center">
                    <a class="nav-link nav-link-custom fw-bold" href="#">Início</a>
                  </li>
                  <li class="nav-item cabecalho-navbar-item border border-secondary  text-center">
                    <a class="nav-link nav-link-custom fw-bold" href="#sobrenos">Sobre a associação</a>
                  </li>
                  <li class="nav-item cabecalho-navbar-item border border-secondary  text-center">
                    <a class="nav-link nav-link-custom fw-bold" href="#servicos-castracao">Serviços de castração</a>
                  </li>
                  <li class="nav-item cabecalho-navbar-item border border-secondary  text-center">
                    <a class="nav-link nav-link-custom fw-bold" href="#doacoes">Doação</a>
                  </li>
                  <li class="nav-item cabecalho-navbar-item border border-secondary  text-center">
                    <a class="nav-link nav-link-custom fw-bold" href="#contatos-telefones">Contatos</a>
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
    <div id="sobrenos" class="sobre-associacao-conteudo" >
      <div class="d-flex flex-column flex-lg-row-reverse justify-content-center align-items-center pt-4 container-lg">
        <img src="{{ asset('images/cachorrinho.png') }}" class="w-50 mb-2" alt="cachorrinho">
        <div>
          <h2 class="sobre-associacao-titulo text-center text-lg-start my-4 fw-bold">Conheça a Vitória dos <br class="d-md-none"> Bichos</h2>
          <h4 class="sobre-associacao-subtitulo text-center text-lg-start fw-bold fs-5 pt-2">Sobre a Associação</h4>
          <p class="sobre-associacao-texto mt-3 mb-5 ">São vários os chamados por dia que recebemos pela página do Facebook, telefonemas de pessoas que se deparam com animais em risco, atropelados, doentes ou abandonados, mas que sequer se comprometem a se responsabilizar por eles, oferecendo ao menos um local para acomodá-los. Pessoas que passam pelo local e não prestam socorro ao animal, achando que esse trabalho somente pode ser executado por nós. Poucas pessoas vão ao local socorrer ou mesmo se interessam pela causa, e o animal acaba sofrendo e até vindo a falecer sem socorro. Isso é muito triste. Gostaríamos sim de recolher todos os animais de rua e perdemos a conta de quantos já resgatamos por conta própria, assumindo sozinhas as responsabilidades de ter que levá-los para nossas próprias casas. Sem falar que as casas das protetoras já estão abarrotadas de animais, porém são tantos que encontramos na rua que na maioria das vezes só conseguimos alimentá-los. Dispomos de poucos recursos financeiros, vivemos de doações e até mesmo colocamos a mão no bolso para poder oferecer um pouquinho de dignidade e carinho a esses seres indefesos. Fazemos o que podemos e te convidamos a fazer parte da equipe!</p>
        </div>
      </div>
    </div>

</section>


<section class="servicos">

      <!-- Camadas parallax -->
      <div class="parallax-container">
          <div class="parallax-layer-gato" style="background-image: url('{{ asset('images/gato-preto.jpg') }}');"></div>
      </div>

    <div id="servicos-castracao" class="servicos-conteudo">
      <div class=" d-flex flex-column flex-md-row-reverse justify-content-center align-items-center py-4 container-md"> 

        <img src="{{ asset('images/cachorro-adulto.png') }}" class="w-50 mb-2" alt="cachorro adulto">

        <div>
          <h2 class="servicos-titulo text-center fw-bold display-4 mt-2">Serviços</h2>

          <p class="text-center text-md-start servicos-texto mx-4"> <span class="fw-bold"> Objetivo: castração </span> <br>  1. Não recebemos ajuda fianceira do municipio e governo <br>
            2. Não dispomos de local para abrigo de animais <br>
            3. Somente recolhemos animais que já possuem local de encaminhamento para o mesmo. <span class="fw-bold"> Ex: Lar temporário até que fique pronto para adoção. </span>  <br>
            Realizamos um trabalho voluntário quando encontramos animais acidentados ou doentes em nosso percurso, ele recebe o tratamento adequado e vai para adoção posteriormente. 
          </p>
        </div>
      </div>
    </div>  
    


</section>

<section class="doacao">

  <div id="doacoes" class="doacao-conteudo d-flex flex-column justify-content-center align-items-center pt-5">

    <h2 class="doacao-titulo fw-bold  display-4">Doação</h2>

    <p class="doacao-texto fw-bold mx-4 mt-3 text-center">Se você gostaria de fazer uma doação para a AVB - Associação Vitória dos Bichos, basta acessar o link abaixo.</p>

      <img src="{{ asset('images/PicPay.jpg') }}" class="imagem-picpay mt-2 rounded-3" alt="PicPay">

    <a href="https://app.picpay.com/user/vitoriadosbichos" class="btn doacao-botao py-3 rounded-pill fw-bold">QUERO DOAR</a>

  </div>
  
  <div class="parceiros d-flex flex-column justify-content-center align-items-center pt-5">

    <h2 class="parceiros-titulo text-center fw-bold">Veja alguns dos nossos parceiros</h2>

    <div class="mx-4 mt-4 d-md-flex flex-md-row align-items-md-center container-md parceiros-imagens">
      <img src="{{ asset('images/PetClinic-Sk1.png') }}" class="imagem-PetClinic-Sk1 mb-2" alt="logos da PetClinic e da SK1 embalagens">
      <img src="{{ asset('images/sempre6-cargeo.png') }}" class="imagem-sempre6-cargeo" alt="logos da sempre 6 e da cargeo">
    </div>

    <a href="https://api.whatsapp.com/send?phone=5563981200001&text=Ol%C3%A1,%20gostaria%20de%20falar%20com%20uma%20atendente" class="btn doacao-botao mt-2 py-3 mt-4 rounded-pill fw-bold">QUERO ME TORNAR UM PARCEIRO</a>

  </div>



</section>


<section class="contatos">

  <div class="localizacao">
    <div class=" d-flex flex-column justify-content-center align-items-center px-2 pt-4 pb-5  container-md">

      <h2 class="localizacao-titulo fw-bold pb-3  display-4">Localização</h2>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3906.3823753250945!2d-49.071228025716024!3d-11.73808963622875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x933e9535e4f20845%3A0x9e96207bb1aa71d8!2sAssocia%C3%A7%C3%A3o%20Vit%C3%B3ria%20dos%20Bichos%20-%20AVB!5e0!3m2!1spt-BR!2sbr!4v1696017751942!5m2!1spt-BR!2sbr" width="90%" height="300" style="border: 8px solid white;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
  </div>
  
  <div id="contatos-telefones" class="contatos-conteudo d-flex flex-column justify-content-center align-items-center pt-3 pb-2">

    <h2 class="contatos-titulo fw-bold pb-3 display-4">Contatos</h2>
    <div class="d-flex flex-column justify-content-center align-items-center flex-md-row  justify-content-md-between">
        <p class="order-md-1 contatos-telefones fs-4 fw-bold"> <i class="fa-brands fa-whatsapp"></i> (63) 98120-0001 <br>
          <i class="fa-brands fa-whatsapp"></i>  (63) 98426-6777</p>

        <a href="https://api.whatsapp.com/send?phone=5563981200001&text=Ol%C3%A1,%20gostaria%20de%20falar%20com%20uma%20atendente" class="order-md-2 container-whatsapp" >  
          <img src="{{ asset('images/whatsapp.png') }}" class="logo-whatsapp" alt="logo do whatsapp">
        </a>
        <img src="{{ asset('images/logo-AVB-contatos.png') }}" class="order-md-0 logo-AVB-contatos" alt="logo da associação vitória dos bichos">
    </div>    
  </div>
  
</section>


</main>




</x-layout>   