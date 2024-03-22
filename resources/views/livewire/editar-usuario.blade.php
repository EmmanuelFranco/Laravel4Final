<div> 
    <x-button type="button" wire:click="$set('open',true)">Editar</x-button>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Editar
        </x-slot>
        <x-slot name="content">
            <div>
                <label for="large-input" class="block mb-2 text-sm font-medium ">Nombre</label>
                <input type="text" wire:model='name'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 "
                    required />
            </div>
            <div>
                <label for="large-input" class="block mb-2 text-sm font-medium ">Email</label>
                <input type="text" wire:model='email'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 "
                      />
            </div>
            <div>
                <label for="large-input" class="block mb-2 text-sm font-medium ">password</label>
                <input type="text" wire:model='password'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 "
                    required />
            </div>

        </x-slot>
        <x-slot name="footer">
            <div>
                <x-button wire:click="$set('open',false)">Cancelar</x-button>

                <x-button wire:click='save'>Registrar</x-button>


            </div>
        </x-slot>
    </x-dialog-modal>
</div>
