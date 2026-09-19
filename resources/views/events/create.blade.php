<x-base> 

    <x-slot name="title"> JuggerZone [Crear Evento] </x-slot>
    
     @if ($event == null)
          <form action="/events/store" method="POST">
     @else
          <form action="/events/update/{{ $event->id }}" method="POST">
          @method('PUT')
     @endif
          @csrf

          <label for="title">Titulo</label>
          <input type="text" name="title" id="title" @if ($event->title != null)
               value="{{ $event->title }}"
          @endif>

          <br>

          <label for="description">Descripcion</label>
          @if ($event->title == null)
              <textarea name="description" id="description" cols="30" rows="10"></textarea>
          @else
              <textarea name="description" id="description" cols="30" rows="10">{{ $event->description }}</textarea>
          @endif
          

          <br>

          <button type="submit"> Guardar </button>


     </form>



</x-base>