<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="flex justify-end m2 p-2">
            <a href = "{{ route('projects.create') }}" class = "px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Project
        </a>
    </div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                 name
                </th>
                <th scope="col" class="px-6 py-3">
                    skill
                </th>
                <th scope="col" class="px-6 py-3">
                    image
                </th>
               
                <th scope="col" class="px-6 py-3">
                   
                </th>
            </tr>
        </thead>
        <tbody>

        @forelse ($projects as $project)

        
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $project->name }}
                </th>
                <td class="px-6 py-4">
                  {{ $project->skill->name }}
                </td>
                <td class="px-6 py-4">
                 <img src="{{ asset('storage/'. $project->image) }}" class="w-12 h-12" />
                </td>
                <td class="flex justify-end  px-6 py-4">
                    <a href="{{ route('projects.edit', $project->id)}}"

                       
                        <button type="button" class="flex items-center px-4 py-2 text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline focus:outline-none">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M13.293 6.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-5 1a1 1 0 01-1.216-1.215l1-5a1 1 0 01.242-.391l9-9zM14 5l1 1-9 9-1-1 9-9z" clip-rule="evenodd" />
                                <path d="M3 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H3zm10 1.414L15.586 6H13v2.586l-1.293 1.293a1 1 0 01-1.414 0L8 7.586 3.414 12.2a.5.5 0 000 .707l2.586 2.586a.5.5 0 00.707 0L13 10.414V8h2.586l1.207-1.207a.5.5 0 000-.708l-2.586-2.586a.5.5 0 00-.707 0z" />
                            </svg>
                            Edit
                        </button>
                        
                    </a>


                <form  method="POST" action="{{ route('projects.destroy', $project->id) }}">
                    @csrf
                    @method('DELETE')
                   
                    <!-- Delete Button with Icon -->
                    <button type="submit" class="flex items-center px-4 py-2 text-sm font-medium text-white bg-red-500 rounded hover:bg-red-600 focus:outline-none"
                            onclick="return confirm('Are you sure you want to delete this project?')">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Delete
                    </button>
                      
                </form>
            </td>
          <tr>
            @empty
             <tr>
                <td>
                <h2> no project</h2>
                </td>
             </tr>
        @endforelse

        </tbody>


    </table>
</div>

        </div>
    </div>
</x-app-layout>