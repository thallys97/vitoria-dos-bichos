<x-layout>

    <main class="container">
        <h2>Lista de Usuários</h2>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Criar Usuário</a>

        @if (count($users) > 0)
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
        @else
            <p>Nenhum usuário encontrado.</p>
        @endif
    </main>

    <script src="{{ asset('js/users/delete-modal-confirmation.js') }}"></script>     

</x-layout> 
