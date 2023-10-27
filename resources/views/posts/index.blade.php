<x-layout>

    <main class="container">
        <h1>Lista de Posts</h1>
        @auth
            <a href="{{ route('posts.create') }}" class="btn btn-success">Criar Novo Post</a>
        @endauth

        @if (count($posts) > 0)
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            @if ($post->media->count() > 0)
                                <a href="{{ route('posts.show', $post->id) }}">
                                    <img src="{{ asset('storage/' . $post->media[0]->path) }}" class="card-img-top" alt="Imagem do post">
                                </a>        
                            @endif
                            <div class="card-body">
                                <a href="{{ route('posts.show', $post->id) }}">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                </a>
                                <a href="{{ route('posts.show', $post->id) }}">        
                                    <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                                </a>
                                @auth
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar Post</a>
                                    <form id="delete-form-{{ $post->id }}" action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger delete-post" data-post-id="{{ $post->id }}">Excluir Post</button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Nenhum post foi criado ainda.</p>
        @endif        
    </main>

  <script src="{{ asset('js/posts/delete-modal-confirmation.js') }}"></script> 

</x-layout>  
