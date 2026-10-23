<x-base> 

    <x-slot name="title"> JuggerZone [Eventos] </x-slot>

    <a href="{{ route('event.create') }}"> Crear evento </a>

    <br>
    <br>
    <br>

    <table>
        @foreach ($events as $event)
            <tr>
                <td>
                    <a href="{{ route('event.show', $event) }}"> 
                        {{ $event->title }}
                    </a>
                </td>
                <td> 
                    <a href="{{ route('event.edit', $event) }}"> 
                        Editar
                    </a>
                </td>
                <td>
                    <form action="{{ route('event.destroy', $event) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Eliminar </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-base>