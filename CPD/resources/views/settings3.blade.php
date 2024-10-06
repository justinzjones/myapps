<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full" x-data="{ open: false }" @keydown.window.escape="open = false">

  <div class="min-h-full">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="lg:hidden fixed inset-0 z-40 flex" role="dialog" aria-modal="true">
      <!--
      Off-canvas menu overlay, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
      <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

      <!--
      Off-canvas menu, show/hide based on off-canvas menu state.

      Entering: "transition ease-in-out duration-300 transform"
        From: "-translate-x-full"
        To: "translate-x-0"
      Leaving: "transition ease-in-out duration-300 transform"
        From: "translate-x-0"
        To: "-translate-x-full"
    -->
      <div class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-gray-700">
        <!--
        Close button, show/hide based on off-canvas menu state.

        Entering: "ease-in-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
        <div class="absolute top-0 right-0 pt-2 -mr-12">
          <button type="button" class="focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white flex items-center justify-center w-10 h-10 ml-1 rounded-full">
            <span class="sr-only">Close sidebar</span>
            <!-- Heroicon name: outline/x -->
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="flex items-center flex-shrink-0 px-4">
          <img class="w-auto h-8" src="<svg data-name=" Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.28 77.28" data-v-971a32be="" data-v-932d164c="">
          <path d="M15.22 21.79c-2.09 2-3.89 3-6.86 3A8 8 0 0 1 0 17.17v-.7A8.15 8.15 0 0 1 8 8.2h.42a9.08 9.08 0 0 1 6.89 3.16l-2.11 2a6.43 6.43 0 0 0-4.84-2.24A5.35 5.35 0 0 0 3 16.38v.13a5.23 5.23 0 0 0 5 5.43h.44a6.31 6.31 0 0 0 4.72-2.28zM18 8.63h8.63v2.95H21v2.82h5.62v3H21v4.13h5.62v2.95H18zm11.87 0h3v12.94h4.33v2.86h-7.38zm10.12 0h3v12.94h4.38v2.86h-7.43zm-39.2 22h3.63c2 0 3.48.31 4.47 1.28a4.54 4.54 0 0 1 1.24 3.3 4.09 4.09 0 0 1-2 3.79 8 8 0 0 1-4.4.79v6.69h-3zm3 6.18h1.34c1.36 0 2-.52 2-1.6S6.39 33.58 5 33.58H3.76zm24.58 1.76a8.22 8.22 0 0 1-16.43.77v-.83A8.23 8.23 0 0 1 28.33 38c0 .19 0 .38-.01.57zm-13.4 0a5.19 5.19 0 1 0 10.34.86 2.64 2.64 0 0 0 0-.28V39a3.53 3.53 0 0 0 0-.46 5.28 5.28 0 0 0-5.15-5.4A5.19 5.19 0 0 0 15 38.33zm16-7.94h3v15.8h-3zm6.37 0h2.84L47 41V30.63h3v15.8h-2.95L40.3 36.07v10.36h-3zm14.72 0h8.74v3h-2.9v12.8h-3V33.58H52zm-51.18 22h3.89a12.8 12.8 0 0 1 4.91.73c2.84 1.14 4.53 3.87 4.53 7.35 0 4.51-2.72 7.72-7.81 7.72H.88zm3.91 14.26c3 0 5-.26 6.38-2a6.33 6.33 0 0 0 1.4-4.18 6.76 6.76 0 0 0-1.32-4.18c-1.5-2-3.74-2.38-7.17-2.38H2.46v12.74zM17 52.63h1.59v15.8H17zm21 8.21c0 5-3.21 8-7.94 8-5.48 0-8.91-3.91-8.91-8.27a8.31 8.31 0 0 1 8.31-8.3h.36a10 10 0 0 1 7.23 3l-1.21 1.15a8.69 8.69 0 0 0-6-2.66 6.91 6.91 0 0 0-7.06 6.71A7.06 7.06 0 0 0 30 67.33h.06a5.82 5.82 0 0 0 6.12-5h-5.05v-1.5zm2.33-8.21h1.59v15.8H40.3zm4.07 1.54v-1.54h8.67v1.54h-3.54v14.26h-1.59V54.17zm15.87-1.54l7.37 15.8h-1.72l-2.5-5.19H56.6l-2.47 5.19h-1.75l7.48-15.8zM60 56l-2.73 5.72h5.41zm9.6-3.37h1.58v14.26h6.07v1.54h-7.61z" fill="#fff" data-v-971a32be=""></path></svg>" alt="Easywire logo">
        </div>
        <nav class="flex-shrink-0 h-full mt-5 overflow-y-auto divide-y divide-gray-800" aria-label="Sidebar">
          <div class="px-2 space-y-1">
            <!-- Current: "bg-gray-800 text-white", Default: "text-gray-100 hover:text-white hover:bg-gray-600" -->
            <a href="{{ url('dashboard2') }} class=" group flex items-center px-2 py-2 text-base font-medium text-white bg-gray-800 rounded-md" aria-current="page">
              <!-- Heroicon name: outline/home -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Home
            </a>

            <a href="#" class="hover:text-white hover:bg-gray-600 group flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md">
              <!-- Heroicon name: outline/clock -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              History
            </a>

            <a href="#" class="hover:text-white hover:bg-gray-600 group flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md">
              <!-- Heroicon name: outline/scale -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
              </svg>
              Balances
            </a>

            <a href="#" class="hover:text-white hover:bg-gray-600 group flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md">
              <!-- Heroicon name: outline/credit-card -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
              Cards
            </a>

            <a href="#" class="hover:text-white hover:bg-gray-600 group flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md">
              <!-- Heroicon name: outline/user-group -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              Recipients
            </a>

            <a href="#" class="hover:text-white hover:bg-gray-600 group flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md">
              <!-- Heroicon name: outline/document-report -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              Reports
            </a>
          </div>
          <div class="pt-6 mt-6">
            <div class="px-2 space-y-1">
              <a href="{{ url('settings') }}" class="group hover:text-white hover:bg-gray-600 flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md">
                <!-- Heroicon name: outline/cog -->
                <svg class="w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Settings
              </a>

              <a href="#" class="group hover:text-white hover:bg-gray-600 flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md">
                <!-- Heroicon name: outline/question-mark-circle -->
                <svg class="w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Help
              </a>

              <a href="#" class="group hover:text-white hover:bg-gray-600 flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md">
                <!-- Heroicon name: outline/shield-check -->
                <svg class="w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                Privacy
              </a>
            </div>
          </div>
        </nav>
      </div>

      <div class="w-14 flex-shrink-0" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
      </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0 hidden">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto bg-gray-700">
        <div class="flex items-center flex-shrink-0 px-4">
          <img class="w-auto h-12" src="https://steel.taigatravel.net/images/cpdsvg.svg" alt="CPDlogo">
        </div>
        <nav class="flex flex-col flex-1 mt-5 overflow-y-auto divide-y divide-gray-800" aria-label="Sidebar">
          <div class="px-2 space-y-1">
            <!-- Current: "bg-gray-800 text-white", Default: "text-gray-100 hover:text-white hover:bg-gray-600" -->
            <a href="{{ url('dashboard2') }}" class="group flex items-center px-2 py-2 text-sm font-medium leading-6 text-white bg-gray-800 rounded-md" aria-current="page">
              <!-- Heroicon name: outline/home -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Home
            </a>

            <a href="#" class="hover:text-white hover:bg-gray-600 group flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md">
              <!-- Heroicon name: outline/clock -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              History
            </a>

            <a href="#" class="hover:text-white hover:bg-gray-600 group flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md">
              <!-- Heroicon name: outline/scale -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
              </svg>
              Balances
            </a>

            <a href="#" class="hover:text-white hover:bg-gray-600 group flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md">
              <!-- Heroicon name: outline/credit-card -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
              Cards
            </a>

            <a href="#" class="hover:text-white hover:bg-gray-600 group flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md">
              <!-- Heroicon name: outline/user-group -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              Recipients
            </a>

            <a href="#" class="hover:text-white hover:bg-gray-600 group flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md">
              <!-- Heroicon name: outline/document-report -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              Reports
            </a>
          </div>
          <div class="pt-6 mt-6">
            <div class="px-2 space-y-1">
              <a href="{{ url('settings') }}" class="group hover:text-white hover:bg-gray-600 flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md">
                <!-- Heroicon name: outline/cog -->
                <svg class="w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Settings
              </a>

              <a href="#" class="group hover:text-white hover:bg-gray-600 flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md">
                <!-- Heroicon name: outline/question-mark-circle -->
                <svg class="w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Help
              </a>

              <a href="#" class="group hover:text-white hover:bg-gray-600 flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md">
                <!-- Heroicon name: outline/shield-check -->
                <svg class="w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                Privacy
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="lg:pl-64 flex flex-col flex-1">
      <div class="lg:border-none relative z-10 flex flex-shrink-0 h-16 bg-white border-b border-gray-200">
        <button type="button" class="focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500 lg:hidden px-4 text-gray-400 border-r border-gray-200">
          <span class="sr-only">Open sidebar</span>
          <!-- Heroicon name: outline/menu-alt-1 -->
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </button>
        <!-- Search bar -->
        <div class="sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8 flex justify-between flex-1 px-4">
          <div class="flex flex-1">
            <form class="md:ml-0 flex w-full" action="#" method="GET">
              <label for="search-field" class="sr-only">Search</label>
              <div class="focus-within:text-gray-600 relative w-full text-gray-400">
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none" aria-hidden="true">
                  <!-- Heroicon name: solid/search -->
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                  </svg>
                </div>
                <input id="search-field" name="search-field" class="focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm block w-full h-full py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 border-transparent" placeholder="Search transactions" type="search">
              </div>
            </form>
          </div>
          <div class="md:ml-6 flex items-center ml-4">
            <button type="button" class="hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 p-1 text-gray-400 bg-white rounded-full">
              <span class="sr-only">View notifications</span>
              <!-- Heroicon name: outline/bell -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>

            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3" x-data="Components.menu({ open: false })">
              <div>
                <button type="button" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50 flex items-center max-w-xs text-sm bg-white rounded-full" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <img class="w-8 h-8 rounded-full" src="https://steel.taigatravel.net/images/KG_profile.png" alt="">
                  <span class="lg:block hidden ml-3 text-sm font-medium text-gray-700"><span class="sr-only">Open user menu for </span>Kristian Gjerding</span>
                  <!-- Heroicon name: solid/chevron-down -->
                  <svg class="lg:block flex-shrink-0 hidden w-5 h-5 ml-1 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>

              <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
              <div class="ring-1 ring-black ring-opacity-5 focus:outline-none absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <main class="flex-1 pb-8">
        <!-- Page header -->
        <div class="bg-white shadow">
          <div class="sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8 px-4">
            <div class="md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200 py-6">
              <div class="flex-1 min-w-0">
                <!-- Profile -->
                <div class="flex items-center">

                  <div>
                    <div class="flex items-center">

                      <h1 class="sm:leading-9 sm:truncate ml-3 text-2xl font-bold leading-7 text-gray-900">
                        Settings
                      </h1>
                    </div>
                    <dl class="sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap flex flex-col mt-6">


                    </dl>
                  </div>
                </div>
              </div>
              <div class="md:mt-0 md:ml-4 flex mt-6 space-x-3">
                <!-- <button type="button" class="hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm">
                  Add money
                </button> -->
                <button type="button" class="hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm">
                  Launch missile
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-8">





          <div class="sm:px-6 lg:px-8 max-w-6xl px-4 mx-auto">
            <!-- <h2 class="text-lg font-medium leading-6 text-gray-900">Overview</h2> -->

            <div class="sm:mt-0 mt-10">

            </div>

            <div class="sm:block hidden" aria-hidden="true">
              <div class="pt-0">
                <!-- <div class="border-t border-gray-200"></div> -->
              </div>
            </div>


            <div class="sm:px-6 lg:px-0 lg:col-span-9 space-y-6">

              <!-- Payment details -->
              <section aria-labelledby="payment-details-heading">
                <form action="#" method="POST">
                  <div class="sm:rounded-md sm:overflow-hidden shadow">
                    <div class="sm:p-6 px-4 py-6 bg-white">
                      <div>
                        <h2 id="payment-details-heading" class="text-lg font-medium leading-6 text-gray-900">Payment details</h2>
                        <p class="mt-1 text-sm text-gray-500">Update your billing information. Please note that updating your location could affect your tax rates.</p>
                      </div>

                      <div class="grid grid-cols-4 gap-6 mt-6">
                        <div class="sm:col-span-2 col-span-4">
                          <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                          <input type="text" name="first-name" id="first-name" autocomplete="cc-given-name" class="focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="sm:col-span-2 col-span-4">
                          <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="last-name" id="last-name" autocomplete="cc-family-name" class="focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="sm:col-span-2 col-span-4">
                          <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                          <input type="text" name="email-address" id="email-address" autocomplete="email" class="focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="sm:col-span-1 col-span-4">
                          <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expration date</label>
                          <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp" class="focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm" placeholder="MM / YY">
                        </div>

                        <div class="sm:col-span-1 col-span-4">
                          <label for="security-code" class="flex items-center text-sm font-medium text-gray-700">
                            <span>Security code</span>
                            <!-- Heroicon name: solid/question-mark-circle -->
                            <svg class="flex-shrink-0 w-5 h-5 ml-1 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                          </label>
                          <input type="text" name="security-code" id="security-code" autocomplete="cc-csc" class="focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="sm:col-span-2 col-span-4">
                          <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                          <select id="country" name="country" autocomplete="country-name" class="focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select>
                        </div>

                        <div class="sm:col-span-2 col-span-4">
                          <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                          <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>
                      </div>
                    </div>
                    <div class="bg-gray-50 sm:px-6 px-4 py-3 text-right">
                      <button type="submit" class="hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-gray-800 border border-transparent rounded-md shadow-sm">
                        Save
                      </button>
                    </div>
                  </div>
                </form>
              </section>
              <!-- Payment details end-->




              <!-- Payment details -->



              <form action="#" method="POST">
                <div class="sm:rounded-md sm:overflow-hidden shadow">
                  <div class="sm:p-6 px-4 py-6 space-y-6 bg-white">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                      <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-500">
                          Use a permanent address where you can receive mail.
                        </p>
                      </div>
                      <div class="md:mt-0 md:col-span-2 mt-5">
                        <form action="#" method="POST">
                          <div class="grid grid-cols-6 gap-6">
                            <div class="sm:col-span-3 col-span-6">
                              <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="sm:col-span-3 col-span-6">
                              <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                              <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="sm:col-span-4 col-span-6">
                              <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                              <input type="text" name="email-address" id="email-address" autocomplete="email" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="sm:col-span-3 col-span-6">
                              <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                              <select id="country" name="country" autocomplete="country-name" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                              </select>
                            </div>

                            <div class="col-span-6">
                              <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                              <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="sm:col-span-6 lg:col-span-2 col-span-6">
                              <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                              <input type="text" name="city" id="city" autocomplete="address-level2" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="sm:col-span-3 lg:col-span-2 col-span-6">
                              <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                              <input type="text" name="region" id="region" autocomplete="address-level1" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="sm:col-span-3 lg:col-span-2 col-span-6">
                              <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                              <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            </div>



                          </div>
                        </form>
                      </div>
                    </div>


                  </div>
                  <div class="bg-gray-50 sm:px-6 px-4 py-3 text-right">
                    <button type="submit" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                      Save
                    </button>
                  </div>
                </div>
              </form>


              <form class="space-y-6" action="#" method="POST">
                <div class="sm:rounded-md sm:overflow-hidden shadow">
                  <div class="sm:p-6 px-4 py-6 space-y-6 bg-white">

                    <div class="md:grid md:grid-cols-3 md:gap-6">
                      <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Profilez</h3>
                        <p class="mt-1 text-sm text-gray-500">
                          Decide which communications you'd like to receive and how.
                        </p>
                      </div>
                      <div class="md:mt-0 md:col-span-2 mt-5">
                        <form class="space-y-6" action="#" method="POST">
                         
                        <div class="pt-6 divide-y divide-gray-200">
              <div class="sm:px-6 px-4">
                <div>
                  <h2 class="text-lg font-medium leading-6 text-gray-900">Privacy</h2>
                  <p class="mt-1 text-sm text-gray-500">
                    Ornare eu a volutpat eget vulputate. Fringilla commodo amet.
                  </p>
                </div>
                <ul role="list" class="mt-2 divide-y divide-gray-200">
                  <li class="flex items-center justify-between py-4">
                    <div class="flex flex-col">
                      <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">
                        Available to hire
                      </p>
                      <p class="text-sm text-gray-500" id="privacy-option-1-description">
                        Nulla amet tempus sit accumsan. Aliquet turpis sed sit lacinia.
                      </p>
                    </div>
                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                    <button type="button" class="w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 relative inline-flex flex-shrink-0 h-6 ml-4 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer" role="switch" aria-checked="true" aria-labelledby="privacy-option-1-label" aria-describedby="privacy-option-1-description">
                      <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                      <span aria-hidden="true" class="ring-0 inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow"></span>
                    </button>
                  </li>
                  <li class="flex items-center justify-between py-4">
                    <div class="flex flex-col">
                      <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">
                        Make account private
                      </p>
                      <p class="text-sm text-gray-500" id="privacy-option-2-description">
                        Pharetra morbi dui mi mattis tellus sollicitudin cursus pharetra.
                      </p>
                    </div>
                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                    <button type="button" class="w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 relative inline-flex flex-shrink-0 h-6 ml-4 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer" role="switch" aria-checked="false" aria-labelledby="privacy-option-2-label" aria-describedby="privacy-option-2-description">
                      <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                      <span aria-hidden="true" class="ring-0 inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow"></span>
                    </button>
                  </li>
                  <li class="flex items-center justify-between py-4">
                    <div class="flex flex-col">
                      <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">
                        Allow commenting
                      </p>
                      <p class="text-sm text-gray-500" id="privacy-option-3-description">
                        Integer amet, nunc hendrerit adipiscing nam. Elementum ame
                      </p>
                    </div>
                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                    <button type="button" class="w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 relative inline-flex flex-shrink-0 h-6 ml-4 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer" role="switch" aria-checked="true" aria-labelledby="privacy-option-3-label" aria-describedby="privacy-option-3-description">
                      <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                      <span aria-hidden="true" class="ring-0 inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow"></span>
                    </button>
                  </li>
                  <li class="flex items-center justify-between py-4">
                    <div class="flex flex-col">
                      <p class="text-sm font-medium text-gray-900" id="privacy-option-4-label">
                        Allow mentions
                      </p>
                      <p class="text-sm text-gray-500" id="privacy-option-4-description">
                        Adipiscing est venenatis enim molestie commodo eu gravid
                      </p>
                    </div>
                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                    <button type="button" class="w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 relative inline-flex flex-shrink-0 h-6 ml-4 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer" role="switch" aria-checked="true" aria-labelledby="privacy-option-4-label" aria-describedby="privacy-option-4-description">
                      <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                      <span aria-hidden="true" class="ring-0 inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow"></span>
                    </button>
                  </li>
                </ul>
              </div>

            </div>

                        </form>
                      </div>
                    </div>


                  </div>

                  <div class="bg-gray-50 sm:px-6 px-4 py-3 text-right">
                    <button type="submit" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                      Save
                    </button>
                  </div>
                </div>
              </form>


              <form class="space-y-6" action="#" method="POST">
                <div class="sm:rounded-md sm:overflow-hidden shadow">
                  <div class="sm:p-6 px-4 py-6 space-y-6 bg-white">

                    <div class="md:grid md:grid-cols-3 md:gap-6">
                      <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Notificationz</h3>
                        <p class="mt-1 text-sm text-gray-500">
                          Decide which communications you'd like to receive and how.
                        </p>
                      </div>
                      <div class="md:mt-0 md:col-span-2 mt-5">
                        <form class="space-y-6" action="#" method="POST">
                          <fieldset>
                            <legend class="text-base font-medium text-gray-900">By Email</legend>
                            <div class="mt-4 space-y-4">
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="comments" class="font-medium text-gray-700">Comments</label>
                                  <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                                </div>
                              </div>
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="candidates" name="candidates" type="checkbox" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                                  <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                                </div>
                              </div>
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="offers" class="font-medium text-gray-700">Offers</label>
                                  <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <div>
                              <legend class="mt-6 text-base font-medium text-gray-900">Push Notifications</legend>
                              <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                            </div>
                            <div class="mt-4 space-y-4">
                              <div class="flex items-center">
                                <input id="push-everything" name="push-notifications" type="radio" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300">
                                <label for="push-everything" class="block ml-3 text-sm font-medium text-gray-700">
                                  Everything
                                </label>
                              </div>
                              <div class="flex items-center">
                                <input id="push-email" name="push-notifications" type="radio" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300">
                                <label for="push-email" class="block ml-3 text-sm font-medium text-gray-700">
                                  Same as email
                                </label>
                              </div>
                              <div class="flex items-center">
                                <input id="push-nothing" name="push-notifications" type="radio" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300">
                                <label for="push-nothing" class="block ml-3 text-sm font-medium text-gray-700">
                                  No push notifications
                                </label>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                    </div>


                  </div>

                  <div class="bg-gray-50 sm:px-6 px-4 py-3 text-right">
                    <button type="submit" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                      Save
                    </button>
                  </div>
                </div>
              </form>

              <form class="space-y-6" action="#" method="POST">
                <div class="sm:rounded-md sm:overflow-hidden shadow">
                  <div class="sm:p-6 px-4 py-6 space-y-6 bg-white">

                    <div class="md:grid md:grid-cols-3 md:gap-6">
                      <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Settingz</h3>
                        <p class="mt-1 text-sm text-gray-500">
                          Decide which communications you'd like to receive and how.
                        </p>
                      </div>
                      <div class="md:mt-0 md:col-span-2 mt-5">
                        <form class="space-y-6" action="#" method="POST">
                          <fieldset>
                            <legend class="text-base font-medium text-gray-900">By Email</legend>
                            <div class="mt-4 space-y-4">
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="comments" class="font-medium text-gray-700">Comments</label>
                                  <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                                </div>
                              </div>
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="candidates" name="candidates" type="checkbox" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                                  <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                                </div>
                              </div>
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="offers" class="font-medium text-gray-700">Offers</label>
                                  <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <div>
                              <legend class="mt-6 text-base font-medium text-gray-900">Push Notifications</legend>
                              <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                            </div>
                            <div class="mt-4 space-y-4">
                              <div class="flex items-center">
                                <input id="push-everything" name="push-notifications" type="radio" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300">
                                <label for="push-everything" class="block ml-3 text-sm font-medium text-gray-700">
                                  Everything
                                </label>
                              </div>
                              <div class="flex items-center">
                                <input id="push-email" name="push-notifications" type="radio" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300">
                                <label for="push-email" class="block ml-3 text-sm font-medium text-gray-700">
                                  Same as email
                                </label>
                              </div>
                              <div class="flex items-center">
                                <input id="push-nothing" name="push-notifications" type="radio" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300">
                                <label for="push-nothing" class="block ml-3 text-sm font-medium text-gray-700">
                                  No push notifications
                                </label>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                    </div>


                  </div>

                  <div class="bg-gray-50 sm:px-6 px-4 py-3 text-right">
                    <button type="submit" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                      Save
                    </button>
                  </div>
                </div>
              </form>


              <div class="sm:px-6 lg:px-0 lg:col-span-9 space-y-6">
                <form action="#" method="POST">
                  <div class="sm:rounded-md sm:overflow-hidden shadow">
                    <div class="sm:p-6 px-4 py-6 space-y-6 bg-white">
                      <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                        <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
                      </div>

                      <div class="grid grid-cols-3 gap-6">
                        <div class="sm:col-span-2 col-span-3">
                          <label for="company-website" class="block text-sm font-medium text-gray-700">
                            Username
                          </label>
                          <div class="flex mt-1 rounded-md shadow-sm">
                            <span class="bg-gray-50 rounded-l-md sm:text-sm inline-flex items-center px-3 text-gray-500 border border-r-0 border-gray-300">
                              workcation.com/
                            </span>
                            <input type="text" name="username" id="username" autocomplete="username" class="focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm flex-grow block w-full min-w-0 border-gray-300 rounded-none">
                          </div>
                        </div>

                        <div class="col-span-3">
                          <label for="about" class="block text-sm font-medium text-gray-700">
                            About
                          </label>
                          <div class="mt-1">
                            <textarea id="about" name="about" rows="3" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border border-gray-300 rounded-md shadow-sm" placeholder="you@example.com"></textarea>
                          </div>
                          <p class="mt-2 text-sm text-gray-500">
                            Brief description for your profile. URLs are hyperlinked.
                          </p>
                        </div>

                        <div class="col-span-3">
                          <label class="block text-sm font-medium text-gray-700">
                            Photo
                          </label>
                          <div class="flex items-center mt-1">
                            <span class="inline-block w-12 h-12 overflow-hidden bg-gray-100 rounded-full">
                              <svg class="w-full h-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                              </svg>
                            </span>
                            <button type="button" class="hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-3 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm">
                              Change
                            </button>
                          </div>
                        </div>

                        <div class="col-span-3">
                          <label class="block text-sm font-medium text-gray-700">
                            Cover photo
                          </label>
                          <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                              <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              <div class="flex text-sm text-gray-600">
                                <label for="file-upload" class="hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500 relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer">
                                  <span>Upload a file</span>
                                  <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                              </div>
                              <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 10MB
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="bg-gray-50 sm:px-6 px-4 py-3 text-right">
                      <button type="submit" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                        Save
                      </button>
                    </div>
                  </div>
                </form>

                <form action="#" method="POST">
                  <div class="sm:rounded-md sm:overflow-hidden shadow">
                    <div class="sm:p-6 px-4 py-6 space-y-6 bg-white">
                      <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-500">Use a permanent address where you can recieve mail.</p>
                      </div>

                      <div class="grid grid-cols-6 gap-6">
                        <div class="sm:col-span-3 col-span-6">
                          <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="sm:col-span-3 col-span-6">
                          <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="sm:col-span-4 col-span-6">
                          <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                          <input type="text" name="email-address" id="email-address" autocomplete="email" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="sm:col-span-3 col-span-6">
                          <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                          <select id="country" name="country" autocomplete="country-name" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select>
                        </div>

                        <div class="col-span-6">
                          <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                          <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="sm:col-span-6 lg:col-span-2 col-span-6">
                          <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                          <input type="text" name="city" id="city" autocomplete="address-level2" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="sm:col-span-3 lg:col-span-2 col-span-6">
                          <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                          <input type="text" name="region" id="region" autocomplete="address-level1" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="sm:col-span-3 lg:col-span-2 col-span-6">
                          <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                          <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                        </div>
                      </div>
                    </div>
                    <div class="bg-gray-50 sm:px-6 px-4 py-3 text-right">
                      <button type="submit" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                        Save
                      </button>
                    </div>
                  </div>
                </form>

                <form action="#" method="POST">
                  <div class="sm:rounded-md sm:overflow-hidden shadow">
                    <div class="sm:p-6 px-4 py-6 space-y-6 bg-white">
                      <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                        <p class="mt-1 text-sm text-gray-500">Provide basic informtion about the job. Be specific with the job title.</p>
                      </div>

                      <fieldset>
                        <legend class="text-base font-medium text-gray-900">By Email</legend>
                        <div class="mt-4 space-y-4">
                          <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="comments" class="font-medium text-gray-700">Comments</label>
                              <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                            </div>
                          </div>
                          <div>
                            <div class="flex items-start">
                              <div class="flex items-center h-5">
                                <input id="candidates" name="candidates" type="checkbox" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300 rounded">
                              </div>
                              <div class="ml-3 text-sm">
                                <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                                <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="flex items-start">
                              <div class="flex items-center h-5">
                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300 rounded">
                              </div>
                              <div class="ml-3 text-sm">
                                <label for="offers" class="font-medium text-gray-700">Offers</label>
                                <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <fieldset class="mt-6">
                        <legend class="text-base font-medium text-gray-900">Push Notifications</legend>
                        <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                        <div class="mt-4 space-y-4">
                          <div class="flex items-center">
                            <input id="push-everything" name="push-notifications" type="radio" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300">
                            <label for="push-everything" class="ml-3">
                              <span class="block text-sm font-medium text-gray-700">Everything</span>
                            </label>
                          </div>
                          <div class="flex items-center">
                            <input id="push-email" name="push-notifications" type="radio" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300">
                            <label for="push-email" class="ml-3">
                              <span class="block text-sm font-medium text-gray-700">Same as email</span>
                            </label>
                          </div>
                          <div class="flex items-center">
                            <input id="push-nothing" name="push-notifications" type="radio" class="focus:ring-indigo-500 w-4 h-4 text-indigo-600 border-gray-300">
                            <label for="push-nothing" class="ml-3">
                              <span class="block text-sm font-medium text-gray-700">No push notifications</span>
                            </label>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    <div class="bg-gray-50 sm:px-6 px-4 py-3 text-right">
                      <button type="submit" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                        Save
                      </button>
                    </div>
                  </div>
                </form>

                <form action="#" method="POST">
                  <div class="sm:rounded-md sm:overflow-hidden shadow">
                    <div class="sm:p-6 px-4 py-6 space-y-6 bg-white">
                      <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Settings</h3>
                        <p class="mt-1 text-sm text-gray-500">Provide basic informtion about the job. Be specific with the job title.</p>
                      </div>

                      <ul role="list" class="mt-2 divide-y divide-gray-200">
                        <li class="flex items-center justify-between py-4">
                          <div class="flex flex-col">
                            <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">
                              Available to hire
                            </p>
                            <p class="text-sm text-gray-500" id="privacy-option-1-description">
                              Nulla amet tempus sit accumsan. Aliquet turpis sed sit lacinia.
                            </p>
                          </div>
                          <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                          <button type="button" class="w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 relative inline-flex flex-shrink-0 h-6 ml-4 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer" role="switch" aria-checked="true" aria-labelledby="privacy-option-1-label" aria-describedby="privacy-option-1-description">
                            <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                            <span aria-hidden="true" class="ring-0 inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow"></span>
                          </button>
                        </li>
                        <li class="flex items-center justify-between py-4">
                          <div class="flex flex-col">
                            <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">
                              Make account private
                            </p>
                            <p class="text-sm text-gray-500" id="privacy-option-2-description">
                              Pharetra morbi dui mi mattis tellus sollicitudin cursus pharetra.
                            </p>
                          </div>
                          <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                          <button type="button" class="w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 relative inline-flex flex-shrink-0 h-6 ml-4 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer" role="switch" aria-checked="false" aria-labelledby="privacy-option-2-label" aria-describedby="privacy-option-2-description">
                            <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                            <span aria-hidden="true" class="ring-0 inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow"></span>
                          </button>
                        </li>
                        <li class="flex items-center justify-between py-4">
                          <div class="flex flex-col">
                            <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">
                              Allow commenting
                            </p>
                            <p class="text-sm text-gray-500" id="privacy-option-3-description">
                              Integer amet, nunc hendrerit adipiscing nam. Elementum ame
                            </p>
                          </div>
                          <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                          <button type="button" class="w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 relative inline-flex flex-shrink-0 h-6 ml-4 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer" role="switch" aria-checked="true" aria-labelledby="privacy-option-3-label" aria-describedby="privacy-option-3-description">
                            <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                            <span aria-hidden="true" class="ring-0 inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow"></span>
                          </button>
                        </li>
                        <li class="flex items-center justify-between py-4">
                          <div class="flex flex-col">
                            <p class="text-sm font-medium text-gray-900" id="privacy-option-4-label">
                              Allow mentions
                            </p>
                            <p class="text-sm text-gray-500" id="privacy-option-4-description">
                              Adipiscing est venenatis enim molestie commodo eu gravid
                            </p>
                          </div>
                          <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                          <button type="button" class="w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 relative inline-flex flex-shrink-0 h-6 ml-4 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer" role="switch" aria-checked="true" aria-labelledby="privacy-option-4-label" aria-describedby="privacy-option-4-description">
                            <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                            <span aria-hidden="true" class="ring-0 inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow"></span>
                          </button>
                        </li>
                      </ul>

                    </div>
                    <div class="bg-gray-50 sm:px-6 px-4 py-3 text-right">
                      <button type="submit" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                        Save
                      </button>
                    </div>
                  </div>
                </form>

              </div>





              <!-- Payment details -->
              <section aria-labelledby="payment-details-heading">
                <form action="#" method="POST">

                </form>
              </section>
              <!-- Payment details end-->

              <!-- Payment details end-->


            </div>








</body>


</html>