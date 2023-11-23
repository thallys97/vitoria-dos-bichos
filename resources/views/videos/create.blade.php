<x-layout>

    @push('head')
        <link rel="stylesheet" href="{{ asset('css/videos/videos.css') }}">
    @endpush   

    <main class="container py-5">
        <h1 class="title d-none d-lg-block">Adicionar Novo Vídeo</h1>
        
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Título do Vídeo (opcional)</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="path" class="form-label">Link do Vídeo (YouTube, Vimeo, etc.)</label>
                <input type="text" class="form-control" id="path" name="path" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrição do Vídeo (opcional)</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Salvar Vídeo</button>
        </form>
    </main>

</x-layout>