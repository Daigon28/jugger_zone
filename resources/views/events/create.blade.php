<x-base> 

    <x-slot name="title"> JuggerZone [Crear Evento] </x-slot>

    @if ($errors->any())
          
        
    @endif
    
     @isset($event)
          {{-- <form action="/events/update/{{ $event->id }}" method="POST"> --}}
          <form action="{{ route('event.update', $event) }}" method="POST">
               
               @csrf
               @method('PUT')



               <label for="title">Titulo:</label>
               <input type="text" name="title" id="title" value="{{ old('title', $event->title) }}">
               
               <br>
               
               <label for="slug">Titulo SEO:</label>
               <input type="text" name="slug" id="slug" value="{{ old('slug', $event->slug) }}">
               
               <br>

               <label for="description">Descripcion:</label>
               <textarea name="description" id="description" cols="30" rows="10">{{ old('description', $event->description) }}</textarea>

               <br>

               <label for="location">Ubicacion:</label>
               <input type="text" name="location" id="location" value="{{ old('location', $event->location) }}">

               <br>

               <label for="start_time">Hora de inicio:</label>
               <input type="time" name="start_time" id="start_time" value="{{ old('start_time', $event->start_time) }}">

               <br>

               <label for="end_time">Hora de finalizacion:</label>
               <input type="time" name="end_time" id="end_time" value="{{ old('end_time', $event->end_time) }}">

               <br>

               <label for="date">fecha:</label>
               <input type="date" name="date" id="date" value="{{ old('date', $event->date) }}">
               
     @else
          {{-- <form action="/events/store" method="POST"> --}}
          <form action="{{ route('event.store') }}" method="POST">
               
               @csrf
               
               <label for="title">Titulo:</label>
               <input type="text" name="title" id="title"  value="{{ old('title') }}">
               
               <br>
               
               <label for="slug">Titulo SEO:</label>
               <input type="text" name="slug" id="slug"  value="{{ old('slug') }}">
               
               <br>

               <label for="description">Descripcion:</label>
               <textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
               
               <br>
               
               <label for="location">Ubicacion:</label>
               <input type="text" name="location" id="location" value="{{ old('location') }}">
               
               <br>
               
               <label for="start_time">Hora de inicio:</label>
               <input type="time" name="start_time" id="start_time" value="{{ old('start_time') }}">
               
               <br>
               
               <label for="end_time">Hora de finalizacion:</label>
               <input type="time" name="end_time" id="end_time" value="{{ old('end_time') }}">
               
               <br>
               
               <label for="date">fecha:</label>
               <input type="date" name="date" id="date" value="{{ old('date') }}">
     @endisset
     
          <br>
          <button type="submit"> Guardar </button>
     </form>



</x-base>