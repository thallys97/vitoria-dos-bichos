<x-layout>

    @push('head')
        <!-- Adicione os estilos específicos, se necessário -->
    <!--    <style>
            .photos-card {
                max-width: 18rem;
                margin: 1rem;
            }
    
            .photos-card img {
                max-height: 10rem; /* Defina a altura máxima conforme necessário */
                object-fit: cover; /* Garante que a imagem se ajusta ao tamanho do card */
            }
        </style> -->
        <link rel="stylesheet" href="{{ asset('css/photos/photos.css') }}">

    @endpush
    
    <main class="container">
        
        <div class="mb-4">
            <h1 class="title">Galeria de Fotos</h1>
            @auth
                <a href="{{ route('photos.create') }}" class="btn button-photo rounded-pill fw-bold fs-5 mt-4 mb-2">Registrar Nova Foto</a>
            @endauth
        </div> 
    
   <!-- <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3"> -->
        

    @if (count($photos) > 0)
            <div class="row">
                
                @foreach ($photos as $photo)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card custom-card">
                             
                            <a href="{{ $photo->path }}"><img src="{{ $photo->path }}.png" class="card-img-top" title="source: imgur.com" /></a>
                            
                            @guest
                                @if(isset($photo->title) || isset($photo->description))
                                    
                                    <div class="card-body">
                                        <h2 class="card-title fw-bold mt-3 text-center">{{ $photo->title }}</h5>
                                        <p class="card-text mb-4">{{ $photo->description }}</p>
                                    </div>
                                @endif
                            @endguest

                            @auth
                                <div class="card-body">
                                    <h2 class="card-title fw-bold mt-3 text-center">{{ $photo->title }}</h2>
                                    <p class="card-text mb-4">{{ $photo->description }}</p>

                                 
                                    <div class="d-flex justify-content-evenly">       
                                        <a href="{{ route('photos.edit', $photo->id) }}" class="btn button-photo rounded-pill fw-bold">Editar</a>
                                        <form id="delete-form-{{ $photo->id }}" action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger rounded-pill delete-photo button-delete fw-bold" data-photo-id="{{ $photo->id }}">Excluir</button>
                                        </form>
                                    </div>  
                                </div>      
                            @endauth    

                            
                        </div>
                    </div>
                @endforeach    
            </div>

                <div class="pagination d-flex justify-content-center mt-3">
                    {{ $photos->links('custom-pagination') }}
                </div>

    @else
        <section class="no-photos">
            <div class="no-photos-card text-center">
                <p class="no-photos-text fw-bold">Nenhuma foto foi registrada ainda.</p>
            </div>

        </section> 
        

    @endif    
    
   <!-- </div> -->
    </main>
    
    <script src="{{ asset('js/photos/delete-modal-confirmation.js') }}"></script>
    
</x-layout>
    