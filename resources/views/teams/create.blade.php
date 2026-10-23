<x-base> 

    <x-slot name="title"> JuggerZone [Crear equipo] </x-slot>
    
     @isset($team)
          {{-- <form action="/teams/update/{{ $team->id }}" method="POST"> --}}
          <form action="{{ route('team.update', $team) }}" method="POST">
               
               @csrf
               @method('PUT')
               
               <label for="name">Nombre</label>
               <input type="text" name="name" id="name" value="{{ $team->name }}">
               
               <br>
               
               <label for="slug">Nombre SEO</label>
               <input type="text" name="slug" id="slug" value="{{ $team->slug }}">
               
               <br>

               <label for="description">Descripcion</label>
               <textarea name="description" id="description" cols="30" rows="10">{{ $team->description }}</textarea>
     @else
          {{-- <form action="/teams/store" method="POST"> --}}
          <form action="{{ route('team.store') }}" method="POST">
               
               @csrf
               
               <label for="name">Nombre</label>
               <input type="text" name="name" id="name" >
               
               <br>
               
               <label for="slug">Nombre SEO</label>
               <input type="text" name="slug" id="slug" >
               
               <br>

               <label for="description">Descripcion</label>
               <textarea name="description" id="description" cols="30" rows="10"></textarea>
     @endisset
     
          <br>
          <button type="submit"> Guardar </button>
     </form>



</x-base>
