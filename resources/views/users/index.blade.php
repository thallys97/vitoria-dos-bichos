<x-layout>

@push('head')
    <link rel="stylesheet" href="{{ asset('css/users/users.css') }}">
@endpush 

    <main class="container">
        <h1 class="title">Lista de Usuários</h1>
        <a href="{{ route('users.create') }}" class="btn button-user rounded-pill fw-bold my-3">Criar Usuário</a>

        @if (count($users) > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Função</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                                    <form id="delete-form-{{ $user->id }}"  action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger delete-user" data-user-id="{{ $user->id }}">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>    
        @else
            <p>Nenhum usuário encontrado.</p>
        @endif
    </main>

    <script src="{{ asset('js/users/delete-modal-confirmation.js') }}"></script>     

</x-layout> 
