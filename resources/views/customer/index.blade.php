<x-app-layout>     
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

             <x-success-status class="mb-4" :status="session('message')" />

            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            @can('admin')
                            <th>ID</th>
                            @endcan
                            <th>Name</th>
                            <th>Email</th>
                            <th>Grade</th>
                            @can('admin')
                            <th>Edit</th>
                            <th>Delete</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($customers as $customer)
                        <tr>
                            @can('admin')
                            <td>{{ $customer->id }}</td>
                            @endcan
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->grade }}</td>
                            @can('admin')
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
                            @endcan
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