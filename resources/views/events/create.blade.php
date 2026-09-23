<x-base> 

    <x-slot name="title"> JuggerZone [Crear Evento] </x-slot>
    
     @isset($event)
          <form action="/events/update/{{ $event->id }}" method="POST">
               
               @csrf
               @method('PUT')
               
               <label for="title">Titulo</label>
               <input type="text" name="title" id="title" value="{{ $event->title }}">
               
               <br>

               <label for="description">Descripcion</label>
               <textarea name="description" id="description" cols="30" rows="10">{{ $event->description }}</textarea>
     @else
          <form action="/events/store" method="POST">
               
               @csrf
               
               <label for="title">Titulo</label>
               <input type="text" name="title" id="title" >
               
               <br>

               <label for="description">Descripcion</label>
               <textarea name="description" id="description" cols="30" rows="10"></textarea>
     @endisset
     
          <br>
          <button type="submit"> Guardar </button>
     </form>



</x-base>