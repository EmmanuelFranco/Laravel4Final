<div class="m-2 p-2">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Nombre usuario</th>
                <th scope="col" class="px-6 py-3">Email usuario</th>
                <th scope="col" class="px-6 py-3">Fecha registro</th>
                <th scope="col" class="px-6 py-3">Editar</th> 
                {{-- <th scope="col" class="px-6 py-3">Eliminar</th>  --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th scope="row" class="px-6 py-3" >{{ $usuario->id }}</th>
                    <td scope="row" class="px-6 py-3" >{{ $usuario->name }}</td>
                    <td scope="row" class="px-6 py-3" >{{ $usuario->email }}</td>
                    <td scope="row" class="px-6 py-3" >{{ $usuario->created_at }}</td>
                    <td scope="row" class="px-6 py-3" >
                        <livewire:editar-usuario :usuario="$usuario->id" :key="$usuario->id" />
                    </td>  
                    {{-- <td scope="row" class="px-6 py-3" >
                        <x-button type="button" wire:click="eliminarUsuario({{$usuario->id}})" scope="row" class="px-6 py-3">Eliminar</x-button>
                    </td>  --}}
                </tr>
            @endforeach


        </tbody>
    </table>
    <div class="m-5 p-5">
        {{ $usuarios->withQueryString()->links() }}
    </div>


</div>
