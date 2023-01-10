<x-app-layout>     
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">

        
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('update-customer/' . $customer->id) }}" method="POST">
                    @csrf 
                    @method('PUT')
                    
                    <div>
                        <x-input-label for="name" :value="__('Customer Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$customer->name" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="email" :value="__('Customer email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$customer->email" required autofocus />
                    </div>
                    <div>
                        <x-primary-button class="ml-3">
                            {{ __('Update Customer') }}
                        </x-primary-button>
                    </div>
                    

                </form>
            </div>
        </div>
    </div>
</x-app-layout>