@props(['skills','projects'])
<section id="portfolio"class="section  bg-light-primary dark:bg-primary min-h-[1400px]">
<div class="container mx-auto">

  <div class="flex flex-col items-center text-center">
    <h2 class="section-title">My Latest Projects</h2>
    <p class="subtitle">
        As a web developer, I take immense pride in showcasing my latest works. 
        These projects represent the culmination of my skills and expertise in both frontend and backend technologies. 
       
    </p>
</div>
</div>
<x-frontend.projects :skills="$skills" :projects="$projects" />

</section> 