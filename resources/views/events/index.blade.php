<x-base> 

    <x-slot name="title"> JuggerZone [Eventos] </x-slot>

    <a href="/events/create"> Crear evento </a>

    <br>
    <br>
    <br>

    <table>
        @foreach ($events as $event)
            <tr>
                <td>
                    <a href="/events/{{ $event->id }}"> 
                        {{ $event->title }}
                    </a>
                </td>
                <td>
                    <a href="/events/{{ $event->id }}/edit"> 
                        Editar
                    </a>
                </td>
                <td>
                    <a href="/events/{{ $event->id }}/delete"> 
                        Eliminar
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</x-base>