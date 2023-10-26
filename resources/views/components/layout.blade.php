<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associação Vitória dos Bichos | Vitória dos Bichos</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
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
                    <li class="nav-item cabecalho-navbar-item border border-secondary text-center">
                      <a class="nav-link nav-link-custom fw-bold" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item cabecalho-navbar-item border border-secondary  text-center">
                      <a class="nav-link nav-link-custom fw-bold" href="{{ route('home.index') }}#sobrenos">Sobre a associação</a>
                    </li>
                    <li class="nav-item cabecalho-navbar-item border border-secondary  text-center">
                      <a class="nav-link nav-link-custom fw-bold" href="{{ route('home.index') }}#servicos-castracao">Serviços de castração</a>
                    </li>
                    <li class="nav-item cabecalho-navbar-item border border-secondary  text-center">
                      <a class="nav-link nav-link-custom fw-bold" href="{{ route('home.index') }}#doacoes">Doação</a>
                    </li>
                    <li class="nav-item cabecalho-navbar-item border border-secondary  text-center">
                      <a class="nav-link nav-link-custom fw-bold" href="{{ route('home.index') }}#contatos-telefones">Contatos</a>
                    </li>
                    <li class="nav-item cabecalho-navbar-item border border-secondary  text-center">
                        <a class="nav-link nav-link-custom fw-bold" href="{{ route('posts.index') }}">Blog</a>
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
      
      <div class="fixed-bottom w-50 mb-5 ms-2">
        <a href="{{ route('dashboard.index') }}" class="btn btn-primary w-25">dashboard</a>
      </div>

      <div class="fixed-bottom w-50 mb-2 ms-2">
        <a href="{{ route('logout') }}" class="btn btn-primary w-25" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>

       

    {{ $slot }}
    
    <footer style="background-color: black; color: white;" class="py-3">
        <p class="text-center mb-0">&copy; 2023 Associação Vitória dos Bichos. <br class="d-md-none"> Todos os Direitos Reservados</p>        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>