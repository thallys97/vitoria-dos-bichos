<x-minimal-layout>

    <main class="container vh-100 d-flex flex-column justify-content-center align-items-center ">
        <h1>Painel Administrativo</h1>

        <div class="mb-3">
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Listagem de Posts</a>
        </div>

        <div class="mb-3">
            <a href="{{ route('users.index') }}" class="btn btn-primary">Listagem de Usuários</a>
        </div>

        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </main>

</x-minimal-layout>