<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}


    <div class="mb-5">
        <label for="comentario" class="mb-2 block uppercase text-gray-500 font-bold">
          Añade un comentario
        </label>
        <textarea 
        wire:model="comentario"
        id="comentario"
        name="comentario"
        placeholder="Agrega un comentario"
        class="border p-3 w-full rounded @error('comentario') border-red-500
            
        @enderror"></textarea>

        @error('comentario')
            <p class="bg-red-500 text-white my-2 rounded-xl text-sm p-2 text-center">{{$message}}</p>

        @enderror
    </div>


    <button wire:click="comentar"
    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        <p>Comentar</p>
    </button>


    
</div>
