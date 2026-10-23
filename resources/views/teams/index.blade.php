<x-base> 

    <x-slot name="title"> JuggerZone [Equipos] </x-slot>

    <a href="{{ route('team.create') }}"> Crear equipo </a>

    <br>
    <br>
    <br>

    <table>
        @foreach ($teams as $team)
            <tr>
                <td>
                    <a href="{{ route('team.show', $team) }}"> 
                        {{ $team->name }}
                    </a>
                </td>
                <td> 
                    <a href="{{ route('team.edit', $team) }}"> 
                        Editar
                    </a>
                </td>
                <td>
                    <form action="{{ route('team.destroy', $team) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Eliminar </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-base>