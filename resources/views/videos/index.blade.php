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
        

    @if (count($videos) > 0)
            <div class="row">
                
                @foreach ($videos as $video)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card custom-card">
                            
                            <iframe class="card-img-top" width="300" height="315" src="{{ $video->path }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            
                            @guest
                                @if(isset($video->title) || isset($video->description))
                                    
                                    <div class="card-body">
                                        <h2 class="card-title fw-bold mb-3  text-center">{{ $video->title }}</h2>
                                        <p class="card-text">{{ $video->description }}</p>
                                    </div>
                                @endif
                            @endguest

                            @auth
                                <div class="card-body">
                                    <h2 class="card-title fw-bold mb-3 text-center">{{ $video->title }}</h5>
                                    <p class="card-text">{{ $video->description }}</p>

                                 
                                    <div class="d-flex justify-content-evenly mt-3">       
                                        <a href="{{ route('videos.edit', $video->id) }}" class="btn button-video rounded-pill fw-bold">Editar</a>
                                        <form id="delete-form-{{ $video->id }}" action="{{ route('videos.destroy', $video->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger rounded-pill delete-video button-delete fw-bold" data-video-id="{{ $video->id }}">Excluir</button>
                                        </form>
                                    </div>  
                                </div>      
                            @endauth    

                            
                        </div>
                    </div>
                @endforeach    
            </div>

                <div class="pagination d-flex justify-content-center mt-3">
                    {{ $videos->links('custom-pagination') }}
                </div>

    @else
        <section class="no-videos">
            <div class="no-videos-card text-center">
                <p class="no-videos-text fw-bold">Nenhum vídeo foi criado ainda.</p>
            </div>
        </section> 
    @endif    
    
   <!-- </div> -->
    </main>
    
    <script src="{{ asset('js/videos/delete-modal-confirmation.js') }}"></script>
    
</x-layout>
    