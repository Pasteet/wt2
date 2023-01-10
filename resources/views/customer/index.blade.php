<x-app-layout>     
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

             <x-success-status class="mb-4" :status="session('message')" />

            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>
                                <br>
                                <a href="{{ url('edit-customer/'. $customer->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ url('delete-customer/' .$customer->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-primary-button class="btn btn-primary">Delete </x-primary-button>
                                </form>
                            </td>
                        </tr>
                        @empty      
                        <tr>
                            <td colspan="5"> Nothing found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>