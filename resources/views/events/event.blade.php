<x-base> 

    <x-slot name="title"> JuggerZone [Evento {{ $event->title }}] </x-slot>

    <a href="/events/create"> Crear evento </a>

    <br>
    <br>
    <br>

    <p>Mirando evento: {{ $event->title }} </p>
    <p>Descripcion {{ $event->description }} </p>
    <p>Ubicacion {{ $event->location }} </p>
    <p>Hora de inicio {{ $event->start_time }} </p>
    <p>Hora de finalizacion {{ $event->end_time }} </p>
    <p>Fecha: {{ $event->date->format('d/m/Y') }}</p>
 
</x-base>