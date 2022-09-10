<div>
  
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
  
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
  
<div class="flex flex-row">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b">
            <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    No.
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    First name(s)
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Last name
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Email address
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Identification Type
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Identification number
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr class="bg-gray-100 border-b">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $student->id }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $student->first_name }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $student->last_name }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $student->email }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $student->identification_type }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $student->identification_number }}
                </td>
                <td>
                    <button wire:click.prevent="edit({{ $student->id }})" 
                        class="w-1/3 inline-flex justify-center py-2 px-4 border border-transparent 
                        shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 
                        focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Edit
                    </button>
                    <button wire:click.prevent="delete({{ $student->id }})"  
                        class="w-1/3 inline-flex justify-center py-2 px-4 border border-transparent 
                        shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 
                        focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>