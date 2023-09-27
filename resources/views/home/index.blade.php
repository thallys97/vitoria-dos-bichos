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
        <div class="parallax-layer" style="background-image: url('{{ asset('images/parallax-cao-gato.png') }}');"></div>
    </div>

    <!-- Conteúdo da página -->
    <div class="sobre-associacao-conteudo  d-flex flex-column justify-content-center align-items-center">
      <img src="{{ asset('images/cachorrinho.png') }}" class="w-50" alt="cachorrinho">
      <h1>Seu Conteúdo</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>

</section>



</main>




</x-layout>   