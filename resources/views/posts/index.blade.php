<x-layout>

    @push('head')
        <link rel="stylesheet" href="{{ asset('css/posts/posts.css') }}">        
    @endpush   

    <main class="container">
        <div class="mb-4">
            <h1 class="title">Lista de Posts</h1>
            @auth
                <a href="{{ route('posts.create') }}" class="btn button-post rounded-pill fw-bold fs-5 mt-4 mb-2">Criar Novo Post</a>
            @endauth
        </div>

        @if (count($posts) > 0)
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card custom-card">
                            @if ($post->media->count() > 0)
                                <a href="{{ route('posts.show', $post->id) }}">
                                    <img src="{{ asset('storage/' . $post->media[0]->path) }}" class="card-img-top" alt="Imagem do post">
                                </a>        
                            @endif
                            <div class="card-body">
                                <a href="{{ route('posts.show', $post->id) }}" class="card-link text-center">
                                    <h2 class="card-title fw-bold display-4 mt-3">{{ $post->title }}</h2>
                                </a>
                                <a href="{{ route('posts.show', $post->id) }}" class="card-link">        
                                    <p class="card-text fs-5 mb-4">{{ Str::limit($post->content, 100) }}</p>
                                </a>
                                @auth
                                    <div class="d-flex justify-content-evenly">
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn button-post rounded-pill fw-bold">Editar Post</a>
                                        <form id="delete-form-{{ $post->id }}" action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger rounded-pill delete-post button-delete fw-bold" data-post-id="{{ $post->id }}">Excluir Post</button>
                                        </form>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="pagination d-flex justify-content-center mt-3">
                {{ $posts->links('custom-pagination') }}
            </div>

        @else
            <section class="no-posts">
                <div class="no-posts-card text-center">
                    <p class="no-posts-text fw-bold">Nenhum post foi criado ainda.</p>
                </div>
            </section>    
        @endif        
    </main>

  <script src="{{ asset('js/posts/delete-modal-confirmation.js') }}"></script> 

</x-layout>  
