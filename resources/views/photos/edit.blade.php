<x-layout>

    @push('head')
        <link rel="stylesheet" href="{{ asset('css/photos/photos.css') }}">
    @endpush   

    <main class="container">
        <h1 class="title">Editar Foto</h1>
  
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('photos.update', $photo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="container-lg form-custom">

                <div class="form-group">
                    <label for="title" class="form-label fs-5">Título da Foto (opcional)</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $photo->title }}">
                </div>

                <div class="form-group">
                    <label for="path" class="form-label fs-5">Link da Foto (Imgur)</label>
                    <input type="text" class="form-control" id="path" name="path" value="{{ $photo->path }}" required>
                </div>

                <div class="form-group">
                    <label for="description" class="form-label fs-5">Descrição da Foto (opcional)</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{ $photo->description }}</textarea>
                </div>

                <div class="form-buttons d-flex justify-content-evenly">
                    <button type="submit" class="btn button-photo rounded-pill fw-bold">Atualizar registro de Foto</button>
                    <a href="{{ route('photos.index') }}" class="btn btn-secondary button-photo-list rounded-pill fw-bold">Lista de Fotos</a>
                </div>

            </div>
        </form>
    </main>

</x-layout>
