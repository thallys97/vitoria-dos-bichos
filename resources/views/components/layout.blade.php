<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Associação, Vitória dos Bichos, animais, pet, avb">
    <meta name="robots" content="index, follow">
    <title>Associação Vitória dos Bichos | Vitória dos Bichos</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    @stack('head')
    <script src="https://kit.fontawesome.com/07138ba291.js" crossorigin="anonymous"></script>
</head>
<body>


    <header class="cabecalho d-flex flex-column flex-lg-row justify-content-center justify-content-lg-around align-items-center">
        <div class="cabecalho-logo-container d-flex justify-content-center">
          <a href="{{ route('home.index') }}" class="text-center">
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
                    <li class="nav-item cabecalho-navbar-item text-center">
                      <a class="nav-link nav-link-custom fw-bold fs-5" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item cabecalho-navbar-item text-center">
                      <a class="nav-link nav-link-custom fw-bold fs-5" href="{{ route('home.index') }}#sobrenos">Sobre nós</a>
                    </li>
                    <li class="nav-item cabecalho-navbar-item text-center">
                      <a class="nav-link nav-link-custom fw-bold fs-5" href="{{ route('home.index') }}#servicos-castracao">Serviços</a>
                    </li>
                    <li class="nav-item cabecalho-navbar-item text-center">
                      <a class="nav-link nav-link-custom fw-bold fs-5" href="{{ route('home.index') }}#doacoes">Doação</a>
                    </li>
                    <li class="nav-item cabecalho-navbar-item text-center">
                      <a class="nav-link nav-link-custom fw-bold fs-5" href="{{ route('home.index') }}#contatos-telefones">Contatos</a>
                    </li>
                    <li class="dropdown nav-item galeria text-center">
                      <button class="btn galeria-botao dropdown-toggle fs-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Galeria
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item nav-link fw-bold dropdown-botao-item fs-5" href="{{ route('photos.index') }}">Fotos</a></li>
                        <li><a class="dropdown-item nav-link fw-bold dropdown-botao-item fs-5" href="{{ route('videos.index') }}">Vídeos</a></li>
                      </ul>
                    </li>
                    <li class="nav-item cabecalho-navbar-item  text-center">
                        <a class="nav-link nav-link-custom fw-bold fs-5" href="{{ route('posts.index') }}">Blog</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
      </header>

      @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif

      @if(session('error'))
          <div class="alert alert-danger">
              {{ session('error') }}
          </div>
      @endif


      @auth
          @if (auth()->user()->role === 'administrador')
              <a href="{{ route('dashboard.index') }}" class="btn fixed-bottom mb-2 ms-2 dashboard-button border border-0 fw-bold" style="background-color: #6C3593; color: black;">
                  <i class="fa-solid fa-gauge fs-4 align-middle"></i>
              </a>
          @else
              <a href="#" class="btn fixed-bottom mb-2 ms-2 dashboard-button border border-0 fw-bold" style="background-color: #6C3593; color: black;" onclick="confirmLogout()">
                <i class="fas fa-sign-out-alt fs-4 align-middle"></i>
              </a>
              <form id="logout-form-layout" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          @endif
      @endauth
       

    {{ $slot }}
    
    <!-- <div style="background-color: black; color: white;" class="py-3">
        <p class="text-center mb-0">&copy; 2023 Associação Vitória dos Bichos. <br class="d-md-none"> Todos os Direitos Reservados</p>        
    </div> -->

    <footer style="background-color: black;" class="text-white py-5">
      <div class="container">
          <div class="row">
              <!-- Informações de Contato -->
              <div class="col-md-4 footer-info">
                  <h5>Contatos</h5>
                  <p class="d-flex align-items-center gap-1"><i class="fa-solid fa-map"></i>Rua G, n°50, quadra 39, lt 02, Setor União V 77405-340 Gurupi, TO</p>
                  <p class="d-flex align-items-center gap-1"><i class="fa-solid fa-phone"></i>(63) 98120-0001</p>
                  <p class="d-flex align-items-center gap-1"><i class="fa-solid fa-phone"></i>(63) 98426-6777</p>
                  <p class="d-flex align-items-center gap-1"><i class="fa-regular fa-envelope fs-5"></i>avbgpito@gmail.com</p>
              </div>

              <hr class="d-md-none"> 
              
              <!-- Redes Sociais -->
              <div class="col-md-3 footer-info">
                  <h5 class="mb-3">Redes Sociais</h5>
                  <ul class="list-unstyled d-flex gap-5 gap-md-4 gap-lg-5 mb-4">
                    <li><a href="https://www.instagram.com/vitoriadosbichoss/" class="text-white footer-info-link"><i class="fa-brands fa-instagram fs-3"></i></a></li>
                    <li><a href="https://www.tiktok.com/@vitoriadosbichos" class="text-white footer-info-link"><i class="fa-brands fa-tiktok fs-3"></i></a></li>
                    <li><a href="https://www.facebook.com/vitoriadosbichos" class="text-white footer-info-link"><i class="fa-brands fa-facebook fs-3"></i></a></li>
                  </ul>

                  <hr class="d-md-none">

                  <h5 class="mb-2 mt-5">Horarios de Atendimento</h5>
                  <p class="d-flex align-items-center gap-1"><i class="fa-regular fa-clock"></i>Segunda a Sexta das 08:00 a 11:00 e das 18:00 a 20:00</p>
              </div>

              <hr class="d-md-none">
              
              <!-- Créditos -->
              <div class="col-md-3 footer-info">
                  <h5>Créditos</h5>
                  <p>Desenvolvido por:<br> <a href="https://github.com/thallys97" class="text-white"><i class="fa-brands fa-github me-1"></i>Thallys Roque</a> </p>
              </div>
              
              <hr class="d-md-none">

              <!-- Links Importantes -->
              <div class="col-md-2">
                  <h5>Links</h5>
                  <ul class="list-unstyled">
                      <li><a href="{{ route('home.index') }}" class="text-white">Página Inicial</a></li>
                      <li><a href="{{ route('posts.index') }}" class="text-white">Posts do Blog</a></li>
                      <li><a href="{{ route('photos.index') }}" class="text-white">Galeria de Fotos</a></li>
                      <li><a href="{{ route('videos.index') }}" class="text-white">Galeria de Vídeos</a></li>
                  </ul>
              </div>
          </div>
      </div>
  
      <!-- Direitos Autorais -->
      <div class="container mt-4">
          <div class="row">
              <div class="col text-center">
                  <p class="mb-0">&copy; 2023 Associação Vitória dos Bichos. Todos os Direitos Reservados</p>
              </div>
          </div>
      </div>
    </footer>
  


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{ asset('js/layout/logout-confirmation.js') }}"></script>
</body>
</html>