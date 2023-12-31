@props(['skills', 'projects'])
<div class="container max-auto" x-data="{selectedTab: 'all'}">
    <nav class="relatve w-full overflow-x-auto border-light-tail-100 dark:text-dark-navy-100">
        <ul class="inline-flex items-center">
            <li class="cursor-pointer capitalize m-4">  
                <button @click="selectedTab = 'all' "
                 class="w-35 text-center px-5 py-2 bg-light-tail-500 dark:bg-dark-navy-100 hover:bg-accent text-white rounded-md transition"
                 :class="selectedTab== 'all' ? 'bg-accent' : ''">All</button> 
                </li>

            @foreach ($skills as $projectSkill)
            <li class="cursor-pointer capitalize m-4" x-data="{ projectSkill: {{ json_encode( $projectSkill) }} }"> 
                <button @click="selectedTab = projectSkill.id "
                class="w-35 text-center px-5 py-2 bg-light-tail-500 dark:bg-dark-navy-100 hover:bg-accent text-white rounded-md transtion"
                :class="selectedTab == projectSkill.id ? 'bg-accent' : ''">
                    {{ $projectSkill->name }}</button> </li>  
            @endforeach
                
        </ul>
    </nav>

    <section class="grid gap-y-8 md:grid-cols-2 md:gap-4 lg:grid-cols-4 lg:gap-8" >
        @foreach ($projects as $project )

        <x-frontend.project :project="$project" />
            
        @endforeach
    </section>
</div>