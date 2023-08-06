<x-frontend-layout>

  {{--Hero section primary--}}
  <x-frontend.hero />
  {{--promote section tail-100--}}
  <x-frontend.promote />

  {{--About section--}}
  <x-frontend.about />

  {{--Skills tail-100--}}
  <x-frontend.skills :skills="$skills" />

  {{--Portfolio section Primary--}}
  
  <x-frontend.portfolio :skills="$skills" :projects="$projects"  />
  {{--Services secondary--}}

  <x-frontend.services />

  {{-- Contact primary --}}
  <x-frontend.contact />>

</x-frontend-layout>
