<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update Project
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white shadow-md rounded-md">

        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
    
        <form method="POST" action="{{ route('projects.update',$project->id) }}" class = p-4 enctype = "multipart/form-data">
        @csrf
        @method('PUT')
      
<label for="skill_id " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Skills</label>
<select id="skill_id" name="skill_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
   @foreach ($skills as $skill)
   <option value="{{ $skill->id}}" @selected(old('skill_id',$project->skill_id) == $skill->id)>{{ $skill->name}}

    @endforeach
</select>



        <!-- name -->
        <div class="mt-2">
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name' , $project->name)" />
            
        </div>
        </div>

         <!-- project Url -->
         <div class="mt-2">
            <div>
                <x-input-label for="project_url" :value="__('URL')" />
                <x-text-input id="project_url" class="block mt-1 w-full" type="text" name="project_url" 
                    :value="old('project_url', $project->project_url ?: '')" />
            </div>
            
         </div>

        <!-- image-->
        <div class="mt-2">
            <x-input-label for="image" :value="__('Image')" />

            <x-text-input id="image" class="block mt-1 w-full"
                            type="file"
                            name="image"
                            />
        </div>

        <div class="flex items-center justify-end mt-4">
           
            <x-primary-button class="ml-3">
              Update
            </x-primary-button>
        </div>
    </form>
               
        </div>
    </div>
</x-app-layout>
