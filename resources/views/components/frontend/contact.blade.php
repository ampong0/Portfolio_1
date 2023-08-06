<section id="contact" class="section bg:light-primary bg:dark-primary">
    <div class="container mx-auto">
      <div class="flex flex-col item-center text-center">
        <div class="flex flex-col items-col items-center text-center">
          <h2 class="section-title">Contact Me</h2>
          
        </div>
        <div class="flex flex-col md:flex-row md:gap-x-8">
          <div class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:mb-0 lg:pt-2">
            <div class="flex flex-col lg:flex-row gap-x-4">
              <div class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
              </div>
              <div>
                <h4 class="flex-body text-xl mb-1">Have a Question?</h4>
                <p class="text-paragraph mb-1">I am here to answer.</p>
                <p class="text-paragraph mb-1">Email: ampongreuben90@.com.</p>
                <p class="text-paragraph mb-1">Tel: +233548056290</p>
              </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-x-4">
              <div class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
              </div>
              <div>
                <h4 class="flex-body text-xl mb-1">My current location?</h4>
                <p class="text-paragraph mb-1">Ghana, Accra-Madina.</p>
                <p class="text-paragraph mb-1">Serving clients worldwide</p>
              </div>
            </div>
          </div>
           <!-- Your form elements go here -->
           <form x-data="form" @submit.prevent="submitForm" class="space-y-8 w-full max-w-md">
            <div x-show = "showMessage" 
           class="p-4  text-sm text-blue-8.00 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
           <div class="max-w-7xl mx-auto">Thank you for contacting me.</div>
           </div>
           @csrf
          
            <div class="flex gap-8">
                <div>
                    <input class="input" type="text" name="name" x-model="form.name" placeholder="Your Name" />
                    <template x-if = "errors.name">
                      <span  x-text ="errors.name[0]" class="text-sm text-red-400"></span>
                    </template>
                    
                </div>
                <div>
                 <input class="input" type="text" name="email" x-model="form.email" placeholder="Your Email" />
                  <template x-if = "errors.email">
                    <span  x-text ="errors.email[0]" class="text-sm text-red-400"></span>
                  </template>
                </div>
            </div>
            <textarea name="body" x-model = form.body class="textarea" placeholder="Your meesage" spellcheck="false"></textarea>

            <template x-if = "errors.body">
              <span x-text ="errors.body[0]" class="text-sm text-red-400"></span>
            </template>
            <button type="submit" 
            class="btn btn-lg bg:accent hover:bg-light-secondary dark:bg-dark-secondary text-black dark:text-white hover:text-light-tail-500 dark:hover:text-dark">Send Message</button>
            
          </form>
        </div>
      </div>
    </div>
  </section>
  