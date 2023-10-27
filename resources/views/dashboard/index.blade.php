<x-minimal-layout>

    <main class="container vh-100 d-flex flex-column justify-content-center align-items-center ">
        <h1 class="dashboard-title">Painel Administrativo</h1>

        <div class="card custom-card">
            <div class="card-header"><h3 class="fw-bold mt-2">Opções</h3></div>
            <div class="card-body">
                <div class="mb-3">
                    <a href="{{ route('posts.index') }}" class="btn dashboard-button rounded-pill fw-bold">Listagem de Posts</a>
                </div>
        
                <div class="mb-3">
                    <a href="{{ route('users.index') }}" class="btn dashboard-button rounded-pill fw-bold">Listagem de Usuários</a>
                </div>
        
                <div>
                    <a href="{{ route('logout') }}" class="text-decoration-none" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        

    </main>

</x-minimal-layout>