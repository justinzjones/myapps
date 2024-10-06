<main>

  <!-- Hero section -->
  <div class="relative isolate pt-14">
    {{-- <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
      <defs>
        <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
          <path d="M100 200V.5M.5 .5H200" fill="none" />
        </pattern>
      </defs>
    <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
        <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
    </svg> --}}
    <div class="absolute inset-0 w-full h-full bg-center bg-cover -z-10 stroke-gray-200" style="background-image: url(http://localhost:8055/assets/{{ $place->data->hero }})"></div>
    <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
      <defs>
        <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
          <path d="M100 200V.5M.5 .5H200" fill="none" />
        </pattern>
      </defs>
      {{-- <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" /> --}}
    </svg>
    <div class="px-6 py-24 mx-auto max-w-7xl sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40">
      <div class="max-w-2xl mx-auto lg:mx-0 lg:flex-auto">
        <div class="flex">

          <nav class="flex" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-4">
              <li>
                <div>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <svg class="flex-shrink-0 w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Home</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-100" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                  </svg>
                  <a href="/region/{!! $place->data->fk_country->fk_region->id !!}" class="ml-4 text-sm font-medium text-gray-200 hover:text-gray-400">{!! $place->data->fk_country->fk_region->name !!}</a>
                </div>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-100" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                  </svg>
                  <a href="/country/{!! $place->data->fk_country->ISO_31661_alpha2 !!}" class="ml-4 text-sm font-medium text-gray-200 hover:text-gray-400" aria-current="page">{!! $place->data->fk_country->name !!}</a>
                </div>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-100" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                  </svg>
                  <a href="" class="ml-4 text-sm font-medium text-gray-200 hover:text-gray-400" aria-current="page">{!! $place->data->name !!}</a>
                </div>
              </li>
            </ol>
          </nav>

          


{{-- 
          <div class="relative flex items-center px-4 py-1 text-sm leading-6 text-gray-600 rounded-full gap-x-4 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
            <span class="font-semibold text-indigo-600">We’re hiring</span>
            <span class="w-px h-4 bg-gray-900/10" aria-hidden="true"></span>
            <a href="#" class="flex items-center gap-x-1">
              <span class="absolute inset-0" aria-hidden="true"></span>
              See open positions
              <svg class="w-5 h-5 -mr-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
              </svg>
            </a>
          </div> --}}
        </div>
        <h1 class="max-w-lg mt-10 text-4xl font-bold tracking-tight text-white sm:text-7xl">{!! $place->data->name !!}</h1>
        <p class="mt-6 text-lg leading-8 text-white">{!! $place->data->intro !!}</p>
        <div class="flex items-center mt-10 gap-x-6">
          <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
      {{-- <div class="mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
        <svg viewBox="0 0 366 729" role="img" class="mx-auto w-[22.875rem] max-w-full drop-shadow-xl">
          <title>App screenshot</title>
          <defs>
            <clipPath id="2ade4387-9c63-4fc4-b754-10e687a0d332">
              <rect width="316" height="684" rx="36" />
            </clipPath>
          </defs>
          <path fill="#4B5563" d="M363.315 64.213C363.315 22.99 341.312 1 300.092 1H66.751C25.53 1 3.528 22.99 3.528 64.213v44.68l-.857.143A2 2 0 0 0 1 111.009v24.611a2 2 0 0 0 1.671 1.973l.95.158a2.26 2.26 0 0 1-.093.236v26.173c.212.1.398.296.541.643l-1.398.233A2 2 0 0 0 1 167.009v47.611a2 2 0 0 0 1.671 1.973l1.368.228c-.139.319-.314.533-.511.653v16.637c.221.104.414.313.56.689l-1.417.236A2 2 0 0 0 1 237.009v47.611a2 2 0 0 0 1.671 1.973l1.347.225c-.135.294-.302.493-.49.607v377.681c0 41.213 22 63.208 63.223 63.208h95.074c.947-.504 2.717-.843 4.745-.843l.141.001h.194l.086-.001 33.704.005c1.849.043 3.442.37 4.323.838h95.074c41.222 0 63.223-21.999 63.223-63.212v-394.63c-.259-.275-.48-.796-.63-1.47l-.011-.133 1.655-.276A2 2 0 0 0 366 266.62v-77.611a2 2 0 0 0-1.671-1.973l-1.712-.285c.148-.839.396-1.491.698-1.811V64.213Z" />
          <path fill="#343E4E" d="M16 59c0-23.748 19.252-43 43-43h246c23.748 0 43 19.252 43 43v615c0 23.196-18.804 42-42 42H58c-23.196 0-42-18.804-42-42V59Z" />
          <foreignObject width="316" height="684" transform="translate(24 24)" clip-path="url(#2ade4387-9c63-4fc4-b754-10e687a0d332)">
            <img src="https://tailwindui.com/img/component-images/mobile-app-screenshot.png" alt="" />
          </foreignObject>
        </svg>
      </div> --}}
    </div>
  </div>


  <div class="px-4 py-2 bg-gray-900 sm:px-6 lg:px-8">
    <div class="px-0 mx-auto lg:px-6 max-w-7xl lg:flex lg:items-center lg:gap-x-10">
      <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select a tab</label>
        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
        <select id="tabs" name="tabs" class="block w-full py-2 pl-3 pr-10 text-base text-white border-none rounded-md shadow-sm bg-white/5 ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm">
          <option selected>Overview</option>
          <option>Activity</option>
          <option>Settings</option>
          <option>Collaborators</option>
          <option>Notifications</option>
        </select>
      </div>
      <div class="hidden mx-auto max-w-none sm:block lg:mx-0 lg:flex-auto">
        <nav class="flex py-4 border-white/10">
          <ul role="list" class="flex justify-center flex-none min-w-full px-2 text-sm font-semibold leading-6 text-gray-400 gap-x-6">
            <li>
              <a href="#" class="text-indigo-400">Overview</a>
            </li>
            <li>
              <a href="#" class="">Experiences</a>
            </li>
            <li>
              <a href="#" class="">Holiday ideas</a>
            </li>
            <li>
              <a href="#" class="">Where to stay</a>
            </li>
            <li>
              <a href="#" class="">Map</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <!-- Overview section -->
  <div class="relative isolate ">
    <svg class="absolute inset-0 -z-10 hidden h-full w-full stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)] sm:block" aria-hidden="true">
      <defs>
        <pattern id="55d3d46d-692e-45f2-becd-d8bdc9344f45" width="200" height="200" x="50%" y="0" patternUnits="userSpaceOnUse">
          <path d="M.5 200V.5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="0" class="overflow-visible fill-gray-50">
        <path d="M-200.5 0h201v201h-201Z M599.5 0h201v201h-201Z M399.5 400h201v201h-201Z M-400.5 600h201v201h-201Z" stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#55d3d46d-692e-45f2-becd-d8bdc9344f45)" />
    </svg>
    <div class="relative">
      <div class="absolute inset-x-0 overflow-hidden -translate-y-1/2 top-1/2 -z-10 transform-gpu opacity-30 blur-3xl" aria-hidden="true">
        <div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="absolute inset-x-0 top-0 flex overflow-hidden opacity-25 -z-10 transform-gpu blur-3xl xl:justify-end" aria-hidden="true">
        <div class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] xl:ml-0 xl:mr-[calc(50%-12rem)]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="px-6 mx-auto max-w-7xl lg:px-8">
        <div class="max-w-2xl mx-auto lg:mx-0 lg:max-w-none">
          <h2 class="pt-20 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Overview</h2>
          <p class="mt-2 text-lg leading-8 text-gray-600">Vel dolorem qui facilis soluta sint aspernatur totam cumque.</p>
        </div>
        <div class="grid max-w-2xl grid-cols-1 gap-8 mx-auto mt-6 auto-rows-fr sm:mt-6 lg:mx-0 lg:max-w-none lg:grid-cols-3">
          <article class="relative flex flex-col justify-end px-8 pb-8 overflow-hidden bg-gray-900 isolate rounded-2xl pt-80 sm:pt-48 lg:pt-80">
            <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" alt="" class="absolute inset-0 object-cover w-full h-full -z-10">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
    
            <div class="flex flex-wrap items-center overflow-hidden text-sm leading-6 text-gray-300 gap-y-1">
              <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
              <div class="flex items-center -ml-4 gap-x-4">
                <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                  <circle cx="1" cy="1" r="1" />
                </svg>
                <div class="flex gap-x-2.5">
                  <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="flex-none w-6 h-6 rounded-full bg-white/10">
                  Michael Foster
                </div>
              </div>
            </div>
            <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
              <a href="#">
                <span class="absolute inset-0"></span>
                Vel expedita assumenda placeat aut nisi optio voluptates quas
              </a>
            </h3>
          </article>
          <article class="relative flex flex-col justify-end px-8 pb-8 overflow-hidden bg-gray-900 isolate rounded-2xl pt-80 sm:pt-48 lg:pt-80">
            <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" alt="" class="absolute inset-0 object-cover w-full h-full -z-10">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
    
            <div class="flex flex-wrap items-center overflow-hidden text-sm leading-6 text-gray-300 gap-y-1">
              <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
              <div class="flex items-center -ml-4 gap-x-4">
                <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                  <circle cx="1" cy="1" r="1" />
                </svg>
                <div class="flex gap-x-2.5">
                  <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="flex-none w-6 h-6 rounded-full bg-white/10">
                  Michael Foster
                </div>
              </div>
            </div>
            <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
              <a href="#">
                <span class="absolute inset-0"></span>
                Vel expedita assumenda placeat aut nisi optio voluptates quas
              </a>
            </h3>
          </article>
          <article class="relative flex flex-col justify-end px-8 pb-8 overflow-hidden bg-gray-900 isolate rounded-2xl pt-80 sm:pt-48 lg:pt-80">
            <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" alt="" class="absolute inset-0 object-cover w-full h-full -z-10">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
    
            <div class="flex flex-wrap items-center overflow-hidden text-sm leading-6 text-gray-300 gap-y-1">
              <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
              <div class="flex items-center -ml-4 gap-x-4">
                <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                  <circle cx="1" cy="1" r="1" />
                </svg>
                <div class="flex gap-x-2.5">
                  <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="flex-none w-6 h-6 rounded-full bg-white/10">
                  Michael Foster
                </div>
              </div>
            </div>
            <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
              <a href="#">
                <span class="absolute inset-0"></span>
                Vel expedita assumenda placeat aut nisi optio voluptates quas
              </a>
            </h3>
          </article>
    
    
          <!-- More posts... -->
        </div>
      </div>
    </div>
  </div>

  <!-- Experiences section -->
  <div class="px-6 mt-20 overflow-hidden bg-white lg:px-8">
    <div class="mx-auto max-w-7xl md:px-6 lg:px-8">
      <div class="max-w-2xl mx-auto lg:mx-0 lg:max-w-none">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Experiences</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">Vel dolorem qui facilis soluta sint aspernatur totam cumque.</p>
      </div>


      <div class="py-24 overflow-hidden bg-white sm:py-32">
        <div class="mx-auto max-w-7xl">
          <div class="grid max-w-2xl grid-cols-1 mx-auto gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
            <div class="lg:pr-4 lg:pt-4">
              <div class="lg:max-w-lg">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">A better workflow</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</p>
                <div class="mt-8">
                  <a href="#" class="inline-flex rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                </div>
                <figure class="pl-8 mt-16 text-gray-600 border-l border-gray-200">
                  <blockquote class="text-base leading-7">
                    <p>“Vel ultricies morbi odio facilisi ultrices accumsan donec lacus purus. Lectus nibh ullamcorper ac dictum justo in euismod. Risus aenean ut elit massa. In amet aliquet eget cras. Sem volutpat enim tristique.”</p>
                  </blockquote>
                  <figcaption class="flex mt-6 text-sm leading-6 gap-x-4">
                    <img src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="" class="flex-none w-6 h-6 rounded-full">
                    <div><span class="font-semibold text-gray-900">Maria Hill</span> – Marketing Manager</div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:ml-0" width="2432" height="1442">
          </div>
        </div>
      </div>
      



      <div class="py-24 overflow-hidden bg-white sm:py-32">
        <div class="mx-auto  max-w-7xl">
          <div class="grid max-w-2xl grid-cols-1 mx-auto gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:ml-auto lg:pl-4 lg:pt-4">
              <div class="lg:max-w-lg">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">A better workflow</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</p>
                <dl class="max-w-xl mt-10 space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                      <svg class="absolute w-5 h-5 text-indigo-600 left-1 top-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                      </svg>
                      Push to deploy.
                    </dt>
                    <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                  </div>
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                      <svg class="absolute w-5 h-5 text-indigo-600 left-1 top-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                      </svg>
                      SSL certificates.
                    </dt>
                    <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</dd>
                  </div>
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                      <svg class="absolute w-5 h-5 text-indigo-600 left-1 top-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                        <path fill-rule="evenodd" d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
                      </svg>
                      Database backups.
                    </dt>
                    <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</dd>
                  </div>
                </dl>
              </div>
            </div>
            <div class="flex items-start justify-end lg:order-first">
              <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" width="2432" height="1442">
            </div>
          </div>
        </div>
      </div>
      

      <div class="grid max-w-2xl grid-cols-1 mx-auto mt-16 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <article class="flex flex-col items-start justify-between">
          <div class="relative w-full">
            <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
          </div>
          <div class="max-w-xl">
            {{-- <div class="flex items-center mt-8 text-xs gap-x-4">
              <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
            </div> --}}
            <div class="relative group">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Boost your conversion rate
                </a>
              </h3>
              <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
            </div>
            <div class="relative flex items-center mt-8 gap-x-4">
              <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="w-10 h-10 bg-gray-100 rounded-full">
              <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Michael Foster
                  </a>
                </p>
                <p class="text-gray-600">Co-Founder / CTO</p>
              </div>
            </div>
          </div>
        </article>
        
        <article class="flex flex-col items-start justify-between">
          <div class="relative w-full">
            <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
          </div>
          <div class="max-w-xl">
            {{-- <div class="flex items-center mt-8 text-xs gap-x-4">
              <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
            </div> --}}
            <div class="relative group">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Boost your conversion rate
                </a>
              </h3>
              <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
            </div>
            <div class="relative flex items-center mt-8 gap-x-4">
              <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="w-10 h-10 bg-gray-100 rounded-full">
              <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Michael Foster
                  </a>
                </p>
                <p class="text-gray-600">Co-Founder / CTO</p>
              </div>
            </div>
          </div>
        </article>

        <article class="flex flex-col items-start justify-between">
          <div class="relative w-full">
            <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
          </div>
          <div class="max-w-xl">
            {{-- <div class="flex items-center mt-8 text-xs gap-x-4">
              <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
            </div> --}}
            <div class="relative group">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Boost your conversion rate
                </a>
              </h3>
              <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
            </div>
            <div class="relative flex items-center mt-8 gap-x-4">
              <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="w-10 h-10 bg-gray-100 rounded-full">
              <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Michael Foster
                  </a>
                </p>
                <p class="text-gray-600">Co-Founder / CTO</p>
              </div>
            </div>
          </div>
        </article>
        <!-- More posts... -->
      </div>
      <div class="flex mt-12" border-gray-100">
        <a href="#" class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500">View all experiences <span aria-hidden="true">&rarr;</span></a>
      </div>
    </div>
  </div>

  
  <!-- Where to stay section -->
  <div class="relative isolate ">
    <svg class="absolute inset-0 -z-10 hidden h-full w-full stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)] sm:block" aria-hidden="true">
      <defs>
        <pattern id="55d3d46d-692e-45f2-becd-d8bdc9344f45" width="200" height="200" x="50%" y="0" patternUnits="userSpaceOnUse">
          <path d="M.5 200V.5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="0" class="overflow-visible fill-gray-50">
        <path d="M-200.5 0h201v201h-201Z M599.5 0h201v201h-201Z M399.5 400h201v201h-201Z M-400.5 600h201v201h-201Z" stroke-width="0" />
      </svg>
      {{-- <rect width="100%" height="100%" stroke-width="0" fill="url(#55d3d46d-692e-45f2-becd-d8bdc9344f45)" /> --}}
    </svg>
    <div class="relative">
      <div class="absolute inset-x-0 overflow-hidden -translate-y-1/2 top-1/2 -z-10 transform-gpu opacity-30 blur-3xl" aria-hidden="true">
        <div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="absolute inset-x-0 top-0 flex overflow-hidden opacity-25 -z-10 transform-gpu blur-3xl xl:justify-end" aria-hidden="true">
        <div class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] xl:ml-0 xl:mr-[calc(50%-12rem)]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="px-6 mt-20 lg:mx-auto lg:max-w-7xl lg:px-8">
        <div class="max-w-2xl mx-auto lg:mx-0 lg:max-w-none">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Where to stay</h2>
          <p class="mt-2 text-lg leading-8 text-gray-600">Vel dolorem qui facilis soluta sint aspernatur totam cumque.</p>
        </div>
    
        <div class="relative mt-8">
          <div class="relative w-full pb-6 -mb-6 overflow-x-auto">
            <ul role="list" class="inline-flex mx-4 space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
              <li class="inline-flex flex-col w-64 text-center lg:w-auto">
                <div class="relative group">
                  <div class="w-full overflow-hidden bg-gray-200 rounded-md aspect-h-1 aspect-w-1">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="object-cover object-center w-full h-full group-hover:opacity-75">
                  </div>
                  <div class="mt-6">
                    <p class="text-sm text-gray-500">Black</p>
                    <h3 class="mt-1 font-semibold text-gray-900">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        Machined Pen
                      </a>
                    </h3>
                    <p class="mt-1 text-gray-900">$35</p>
                  </div>
                </div>
    
                <h4 class="sr-only">Available colors</h4>
                <ul role="list" class="flex items-center justify-center pt-6 mt-auto space-x-3">
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #111827">
                    <span class="sr-only">Black</span>
                  </li>
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #fde68a">
                    <span class="sr-only">Brass</span>
                  </li>
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #e5e7eb">
                    <span class="sr-only">Chrome</span>
                  </li>
                </ul>
              </li>
    
              <li class="inline-flex flex-col w-64 text-center lg:w-auto">
                <div class="relative group">
                  <div class="w-full overflow-hidden bg-gray-200 rounded-md aspect-h-1 aspect-w-1">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="object-cover object-center w-full h-full group-hover:opacity-75">
                  </div>
                  <div class="mt-6">
                    <p class="text-sm text-gray-500">Black</p>
                    <h3 class="mt-1 font-semibold text-gray-900">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        Machined Pen
                      </a>
                    </h3>
                    <p class="mt-1 text-gray-900">$35</p>
                  </div>
                </div>
    
                <h4 class="sr-only">Available colors</h4>
                <ul role="list" class="flex items-center justify-center pt-6 mt-auto space-x-3">
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #111827">
                    <span class="sr-only">Black</span>
                  </li>
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #fde68a">
                    <span class="sr-only">Brass</span>
                  </li>
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #e5e7eb">
                    <span class="sr-only">Chrome</span>
                  </li>
                </ul>
              </li>
    
              <li class="inline-flex flex-col w-64 text-center lg:w-auto">
                <div class="relative group">
                  <div class="w-full overflow-hidden bg-gray-200 rounded-md aspect-h-1 aspect-w-1">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="object-cover object-center w-full h-full group-hover:opacity-75">
                  </div>
                  <div class="mt-6">
                    <p class="text-sm text-gray-500">Black</p>
                    <h3 class="mt-1 font-semibold text-gray-900">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        Machined Pen
                      </a>
                    </h3>
                    <p class="mt-1 text-gray-900">$35</p>
                  </div>
                </div>
    
                <h4 class="sr-only">Available colors</h4>
                <ul role="list" class="flex items-center justify-center pt-6 mt-auto space-x-3">
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #111827">
                    <span class="sr-only">Black</span>
                  </li>
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #fde68a">
                    <span class="sr-only">Brass</span>
                  </li>
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #e5e7eb">
                    <span class="sr-only">Chrome</span>
                  </li>
                </ul>
              </li>
    
              <li class="inline-flex flex-col w-64 text-center lg:w-auto">
                <div class="relative group">
                  <div class="w-full overflow-hidden bg-gray-200 rounded-md aspect-h-1 aspect-w-1">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="object-cover object-center w-full h-full group-hover:opacity-75">
                  </div>
                  <div class="mt-6">
                    <p class="text-sm text-gray-500">Black</p>
                    <h3 class="mt-1 font-semibold text-gray-900">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        Machined Pen
                      </a>
                    </h3>
                    <p class="mt-1 text-gray-900">$35</p>
                  </div>
                </div>
    
                <h4 class="sr-only">Available colors</h4>
                <ul role="list" class="flex items-center justify-center pt-6 mt-auto space-x-3">
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #111827">
                    <span class="sr-only">Black</span>
                  </li>
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #fde68a">
                    <span class="sr-only">Brass</span>
                  </li>
                  <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #e5e7eb">
                    <span class="sr-only">Chrome</span>
                  </li>
                </ul>
              </li>
    
              <!-- More products... -->
            </ul>
          </div>
        </div>
    
        <div class="flex px-4 mt-12">
          <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
            view all places to stay
            <span aria-hidden="true"> &rarr;</span>
          </a>
        </div>

      </div>

    </div>

  </div>
  
<!---- -------------------------------------- -->


  <!-- Feature section -->
  {{-- <div class="px-6 mt-20 bg-white lg:mx-auto lg:max-w-7xl lg:px-8">
    <div class="max-w-2xl mx-auto lg:mx-0 lg:max-w-none">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Where to stay</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">Vel dolorem qui facilis soluta sint aspernatur totam cumque.</p>
    </div>

    <div class="relative mt-8">
      <div class="relative w-full pb-6 -mb-6 overflow-x-auto">
        <ul role="list" class="inline-flex mx-4 space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
          <li class="inline-flex flex-col w-64 text-center lg:w-auto">
            <div class="relative group">
              <div class="w-full overflow-hidden bg-gray-200 rounded-md aspect-h-1 aspect-w-1">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="object-cover object-center w-full h-full group-hover:opacity-75">
              </div>
              <div class="mt-6">
                <p class="text-sm text-gray-500">Black</p>
                <h3 class="mt-1 font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Machined Pen
                  </a>
                </h3>
                <p class="mt-1 text-gray-900">$35</p>
              </div>
            </div>

            <h4 class="sr-only">Available colors</h4>
            <ul role="list" class="flex items-center justify-center pt-6 mt-auto space-x-3">
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #111827">
                <span class="sr-only">Black</span>
              </li>
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #fde68a">
                <span class="sr-only">Brass</span>
              </li>
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #e5e7eb">
                <span class="sr-only">Chrome</span>
              </li>
            </ul>
          </li>

          <li class="inline-flex flex-col w-64 text-center lg:w-auto">
            <div class="relative group">
              <div class="w-full overflow-hidden bg-gray-200 rounded-md aspect-h-1 aspect-w-1">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="object-cover object-center w-full h-full group-hover:opacity-75">
              </div>
              <div class="mt-6">
                <p class="text-sm text-gray-500">Black</p>
                <h3 class="mt-1 font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Machined Pen
                  </a>
                </h3>
                <p class="mt-1 text-gray-900">$35</p>
              </div>
            </div>

            <h4 class="sr-only">Available colors</h4>
            <ul role="list" class="flex items-center justify-center pt-6 mt-auto space-x-3">
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #111827">
                <span class="sr-only">Black</span>
              </li>
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #fde68a">
                <span class="sr-only">Brass</span>
              </li>
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #e5e7eb">
                <span class="sr-only">Chrome</span>
              </li>
            </ul>
          </li>

          <li class="inline-flex flex-col w-64 text-center lg:w-auto">
            <div class="relative group">
              <div class="w-full overflow-hidden bg-gray-200 rounded-md aspect-h-1 aspect-w-1">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="object-cover object-center w-full h-full group-hover:opacity-75">
              </div>
              <div class="mt-6">
                <p class="text-sm text-gray-500">Black</p>
                <h3 class="mt-1 font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Machined Pen
                  </a>
                </h3>
                <p class="mt-1 text-gray-900">$35</p>
              </div>
            </div>

            <h4 class="sr-only">Available colors</h4>
            <ul role="list" class="flex items-center justify-center pt-6 mt-auto space-x-3">
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #111827">
                <span class="sr-only">Black</span>
              </li>
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #fde68a">
                <span class="sr-only">Brass</span>
              </li>
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #e5e7eb">
                <span class="sr-only">Chrome</span>
              </li>
            </ul>
          </li>

          <li class="inline-flex flex-col w-64 text-center lg:w-auto">
            <div class="relative group">
              <div class="w-full overflow-hidden bg-gray-200 rounded-md aspect-h-1 aspect-w-1">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="object-cover object-center w-full h-full group-hover:opacity-75">
              </div>
              <div class="mt-6">
                <p class="text-sm text-gray-500">Black</p>
                <h3 class="mt-1 font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Machined Pen
                  </a>
                </h3>
                <p class="mt-1 text-gray-900">$35</p>
              </div>
            </div>

            <h4 class="sr-only">Available colors</h4>
            <ul role="list" class="flex items-center justify-center pt-6 mt-auto space-x-3">
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #111827">
                <span class="sr-only">Black</span>
              </li>
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #fde68a">
                <span class="sr-only">Brass</span>
              </li>
              <li class="w-4 h-4 border border-black rounded-full border-opacity-10" style="background-color: #e5e7eb">
                <span class="sr-only">Chrome</span>
              </li>
            </ul>
          </li>

          <!-- More products... -->
        </ul>
      </div>
    </div>

    <div class="flex px-4 mt-12 sm:hidden">
      <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
        See everything
        <span aria-hidden="true"> &rarr;</span>
      </a>
    </div>
  </div> --}}

  <!-- Feature section -->
  {{-- <div class="px-6 mx-auto mt-20 max-w-7xl lg:px-8">
    <div class="max-w-2xl mx-auto lg:text-center">
      <h2 class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</h2>
      <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Everything you need to deploy your app</p>
      <p class="mt-6 text-lg leading-8 text-gray-600">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
    </div>
    <div class="max-w-2xl mx-auto mt-16 sm:mt-20 lg:mt-24 lg:max-w-none">
      <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
        <div class="flex flex-col">
          <dt class="flex items-center text-base font-semibold leading-7 text-gray-900 gap-x-3">
            <svg class="flex-none w-5 h-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
            </svg>
            Push to deploy
          </dt>
          <dd class="flex flex-col flex-auto mt-4 text-base leading-7 text-gray-600">
            <p class="flex-auto">Commodo nec sagittis tortor mauris sed. Turpis tortor quis scelerisque diam id accumsan nullam tempus. Pulvinar etiam lacus volutpat eu. Phasellus praesent ligula sit faucibus.</p>
            <p class="mt-6">
              <a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Learn more <span aria-hidden="true">→</span></a>
            </p>
          </dd>
        </div>
        <div class="flex flex-col">
          <dt class="flex items-center text-base font-semibold leading-7 text-gray-900 gap-x-3">
            <svg class="flex-none w-5 h-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
            </svg>
            SSL certificates
          </dt>
          <dd class="flex flex-col flex-auto mt-4 text-base leading-7 text-gray-600">
            <p class="flex-auto">Pellentesque enim a commodo malesuada turpis eleifend risus. Facilisis donec placerat sapien consequat tempor fermentum nibh.</p>
            <p class="mt-6">
              <a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Learn more <span aria-hidden="true">→</span></a>
            </p>
          </dd>
        </div>
        <div class="flex flex-col">
          <dt class="flex items-center text-base font-semibold leading-7 text-gray-900 gap-x-3">
            <svg class="flex-none w-5 h-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 01-9.201 2.466l-.312-.311h2.433a.75.75 0 000-1.5H3.989a.75.75 0 00-.75.75v4.242a.75.75 0 001.5 0v-2.43l.31.31a7 7 0 0011.712-3.138.75.75 0 00-1.449-.39zm1.23-3.723a.75.75 0 00.219-.53V2.929a.75.75 0 00-1.5 0V5.36l-.31-.31A7 7 0 003.239 8.188a.75.75 0 101.448.389A5.5 5.5 0 0113.89 6.11l.311.31h-2.432a.75.75 0 000 1.5h4.243a.75.75 0 00.53-.219z" clip-rule="evenodd" />
            </svg>
            Simple queues
          </dt>
          <dd class="flex flex-col flex-auto mt-4 text-base leading-7 text-gray-600">
            <p class="flex-auto">Pellentesque sit elit congue ante nec amet. Dolor aenean curabitur viverra suspendisse iaculis eget. Nec mollis placerat ultricies euismod ut condimentum.</p>
            <p class="mt-6">
              <a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Learn more <span aria-hidden="true">→</span></a>
            </p>
          </dd>
        </div>
      </dl>
    </div>
  </div> --}}

  <!-- Testimonials section -->
  {{-- <div class="relative mt-20 isolate sm:mt-26 sm:pt-32">
    <svg class="absolute inset-0 -z-10 hidden h-full w-full stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)] sm:block" aria-hidden="true">
      <defs>
        <pattern id="55d3d46d-692e-45f2-becd-d8bdc9344f45" width="200" height="200" x="50%" y="0" patternUnits="userSpaceOnUse">
          <path d="M.5 200V.5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="0" class="overflow-visible fill-gray-50">
        <path d="M-200.5 0h201v201h-201Z M599.5 0h201v201h-201Z M399.5 400h201v201h-201Z M-400.5 600h201v201h-201Z" stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#55d3d46d-692e-45f2-becd-d8bdc9344f45)" />
    </svg>
    <div class="relative">
      <div class="absolute inset-x-0 overflow-hidden -translate-y-1/2 top-1/2 -z-10 transform-gpu opacity-30 blur-3xl" aria-hidden="true">
        <div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="absolute inset-x-0 top-0 flex pt-8 overflow-hidden opacity-25 -z-10 transform-gpu blur-3xl xl:justify-end" aria-hidden="true">
        <div class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] xl:ml-0 xl:mr-[calc(50%-12rem)]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="px-6 mx-auto max-w-7xl lg:px-8">
        <div class="max-w-xl mx-auto sm:text-center">
          <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Testimonials</h2>
          <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">We have worked with thousands of amazing people</p>
        </div>
        <div class="grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 mx-auto mt-16 text-sm leading-6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
          <figure class="hidden col-span-2 sm:block sm:rounded-2xl sm:bg-white sm:shadow-lg sm:ring-1 sm:ring-gray-900/5 xl:col-start-2 xl:row-end-1">
            <blockquote class="p-12 text-xl font-semibold leading-8 tracking-tight text-gray-900">
              <p>“Integer id nunc sit semper purus. Bibendum at lacus ut arcu blandit montes vitae auctor libero. Hac condimentum dignissim nibh vulputate ut nunc. Amet nibh orci mi venenatis blandit vel et proin. Non hendrerit in vel ac diam.”</p>
            </blockquote>
            <figcaption class="flex items-center px-6 py-4 border-t gap-x-4 border-gray-900/10">
              <img class="flex-none w-10 h-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=1024&h=1024&q=80" alt="">
              <div class="flex-auto">
                <div class="font-semibold">Brenna Goyette</div>
                <div class="text-gray-600">@brennagoyette</div>
              </div>
              <img class="flex-none w-auto h-10" src="https://tailwindui.com/img/logos/savvycal-logo-gray-900.svg" alt="">
            </figcaption>
          </figure>
          <div class="space-y-8 xl:contents xl:space-y-0">
            <div class="space-y-8 xl:row-span-2">
              <figure class="p-6 bg-white shadow-lg rounded-2xl ring-1 ring-gray-900/5">
                <blockquote class="text-gray-900">
                  <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
                </blockquote>
                <figcaption class="flex items-center mt-6 gap-x-4">
                  <img class="w-10 h-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div>
                    <div class="font-semibold">Leslie Alexander</div>
                    <div class="text-gray-600">@lesliealexander</div>
                  </div>
                </figcaption>
              </figure>

              <!-- More testimonials... -->
            </div>
            <div class="space-y-8 xl:row-start-1">
              <figure class="p-6 bg-white shadow-lg rounded-2xl ring-1 ring-gray-900/5">
                <blockquote class="text-gray-900">
                  <p>“Aut reprehenderit voluptatem eum asperiores beatae id. Iure molestiae ipsam ut officia rem nulla blanditiis.”</p>
                </blockquote>
                <figcaption class="flex items-center mt-6 gap-x-4">
                  <img class="w-10 h-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div>
                    <div class="font-semibold">Lindsay Walton</div>
                    <div class="text-gray-600">@lindsaywalton</div>
                  </div>
                </figcaption>
              </figure>

              <!-- More testimonials... -->
            </div>
          </div>
          <div class="space-y-8 xl:contents xl:space-y-0">
            <div class="space-y-8 xl:row-start-1">
              <figure class="p-6 bg-white shadow-lg rounded-2xl ring-1 ring-gray-900/5">
                <blockquote class="text-gray-900">
                  <p>“Voluptas quos itaque ipsam in voluptatem est. Iste eos blanditiis repudiandae. Earum deserunt enim molestiae ipsum perferendis recusandae saepe corrupti.”</p>
                </blockquote>
                <figcaption class="flex items-center mt-6 gap-x-4">
                  <img class="w-10 h-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div>
                    <div class="font-semibold">Tom Cook</div>
                    <div class="text-gray-600">@tomcook</div>
                  </div>
                </figcaption>
              </figure>

              <!-- More testimonials... -->
            </div>
            <div class="space-y-8 xl:row-span-2">
              <figure class="p-6 bg-white shadow-lg rounded-2xl ring-1 ring-gray-900/5">
                <blockquote class="text-gray-900">
                  <p>“Molestias ea earum quos nostrum doloremque sed. Quaerat quasi aut velit incidunt excepturi rerum voluptatem minus harum.”</p>
                </blockquote>
                <figcaption class="flex items-center mt-6 gap-x-4">
                  <img class="w-10 h-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div>
                    <div class="font-semibold">Leonard Krasner</div>
                    <div class="text-gray-600">@leonardkrasner</div>
                  </div>
                </figcaption>
              </figure>

              <!-- More testimonials... -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

</main>