<x-layout>

    @push('head')
        <link rel="stylesheet" href="{{ asset('css/videos/videos.css') }}">
    @endpush   

    <main class="container">
        <h1 class="title">Editar Vídeo</h1>
  
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('videos.update', $video->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="container-lg form-custom">

                <div class="form-group">
                    <label for="title" class="form-label fs-5">Título do Vídeo (opcional)</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $video->title }}">
                </div>

                <div class="form-group">
                    <label for="path" class="form-label fs-5">Link do Vídeo (YouTube)</label>
                    <input type="text" class="form-control" id="path" name="path" value="{{ $video->path }}" required>
                </div>

                <div class="form-group">
                    <label for="description" class="form-label fs-5">Descrição do Vídeo (opcional)</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{ $video->description }}</textarea>
                </div>

                <div class="form-buttons d-flex justify-content-evenly">
                    <button type="submit" class="btn button-video rounded-pill fw-bold">Atualizar registro de Vídeo</button>
                    <a href="{{ route('videos.index') }}" class="btn btn-secondary button-video-list rounded-pill fw-bold">Lista de Vídeos</a>
                </div>

            </div>
        </form>
    </main>

</x-layout>
