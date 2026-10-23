<x-base> 

    <x-slot name="title"> JuggerZone [Evento {{ $team->title }}] </x-slot>

    <a href=" {{ route('team.create') }} "> Crear evento </a>

    <br>
    <br>
    <br>

    Mirando Equipo: {{ $team->title }}
    <p> {{ $team->description }} </p>
    <p>fecha: {{ $team->created_at->format('d/m/Y') }}</p>
    <p>actualizado: {{ $team->updated_at->format('d/m/Y') }}</p>
 
</x-base>