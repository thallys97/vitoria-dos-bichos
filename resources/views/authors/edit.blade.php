<x-layout>
    <main class="container">
        <h2>Editar Autor</h2>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form method="POST" action="{{ route('authors.update', ['author' => $author->id]) }}">
            @csrf
            @method('PUT') <!-- Use o método PUT para atualização -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $author->user->email }}" required>
            </div>

            <div class="form-group">
                <label for="full_name">Nome Completo:</label>
                <input type="text" name="full_name" class="form-control" value="{{ $author->full_name }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Autor</button>
        </form>
    </main>
</x-layout> 
