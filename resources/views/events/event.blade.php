<x-base> 

    <x-slot name="title"> JuggerZone [Evento {{ $event->title }}] </x-slot>

    <a href="/events/create"> Crear evento </a>

    <br>
    <br>
    <br>

    Mirando evento {{ $event->title }}
    <p> {{ $event->description }} </p>
    <p>fecha: {{ $event->created_at->format('d/m/Y') }}</p>
    <p>actualizado: {{ $event->updated_at->format('d/m/Y') }}</p>
 
</x-base>