<x-base> 

    <x-slot name="title"> JuggerZone [Crear Evento] </x-slot>
    
     @isset($event)
          {{-- <form action="/events/update/{{ $event->id }}" method="POST"> --}}
          <form action="{{ route('event.update', $event) }}" method="POST">
               
               @csrf
               @method('PUT')
               
               <label for="title">Titulo</label>
               <input type="text" name="title" id="title" value="{{ $event->title }}">
               
               <br>
               
               <label for="slug">Titulo SEO</label>
               <input type="text" name="slug" id="slug" value="{{ $event->slug }}">
               
               <br>

               <label for="description">Descripcion</label>
               <textarea name="description" id="description" cols="30" rows="10">{{ $event->description }}</textarea>

               <br>

               <label for="date">fecha</label>
               <input type="date" name="date" id="date" value="{{ $event->date }}">
     @else
          {{-- <form action="/events/store" method="POST"> --}}
          <form action="{{ route('event.store') }}" method="POST">
               
               @csrf
               
               <label for="title">Titulo</label>
               <input type="text" name="title" id="title" >
               
               <br>
               
               <label for="slug">Titulo SEO</label>
               <input type="text" name="slug" id="slug" >
               
               <br>

               <label for="description">Descripcion</label>
               <textarea name="description" id="description" cols="30" rows="10"></textarea>
               
               <br>
               
               <label for="date">fecha</label>
               <input type="text" name="date" id="date">
     @endisset
     
          <br>
          <button type="submit"> Guardar </button>
     </form>



</x-base>