<div class="m-2 p-2"> 
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
           
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="col" class="px-6 py-3">#</th> 
            <th scope="col" class="px-6 py-3">Descripcion bitacora</th>
            <th scope="col" class="px-6 py-3">Usuario</th>
            <th scope="col" class="px-6 py-3">Fecha </th> 
          </tr>
        </thead>
        <tbody>
            @foreach ($bitacoras as $bitacora)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"> 
               
                    <th scope="row">{{$bitacora->id}}</th>
                    <td>{{$bitacora->descripcion_bitacora}}</td>
                    <td>{{$bitacora->UsuarioBitacora->name}}</td> 
                    
                    <td>{{$bitacora->created_at}}</td> 
                </tr>
            @endforeach
         
           
        </tbody>
      </table>
      <div class="m-5 p-5">
        {{$bitacoras->withQueryString()->links() }}
      </div>
    
              
</div>
