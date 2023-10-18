<x-layout>

    <main class="container">
        <h1>Lista de Posts</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Conteúdo</th>
                    <th>Usuário</th>
                    <th>Mídia</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            @foreach ($post->media as $media)
                            <img src="{{ asset('storage/' . $media->path) }}" alt="Mídia">
                            @endforeach
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

</x-layout>  
