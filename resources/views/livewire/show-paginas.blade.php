<div class="m-2 p-2">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Nombre pagina</th>
                <th scope="col" class="px-6 py-3">Descripcion pagina</th>
                <th scope="col" class="px-6 py-3">url pagina</th>
                <th scope="col" class="px-6 py-3">Editar</th>
                <th scope="col" class="px-6 py-3">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paginas as $pagina)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th scope="row" class="px-6 py-3" >{{ $pagina->id }}</th>
                    <td scope="row" class="px-6 py-3" >{{ $pagina->nombre_pagina }}</td>
                    <td scope="row" class="px-6 py-3" >{{ $pagina->descripcion_pagina }}</td>
                    <td scope="row" class="px-6 py-3" >{{ $pagina->url_pagina }}</td>

                    @if ($pagina->estado == 0)
                    <td >
                        <x-button type="button" wire:click="cambioEstado({{$pagina->id}},1)" scope="row" class="px-6 py-3">Activo</x-button>
                    </td>
                    @else
                    <td >
                        <x-button type="button" wire:click="cambioEstado({{$pagina->id}},0)" scope="row" class="px-6 py-3">inactivo</x-button>
                    </td>
                    @endif

                    <td scope="row" class="px-6 py-3" >
                        <livewire:edit-pagina :pagina="$pagina->id" :key="$pagina->id" />
                    </td> 
                </tr>
            @endforeach


        </tbody>
    </table>
    <div class="m-5 p-5">
        {{ $paginas->withQueryString()->links() }}
    </div>


</div>
