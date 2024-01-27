<x-layout>
  
@push('head')
    <link rel="stylesheet" href="{{ asset('css/users/users.css') }}">
@endpush   

<main class="container">
    <h1 class="title">Criar Novo Usuário</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <div class="container-lg form-custom">
            <div class="form-group">
                <label for="name" class="form-label fs-5">Nome</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label fs-5">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password" class="form-label fs-5">Senha</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label fs-5">Confirme a Senha</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone" class="form-label fs-5">Telefone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
            </div>

            <div class="form-group form-group-role">
                <label for="role" class="form-label fs-5">Função</label>
                <div class="input-group"> 
                    <select name="role" id="role" class="form-control" required>
                        <option value="autor">Autor</option>
                        <option value="editor">Editor</option>
                        <option value="administrador">Administrador</option>
                    </select>
                    <div class="input-group-append"> 
                        <span class="input-group-text">
                            <i class="fas fa-caret-down"></i> <!-- Ícone de seta para baixo do Font Awesome -->
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-buttons d-flex justify-content-evenly">
                <button type="submit" class="btn button-user rounded-pill fw-bold">Criar Usuário</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary button-user-list rounded-pill fw-bold">Lista de Usuários</a>
            </div>
        </div>    
    </form>
</main>

</x-layout> 
