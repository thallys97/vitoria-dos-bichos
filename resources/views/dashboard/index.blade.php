<x-minimal-layout>

    <main class="container">
        <h2>Painel Administrativo</h2>

        <div class="mb-3">
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Listagem de Posts</a>
        </div>

        <div class="mb-3">
            <a href="{{ route('users.index') }}" class="btn btn-primary">Listagem de Usuários</a>
        </div>
    </main>

</x-minimal-layout>