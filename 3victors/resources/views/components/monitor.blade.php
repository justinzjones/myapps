  <!--
    This example requires some changes to your config:
    
    ```
    // tailwind.config.js
    module.exports = {
      // ...
      plugins: [
        // ...
        require('@tailwindcss/forms'),
      ],
    }
    ```
  -->
  <!--
    This example requires updating your template:

    ```
    <html class="h-full bg-gray-900">
    <body class="h-full">
    ```
  -->
  <div>
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="relative z-50 xl:hidden" role="dialog" aria-modal="true">
      <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0 bg-gray-900/80"></div>

      <div class="fixed inset-0 flex">
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div class="relative flex flex-1 w-full max-w-xs mr-16">
          <!--
            Close button, show/hide based on off-canvas menu state.

            Entering: "ease-in-out duration-300"
              From: "opacity-0"
              To: "opacity-100"
            Leaving: "ease-in-out duration-300"
              From: "opacity-100"
              To: "opacity-0"
          -->
          <div class="absolute top-0 flex justify-center w-16 pt-5 left-full">
            <button type="button" class="-m-2.5 p-2.5">
              <span class="sr-only">Close sidebar</span>
              <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <!-- Sidebar component, swap this element with another sidebar if you like -->
          <div class="flex-col hidden px-6 overflow-y-auto bg-gray-800 grow gap-y-5 ring-1 ring-white/10">
            <div class="flex items-center h-16 shrink-0">
              <img class="w-auto h-8" src="https://cdn.prod.website-files.com/66465b00a35a1ad…95ce1/66466c4c94c88af113a6b694_3Victors_color.svg" alt="Your Company">
            </div>
            <nav class="flex flex-col flex-1">
              <ul role="list" class="flex flex-col flex-1 gap-y-7">
                <li>
                  <ul role="list" class="-mx-2 space-y-1">
                    <li>
                      <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                      <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                        <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        Onboard
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-white bg-gray-800 rounded-md group gap-x-3">
                        <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 17.25v-.228a4.5 4.5 0 00-.12-1.03l-2.268-9.64a3.375 3.375 0 00-3.285-2.602H7.923a3.375 3.375 0 00-3.285 2.602l-2.268 9.64a4.5 4.5 0 00-.12 1.03v.228m19.5 0a3 3 0 01-3 3H5.25a3 3 0 01-3-3m19.5 0a3 3 0 00-3-3H5.25a3 3 0 00-3 3m16.5 0h.008v.008h-.008v-.008zm-3 0h.008v.008h-.008v-.008z" />
                        </svg>
                        Deployments
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                        <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9.348 14.651a3.75 3.75 0 010-5.303m5.304 0a3.75 3.75 0 010 5.303m-7.425 2.122a6.75 6.75 0 010-9.546m9.546 0a6.75 6.75 0 010 9.546M5.106 18.894c-3.808-3.808-3.808-9.98 0-13.789m13.788 0c3.808 3.808 3.808 9.981 0 13.79M12 12h.008v.007H12V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        Activity
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                        <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                        Domains
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                        <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                        </svg>
                        Usage
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                        <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Settings
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="text-xs font-semibold leading-6 text-gray-400">Your teams</div>
                  <ul role="list" class="mt-2 -mx-2 space-y-1">
                    <li>
                      <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                      <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">P</span>
                        <span class="truncate">Planetaria</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">P</span>
                        <span class="truncate">Protocol</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">T</span>
                        <span class="truncate">Tailwind Labs</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="mt-auto -mx-6">
                  <a href="#" class="flex items-center px-6 py-3 text-sm font-semibold leading-6 text-white gap-x-4 hover:bg-gray-800">
                    <img class="w-8 h-8 bg-gray-800 rounded-full" src="https://cdn.prod.website-files.com/66465b00a35a1ad891c95ce1/66466c4c94c88af113a6b694_3Victors_color.svg" alt="">
                    <span class="sr-only">Your profile</span>
                    <span aria-hidden="true">3V admin</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden xl:fixed xl:inset-y-0 xl:z-50 xl:flex xl:w-72 xl:flex-col">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex flex-col px-6 py-3 overflow-y-auto grow gap-y-5 bg-black/10 ring-1 ring-white/5">
        <div class="flex items-center h-16 shrink-0">
          <img class="w-auto h-16" src="https://cdn.prod.website-files.com/66465b00a35a1ad891c95ce1/66466c4c94c88af113a6b694_3Victors_color.svg" alt="Your Company">
        </div>
        <nav class="flex flex-col flex-1 pt-6">
          <ul role="list" class="flex flex-col flex-1 gap-y-7">
            <li>
              <ul role="list" class="-mx-2 space-y-1">
                <li>
                  <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                  <a href="#" @click.prevent="menu = 'onboard'" class="flex p-2 text-sm font-semibold leading-6 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3" x-bind:class="{ 'hover:border-gray-300 text-gray-400  hover:text-gray-700': menu !== 'onboard', 'border-gray-300 bg-gray-800 text-white': menu === 'onboard' }">
                    <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                    </svg>
                    Onboard
                  </a>
                </li>

                <li>
                  <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                  <a href="#" @click.prevent="menu = 'visual'" class="flex p-2 text-sm font-semibold leading-6 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3" x-bind:class="{ 'hover:border-gray-300 text-gray-400  hover:text-gray-700': menu !== 'visual', 'border-gray-300 bg-gray-800 text-white': menu === 'visual' }">
                    <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                    </svg>
                    Visual
                  </a>
                </li>

                <li>
                  <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                  <a href="#" @click.prevent="menu = 'monitor'" class="flex p-2 text-sm font-semibold leading-6 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-700  text-gray-400': menu !== 'monitor', 'border-gray-300 bg-gray-800 text-white': menu === 'monitor' }">
                  <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                    </svg>
                    Monitor
                  </a>
                </li>

                <li>
                  <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                  <a href="#" @click.prevent="menu = 'scheduler'" class="flex p-2 text-sm font-semibold leading-6 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-700  text-gray-400': menu !== 'scheduler', 'border-gray-300 bg-gray-800 text-white': menu === 'scheduler' }">
                  <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 17.25v-.228a4.5 4.5 0 00-.12-1.03l-2.268-9.64a3.375 3.375 0 00-3.285-2.602H7.923a3.375 3.375 0 00-3.285 2.602l-2.268 9.64a4.5 4.5 0 00-.12 1.03v.228m19.5 0a3 3 0 01-3 3H5.25a3 3 0 01-3-3m19.5 0a3 3 0 00-3-3H5.25a3 3 0 00-3 3m16.5 0h.008v.008h-.008v-.008zm-3 0h.008v.008h-.008v-.008z"></path>
  </svg>
                    Scheduler
                  </a>
                </li>

                <li>
                  <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                    <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                    Domains
                  </a>
                </li>

                <li>
                  <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                    <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Settings
                  </a>
                </li>
              </ul>
            </li>

            <li class="mt-auto -mx-6">
              <a href="#" class="flex items-center px-6 py-3 text-sm font-semibold leading-6 text-white gap-x-4 hover:bg-gray-800">
                <img class="w-8 h-8 bg-gray-800 rounded-full" src="https://media.licdn.com/dms/image/v2/D5603AQGK4W8Cye4JQw/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1713384133828?e=1737590400&v=beta&t=mqy3J7MG08mZRHMi9MRshrq6hJopURz1ApXHQhTJraI" alt="">
                <span class="sr-only">Your profile</span>
                <span aria-hidden="true">3V admin</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="xl:pl-72">
      <!-- Sticky search header -->
      <div class="sticky top-0 z-40 flex items-center h-16 px-4 bg-gray-900 border-b shadow-sm shrink-0 gap-x-6 border-white/5 sm:px-6 lg:px-8">
        <button type="button" class="-m-2.5 p-2.5 text-white xl:hidden">
          <span class="sr-only">Open sidebar</span>
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
          </svg>
        </button>

        <div class="flex self-stretch flex-1 gap-x-4 lg:gap-x-6">

          


        </div>
        <div class="flex-none order-first px-2 py-1 text-xs font-medium text-orange-500 rounded-full bg-indigo-400/10 ring-1 ring-inset ring-indigo-400/30 sm:order-none">Development</div>
      </div>

      <main>

      <div class="flex w-full px-4 py-4 overflow-x-auto border-b lg:px-8 border-white/10">
        <form class="flex flex-1" action="#" method="GET">
            <div class="flex items-center gap-x-4">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAYCAYAAAAPtVbGAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAP5SURBVEhLnVVfTNtVFL4wnUxl6jIcSldg/Nlw+m7c24y+GBP1ycQn45K97EFNfNIX58OMEjMT48OGmWYaZXEaF4SNf0vADKh1A7e1YaVaKIyuUCgd9O+v/TzfpbfeIRP0Nl/O+d17zvedc3v6q3KcPFAgHCCfE9dBLpdDVpB3HDhF5PP5Tfu0BopLPCCXR0TE4iLGj94TmGSbYDM+rcEdIlXXUlC/JVE+mkKLPwlfIqs7ZEeGZC3Z3XwjQGiRjJBI2eicXYHqnkH5xQhUzyyUWF88ra8xk10V4jUSG/m0BlrEobpA2PDiL2Godh+2/TgOdcaPhzqDSOUzUoMkW4nrVW/7pgtiVUQ2ScBuYqlllH3hQfmJEVSIVZ8P4ekOn5ytxvxb9bZPa1ASIXglXB8OBqCO/oxtrT2CXqgPOvFmN4WgYzShxK8ltn3DSWgR0xY3OL5cTa1dUO+048H3fsD9756FOtKOtuEJfZYVIRNPrOcbTkKLmAAik5WJkjU4IV/+K8dR/sYJVBxuwz2HTkK9+hmGgtP6nB1lJZZg3oad2BsM4Mhyner7HerlVqjnjkK9cAzq4PtQL32M6OKyPpdpKVW+oYjdGjdpGViQ38hKMo2bc3GEZmOYCEfxqy+EsfEQJoMhBAJ/YH5xSevZucYaaBGjSNjV8OoKhQKWV5KIRGOYiczjRnASw+FbOD8dw+kBD1q//A7fnu9HOpMp5a3bib1hixB5GYTZuUVMzkQ1glL1sHTU9/ZbuN52Egl5jkTnkEyl78izObWI3Ro3jSV4ZcsrKUyJwIIQXuq4gLN1NRh4tBLe7VuQGBvlbcEpDoDNYaBFDCGxthP9LIgJ0djULXxVvQNXGqrhf7Iel+uq4G2sQTIe5ysVOWvSbM7NiUgyV/+xj+B/fDumnqqDb68Loy21uPTwfbh88Bkwgq+mUo7FqUXs1rhpbMkXEVa6cPoUpnfei4n9tfDvE5FmFzz76nCxQuHq4dflzSdCRQGbU4sYQsJUYVekfZkyvgtuPn8Agfoq+FrcuCIiI00uDO51o6tMYfz4JxIhb4TipBlsXkQS2c3toQEEdm6F74nav0UaXehtcOHcFoXwhS4txHjNKblaxG6NB8au9ZlAoZlDr+H6Y5UY3V8PT/NuDIpQX9NudLh34adHHsB8kIO+enXM1yIlEsFdOyE4PZKcTtzGeGM1vJVlpU569tSgs9GN73ftwLnmBuTS8mcni3laxHRhqrar/4cvSewmGZ7EjWcPwLNVoVv+wTsEZwTfCD4VfL3Hra+Mw/DfRIrWXAOfk6E/kfAOI+4dwaJnBAuC2LWriPT3Ir209D9ELJ9CRqwgoNW+TKGxBGOVUuovm+Ybihgo5ckAAAAASUVORK5CYII=" alt="" class="w-8 h-8 bg-gray-800 rounded-full">
              <div class="pr-8 text-sm font-medium leading-6 text-white truncate tflex">American Airlines</div>
            </div>
            <label for="search-field" class="sr-only">Search</label>
            <div class="relative">
              <svg class="absolute inset-y-0 left-0 w-5 h-full text-gray-500 pointer-events-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
              </svg>
              <input value="" id="search-field" class="block w-full h-full py-0 pl-8 pr-0 text-white bg-transparent border-0 focus:ring-0 sm:text-sm" placeholder="Search..." type="search" name="search">



            </div>
          </form>
      </div>
  


        <template x-if="menu === 'monitor'">
          <div>
            <x-monitor_dash />
          </div>
        </template>

        <template x-if="menu === 'onboard'">
          <div>
            <x-onboard_dash />
          </div>
        </template>


        <template x-if="menu === 'visual'">
          <div>
            <x-visual_dash />
          </div>
        </template>
        

        <template x-if="menu === 'scheduler'">
          <div>
            <x-scheduler_dash />
          </div>
        </template>
      
        


      </main>
    </div>
  </div>