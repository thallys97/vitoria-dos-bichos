<x-layout>

    @push('head')
        <!-- Adicione os estilos específicos, se necessário -->
    <!--    <style>
            .videos-card {
                max-width: 18rem;
                margin: 1rem;
            }
    
            .videos-card img {
                max-height: 10rem; /* Defina a altura máxima conforme necessário */
                object-fit: cover; /* Garante que a imagem se ajusta ao tamanho do card */
            }
        </style> -->
        <link rel="stylesheet" href="{{ asset('css/videos/videos.css') }}">

    @endpush
    
    <main class="container">
        
        <div class="mb-4">
            <h1 class="title">Galeria de Vídeos</h1>
            @auth
                <a href="{{ route('videos.create') }}" class="btn button-post rounded-pill fw-bold fs-5 mt-4 mb-2">Registrar Novo Vídeo</a>
            @endauth
        </div>  <!-- parei aqui -->
    
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            @forelse ($videos as $video)
                <div class="col">
                    <div class="card videos-card">
                        <!-- Adicione seu código para exibir o vídeo, como um iframe do YouTube, por exemplo -->
                        <!-- <iframe width="560" height="315" src="{{ $video->path }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                        <!-- Certifique-se de ajustar conforme o tipo de vídeo ou o método de exibição -->
                        <img src="{{ asset('storage/' . $video->path) }}" class="card-img-top" alt="Imagem do vídeo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text">{{ $video->description }}</p>
                            <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-primary">Editar</a>
                            <form id="delete-form-{{ $video->id }}" action="{{ route('videos.destroy', $video->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger delete-video" data-video-id="{{ $video->id }}">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col text-center">
                    <p class="no-videos-text fw-bold">Nenhum vídeo foi criado ainda.</p>
                </div>
            @endforelse
        </div>
    </main>
    
    <script src="{{ asset('js/videos/delete-modal-confirmation.js') }}"></script>
    
</x-layout>
    