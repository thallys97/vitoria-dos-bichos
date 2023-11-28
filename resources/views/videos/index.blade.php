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
                <a href="{{ route('videos.create') }}" class="btn button-video rounded-pill fw-bold fs-5 mt-4 mb-2">Registrar Novo Vídeo</a>
            @endauth
        </div> 
    
   <!-- <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3"> -->
        
            @forelse ($videos as $video)
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card custom-card">
                            
                            <iframe width="560" height="315" src="{{ $video->path }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            
                            <div class="card-body">
                                <h2 class="card-title fw-bold mt-3">{{ $video->title }}</h5>
                                <p class="card-text mb-4">{{ $video->description }}</p>

                                @auth 
                                    <div class="d-flex justify-content-evenly">       
                                        <a href="{{ route('videos.edit', $video->id) }}" class="btn button-video rounded-pill fw-bold">Editar</a>
                                        <form id="delete-form-{{ $video->id }}" action="{{ route('videos.destroy', $video->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger rounded-pill delete-video button-delete fw-bold" data-video-id="{{ $video->id }}">Excluir</button>
                                        </form>
                                    </div>    
                                @endauth    

                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination d-flex justify-content-center mt-3">
                    {{ $videos->links('custom-pagination') }}
                </div>

            @empty
                <section class="no-videos">
                    <div class="no-videos-card text-center">
                        <p class="no-videos-text fw-bold">Nenhum vídeo foi criado ainda.</p>
                    </div>
                </section> 
            @endforelse   
   <!-- </div> -->
    </main>
    
    <script src="{{ asset('js/videos/delete-modal-confirmation.js') }}"></script>
    
</x-layout>
    