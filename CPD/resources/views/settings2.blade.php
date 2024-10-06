<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.5.0/dist/cdn.min.js"></script>
</head>

<body class="h-full" x-data="{ open: false }" @keydown.window.escape="open = false">

  <div x-data="{ open: false }" @keydown.window.escape="open = false" class="min-h-full">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div x-show="open" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." class="fixed inset-0 z-40 flex lg:hidden" role="dialog" aria-modal="true">
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
          <button type="button" class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
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
            <a href="{{ url('dashboard2') }} class="flex items-center px-2 py-2 text-base font-medium text-white bg-gray-800 rounded-md group" aria-current="page">
              <!-- Heroicon name: outline/home -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Home
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md hover:text-white hover:bg-gray-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              History
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md hover:text-white hover:bg-gray-600 group">
              <!-- Heroicon name: outline/scale -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
              </svg>
              Balances
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md hover:text-white hover:bg-gray-600 group">
              <!-- Heroicon name: outline/credit-card -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
              Cards
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md hover:text-white hover:bg-gray-600 group">
              <!-- Heroicon name: outline/user-group -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              Recipients
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md hover:text-white hover:bg-gray-600 group">
              <!-- Heroicon name: outline/document-report -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              Reports
            </a>
          </div>
          <div class="pt-6 mt-6">
            <div class="px-2 space-y-1">
              <a href="{{ url('settings') }}" class="flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md group hover:text-white hover:bg-gray-600">
                <!-- Heroicon name: outline/cog -->
                <svg class="w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Settings
              </a>

              <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md group hover:text-white hover:bg-gray-600">
                <!-- Heroicon name: outline/question-mark-circle -->
                <svg class="w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Help
              </a>

              <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-gray-100 rounded-md group hover:text-white hover:bg-gray-600">
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

      <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
      </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto bg-gray-700">
        <div class="flex items-center flex-shrink-0 px-4">
          <svg data-name="Group 948" viewBox="0 0 195.516 75" data-v-113faa97="" data-v-54a5d94a=""><g data-name="Group 927" class="logo-wrapper" data-v-113faa97=""><path data-name="Path 886" d="M72.391 75H2.609A2.616 2.616 0 0 1 0 72.391V2.609A2.616 2.616 0 0 1 2.609 0h69.782A2.616 2.616 0 0 1 75 2.609v69.782A2.616 2.616 0 0 1 72.391 75" fill="#000" data-v-113faa97=""></path> <path data-name="Path 887" d="M23.543 26.479a5.88 5.88 0 0 1-4.5 1.957 5.222 5.222 0 0 1-5.478-5.414 5.332 5.332 0 0 1 5.478-5.413 5.883 5.883 0 0 1 4.5 2.087l-1.37 1.3a4.217 4.217 0 0 0-3.13-1.5 3.467 3.467 0 0 0-3.522 3.522 3.372 3.372 0 0 0 3.587 3.522 4.115 4.115 0 0 0 3.13-1.5Z" fill="#fff" data-v-113faa97=""></path> <path data-name="Path 888" d="M25.37 17.935h5.609v1.891h-3.652v1.957h3.652v1.891h-3.652v2.674h3.652v1.887H25.37Z" fill="#fff" data-v-113faa97=""></path> <path data-name="Path 889" d="M33.065 17.935h1.957v8.413h2.87v1.887h-4.827Z" fill="#fff" data-v-113faa97=""></path> <path data-name="Path 890" d="M39.717 17.935h1.957v8.413h2.87v1.887h-4.827Z" fill="#fff" data-v-113faa97=""></path> <path data-name="Path 891" d="M14.152 32.283h2.413a3.961 3.961 0 0 1 2.935.848 2.946 2.946 0 0 1 .852 2.152 2.637 2.637 0 0 1-1.3 2.413 5.271 5.271 0 0 1-2.87.522v4.365h-1.965v-10.3Zm1.957 4.043h.913c.913 0 1.3-.326 1.3-1.043s-.457-1.043-1.435-1.043h-.848v2.087Z" fill="#fff" data-v-113faa97=""></path> <path data-name="Path 892" d="M32.087 37.435a5.289 5.289 0 0 1-5.348 5.348 5.413 5.413 0 0 1-.065-10.826 5.456 5.456 0 0 1 5.413 5.478m-8.739 0a3.343 3.343 0 0 0 3.391 3.457 3.386 3.386 0 0 0 3.326-3.522 3.438 3.438 0 0 0-3.391-3.522 3.488 3.488 0 0 0-3.326 3.587" fill="#fff" data-v-113faa97=""></path> <path data-name="Rectangle 1108" fill="#fff" d="M33.783 32.283h1.957v10.304h-1.957z" data-v-113faa97=""></path> <path data-name="Path 893" d="M37.957 32.283h1.891l4.435 6.783v-6.783h1.957v10.3h-1.892L39.913 35.8v6.783h-1.956Z" fill="#fff" data-v-113faa97=""></path> <path data-name="Path 894" d="M47.543 32.283h5.674v1.891h-1.891v8.409h-1.957v-8.409h-1.826v-1.891" fill="#fff" data-v-113faa97=""></path> <path data-name="Path 895" d="M19.891 47.218a7.733 7.733 0 0 0-3.13-.457h-2.348v9.978h3.457a4.573 4.573 0 0 0 4.957-4.891 4.959 4.959 0 0 0-2.935-4.63m1.174 7.5c-.913 1.109-2.217 1.37-4.3 1.37h-1.7v-8.61h1.239c2.283 0 3.783.261 4.826 1.63a4.518 4.518 0 0 1 .913 2.8 4.836 4.836 0 0 1-.978 2.8" fill="#fff" data-v-113faa97=""></path> <path data-name="Rectangle 1109" fill="#fff" d="M24.261 46.761h.717v9.978h-.717z" data-v-113faa97=""></path> <path data-name="Path 896" d="M26.413 51.783c0 3.391 2.935 5.217 5.674 5.217a4.69 4.69 0 0 0 5.026-4.891H33v.652h3.326v.2a3.962 3.962 0 0 1-4.174 3.391 4.81 4.81 0 0 1-4.957-4.63 4.708 4.708 0 0 1 4.761-4.565 5.731 5.731 0 0 1 3.913 1.7l.522-.522a6.311 6.311 0 0 0-4.5-1.826 5.268 5.268 0 0 0-5.478 5.274" fill="#fff" data-v-113faa97=""></path> <path data-name="Rectangle 1110" fill="#fff" d="M38.609 46.761h.717v9.978h-.717z" data-v-113faa97=""></path> <path data-name="Path 897" d="M46.174 46.761h-5.283v.717h2.283v9.261h.717v-9.261h2.283Z" fill="#fff" data-v-113faa97=""></path> <path data-name="Path 898" d="m52.956 53.348 1.63 3.391h.717l-4.629-9.978h-.061l-4.7 9.978h.783l1.63-3.391Zm-2.282-4.957 2.022 4.3h-4.044Z" fill="#fff" data-v-113faa97=""></path> <path data-name="Path 899" d="M56.348 46.761v9.978h4.7v-.652h-3.983v-9.326Z" fill="#fff" data-v-113faa97=""></path> <g class="tagline" data-v-113faa97=""><path data-name="Path 900" d="M89.101 17.969h1.953v8.4h2.845v1.858h-4.8Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 901" d="M95.391 17.969h5.6v1.911H97.33v1.855h3.661v1.876H97.33v2.7h3.661v1.916h-5.6Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 902" d="M105.841 17.969h1.981l3.945 10.259h-2.03l-.8-2.114h-4.186l-.835 2.114h-2.03Zm1 2.72-1.376 3.522h2.744Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 903" d="M112.63 17.969h2.314a7.622 7.622 0 0 1 3.323.554 4.328 4.328 0 0 1 1.791 1.8 6.319 6.319 0 0 1 .31 5.094 4.526 4.526 0 0 1-1.087 1.649 3.831 3.831 0 0 1-1.5.907 10.645 10.645 0 0 1-2.8.252h-2.351Zm1.939 1.882v6.473h.907a4.527 4.527 0 0 0 1.942-.308 2.326 2.326 0 0 0 .987-1.033 3.789 3.789 0 0 0 .384-1.787 3.4 3.4 0 0 0-.914-2.534 3.661 3.661 0 0 0-2.643-.811Z" fill="#000" data-v-113faa97=""></path> <path data-name="Rectangle 1111" fill="#000" d="M122.161 17.969h1.939v10.258h-1.939z" data-v-113faa97=""></path> <path data-name="Path 904" d="M126.065 17.969h1.873l4.39 6.751v-6.751h1.953v10.258h-1.879l-4.384-6.73v6.73h-1.953Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 905" d="m145.267 19.642-1.375 1.36a4.064 4.064 0 0 0-3.043-1.381 3.476 3.476 0 0 0-2.538 1 3.294 3.294 0 0 0-1.023 2.441 3.378 3.378 0 0 0 1.061 2.517 3.61 3.61 0 0 0 2.618 1.032 3.213 3.213 0 0 0 1.707-.425 3 3 0 0 0 1.12-1.332h-2.973v-1.829h5.161l.014.432a5.023 5.023 0 0 1-.7 2.553 4.878 4.878 0 0 1-1.807 1.841 5.153 5.153 0 0 1-2.6.635 5.78 5.78 0 0 1-2.849-.694 5.077 5.077 0 0 1-1.981-1.977 5.521 5.521 0 0 1-.728-2.768 5.147 5.147 0 0 1 1.345-3.543 5.308 5.308 0 0 1 4.157-1.793 6.334 6.334 0 0 1 2.5.5 5.741 5.741 0 0 1 1.925 1.437" fill="#000" data-v-113faa97=""></path> <path data-name="Path 906" d="M89.093 32.252h2.071a6.821 6.821 0 0 1 2.423.31 2.464 2.464 0 0 1 1.171 1 3.1 3.1 0 0 1 .429 1.663 2.79 2.79 0 0 1-.562 1.785 2.908 2.908 0 0 1-1.523.991 8.766 8.766 0 0 1-2.058.16v4.345h-1.951Zm1.953 4.01h.621a3.358 3.358 0 0 0 1.018-.1.91.91 0 0 0 .45-.346 1.017 1.017 0 0 0 .164-.584.935.935 0 0 0-.46-.868 2.634 2.634 0 0 0-1.242-.2h-.551Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 907" d="M98.521 32.251h1.981l3.945 10.259h-2.03l-.8-2.114h-4.186l-.835 2.114h-2.031Zm1 2.72-1.376 3.522h2.744Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 908" d="M103.435 32.251h2.1l1.914 3.69 1.9-3.69h2.07l-3 5.816v4.442h-1.966v-4.442Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 909" d="M113.259 32.251h1.9l2.384 7.155 2.4-7.155h1.9l1.72 10.258h-1.89l-1.1-6.479-2.179 6.479h-1.721l-2.16-6.479-1.126 6.479h-1.9Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 910" d="M125.091 32.251h5.6v1.911h-3.661v1.855h3.661v1.876h-3.661v2.7h3.661v1.916h-5.6Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 911" d="M132.587 32.251h1.873l4.39 6.751v-6.751h1.953v10.258h-1.879l-4.384-6.73v6.73h-1.953Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 912" d="M142.078 32.251h5.669v1.925h-1.869v8.333h-1.981v-8.333h-1.82Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 913" d="M97.231 47.977a5.234 5.234 0 0 0-3.82-1.522 5.171 5.171 0 0 0-4.524 2.634 5.373 5.373 0 0 0-.7 2.684 5.047 5.047 0 0 0 1.537 3.7 5.162 5.162 0 0 0 3.772 1.529 5.3 5.3 0 0 0 3.737-9.025m-1.508 7.662a4.527 4.527 0 0 1-2.268.593 4.428 4.428 0 0 1-4.438-4.462 4.572 4.572 0 0 1 .588-2.3 4.493 4.493 0 0 1 3.849-2.246 4.466 4.466 0 0 1 2.25.609 4.379 4.379 0 0 1 1.645 1.623 4.469 4.469 0 0 1 .584 2.265 4.587 4.587 0 0 1-.584 2.29 4.286 4.286 0 0 1-1.628 1.628" fill="#000" data-v-113faa97=""></path> <path data-name="Path 914" d="M102.474 51.986h.231a5.069 5.069 0 0 0 1.977-.322 2.351 2.351 0 0 0 1.075-.915 2.636 2.636 0 0 0 .378-1.414 2.462 2.462 0 0 0-.546-1.62 2.54 2.54 0 0 0-1.423-.859 12.371 12.371 0 0 0-2.29-.137h-1.93v10.03h.8V51.98h.749l3.689 4.763h.98Zm-1.73-.778v-3.722h1.923a4.482 4.482 0 0 1 1.551.19 1.678 1.678 0 0 1 .787.646 1.786 1.786 0 0 1 .3 1 1.857 1.857 0 0 1-.294 1.021 1.7 1.7 0 0 1-.822.668 4.469 4.469 0 0 1-1.561.2Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 915" d="M112.359 56.26a4.587 4.587 0 0 1-3.326-1.288 4.322 4.322 0 0 1-1.321-3.212 4.516 4.516 0 0 1 .59-2.293 4.366 4.366 0 0 1 1.664-1.625 4.7 4.7 0 0 1 2.33-.6 4.847 4.847 0 0 1 2.11.46 4.558 4.558 0 0 1 1.578 1.265l.63-.483a4.948 4.948 0 0 0-1.789-1.469 5.716 5.716 0 0 0-2.543-.557 5.361 5.361 0 0 0-3.878 1.505 5 5 0 0 0-1.545 3.709 5.322 5.322 0 0 0 1.276 3.58 5.245 5.245 0 0 0 4.161 1.753 5.927 5.927 0 0 0 2.515-.523 5.085 5.085 0 0 0 1.8-1.387l-.631-.478a4.679 4.679 0 0 1-3.622 1.646" fill="#000" data-v-113faa97=""></path> <path data-name="Path 916" d="M118.835 46.713h-.8v10.03h.8v-4.951h5.452v4.951h.8v-10.03h-.8v4.3h-5.452Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 917" d="M132.629 47.486v-.775h-5.651v10.03h5.609v-.776h-4.809v-4.257h4.812v-.777h-4.812v-3.445Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 918" d="M138.63 52.874a7.4 7.4 0 0 0-1.8-1.72c-.759-.561-1.2-.9-1.336-1.035a2.49 2.49 0 0 1-.534-.719 1.7 1.7 0 0 1-.149-.7 1.349 1.349 0 0 1 .428-1.01 1.526 1.526 0 0 1 1.094-.408 1.824 1.824 0 0 1 .948.26 3.864 3.864 0 0 1 .95.95l.657-.5a4.421 4.421 0 0 0-1.233-1.2 2.6 2.6 0 0 0-1.3-.345 2.506 2.506 0 0 0-1.211.3 2.187 2.187 0 0 0-.859.826 2.277 2.277 0 0 0-.305 1.163 2.462 2.462 0 0 0 .521 1.5 8.994 8.994 0 0 0 1.569 1.388 8.464 8.464 0 0 1 1.782 1.671 1.858 1.858 0 0 1 .37 1.077 1.793 1.793 0 0 1-.253.916 1.821 1.821 0 0 1-.735.688 2.165 2.165 0 0 1-1.023.253c-.82 0-1.55-.554-2.169-1.65l-.676.406a4.357 4.357 0 0 0 1.311 1.534 2.925 2.925 0 0 0 1.632.48 2.748 2.748 0 0 0 1.981-.791 2.515 2.515 0 0 0 .813-1.856 2.724 2.724 0 0 0-.477-1.48" fill="#000" data-v-113faa97=""></path> <path data-name="Path 919" d="M141.722 56.743h.818v-9.257h2.288v-.776h-5.393v.776h2.287Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 920" d="M148.745 51.986h.231a5.069 5.069 0 0 0 1.977-.322 2.351 2.351 0 0 0 1.075-.915 2.637 2.637 0 0 0 .378-1.414 2.461 2.461 0 0 0-.546-1.62 2.54 2.54 0 0 0-1.423-.859 12.371 12.371 0 0 0-2.29-.137h-1.93v10.03h.8V51.98h.749l3.689 4.763h.98Zm-1.728-.783v-3.717h1.923a4.482 4.482 0 0 1 1.551.19 1.678 1.678 0 0 1 .786.646 1.786 1.786 0 0 1 .3 1 1.857 1.857 0 0 1-.294 1.021 1.7 1.7 0 0 1-.822.668 4.468 4.468 0 0 1-1.561.2Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 921" d="M157.389 46.713h-.106l-4.74 10.03h.891l1.6-3.376h4.563l1.614 3.376h.856Zm-2 5.892 1.938-4.094 1.93 4.094Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 922" d="M163.439 56.743h.818v-9.257h2.287v-.776h-5.392v.776h2.287Z" fill="#000" data-v-113faa97=""></path> <path data-name="Rectangle 1112" fill="#000" d="M167.739 46.713h.798v10.03h-.798z" data-v-113faa97=""></path> <path data-name="Path 923" d="M179.365 47.977a5.238 5.238 0 0 0-3.821-1.522 5.168 5.168 0 0 0-4.523 2.634 5.373 5.373 0 0 0-.7 2.684 5.047 5.047 0 0 0 1.537 3.7 5.161 5.161 0 0 0 3.771 1.529 5.3 5.3 0 0 0 3.738-9.025m-1.508 7.662a4.526 4.526 0 0 1-2.268.593 4.428 4.428 0 0 1-4.437-4.462 4.579 4.579 0 0 1 .587-2.3 4.4 4.4 0 0 1 1.635-1.64 4.359 4.359 0 0 1 2.209-.606 4.469 4.469 0 0 1 2.251.609 4.379 4.379 0 0 1 1.645 1.623 4.47 4.47 0 0 1 .584 2.268 4.581 4.581 0 0 1-.584 2.29 4.286 4.286 0 0 1-1.629 1.628" fill="#000" data-v-113faa97=""></path> <path data-name="Path 924" d="M182.231 46.713h-.057v10.03h.832v-7.957l6.938 7.958h.064V46.713h-.783v8.056l-.2-.232Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 925" d="M191.739 49.014h.392v-1.891h.456v-.392h-1.239v.392h.392Z" fill="#000" data-v-113faa97=""></path> <path data-name="Path 926" d="M195.136 46.731h-.406l-.545 1.7-.031-.1-.514-1.608h-.407l-.507 2.283h.388l.277-1.6.556 1.6h.346l.556-1.6.021.123.256 1.473h.391Z" fill="#000" data-v-113faa97=""></path></g></g></svg>
          
        </div>
        <nav class="flex flex-col flex-1 mt-5 overflow-y-auto divide-y divide-gray-800" aria-label="Sidebar">
          <div class="px-2 space-y-1">
            <!-- Current: "bg-gray-800 text-white", Default: "text-gray-100 hover:text-white hover:bg-gray-600" -->
            <a href="{{ url('dashboard2') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-white hover:text-white hover:bg-gray-600 group" aria-current="page">
              <!-- Heroicon name: outline/home -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Home
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md hover:text-white hover:bg-gray-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              History
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md hover:text-white hover:bg-gray-600 group">
              <!-- Heroicon name: outline/scale -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
              </svg>
              Balances
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md hover:text-white hover:bg-gray-600 group">
              <!-- Heroicon name: outline/credit-card -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
              Cards
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md hover:text-white hover:bg-gray-600 group">
              <!-- Heroicon name: outline/user-group -->
              <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              Recipients
            </a>

            <!-- <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md hover:text-white hover:bg-gray-600 group">
              <!-- Heroicon name: outline/document-report -->
            <!-- <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg> -->
            <!-- Reports -->
            <!-- </a> -->

            <div x-data="{ open: false }" class="space-y-1">
              <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
              <button type="button" x-state:on="Current" x-state:off="Default" @click="open = !open" aria-controls="sub-menu-5" x-bind:aria-expanded="open.toString()" x-state-description="Current: " bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900""
            class="flex items-center w-full px-2 py-2 pl-2 pr-1 text-sm font-medium text-left text-gray-100 bg-gray-700 rounded-md hover:text-white hover:bg-gray-600 group focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-5" aria-expanded="false">
                <!-- Heroicon name: outline/chart-bar -->
                <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-200 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span class="flex-1 poo">
                  Reports
                </span>
                <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                <svg x-state:on="Expanded" x-state:off="Collapsed" aria-hidden="true" :class="{ 'text-gray-400 rotate-90': open, 'text-gray-300': !(open) }" class="flex-shrink-0 w-5 h-5 ml-3 text-gray-300 transition-colors duration-150 ease-in-out transform rotate-90 group-hover:text-gray-400" viewBox="0 0 20 20" aria-hidden="true">
                  <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                </svg>
              </button>
              <!-- Expandable link section, show/hide based on state. -->
              <div x-description="Expandable link section, show/hide based on state." x-show="open" class="space-y-1" id="sub-menu-5">
                <div class="ml-2">
                  <a href="#" class="flex items-center w-full py-2 pr-2 text-sm font-medium text-gray-300 rounded-md group pl-11 hover:text-white hover:bg-gray-600">
                    Overview
                  </a>
                </div>

                <div class="ml-2">
                  <a href="#" class="flex items-center w-full py-2 pr-2 text-sm font-medium text-gray-300 rounded-md group pl-11 hover:text-white hover:bg-gray-600">
                    Members
                  </a>
                </div>

                <div class="ml-2">
                  <a href="#" class="flex items-center w-full py-2 pr-2 text-sm font-medium text-gray-300 rounded-md group pl-11 hover:text-white hover:bg-gray-600">
                    Calendar
                  </a>
                </div>



              </div>
            </div>

          </div>





          <div class="pt-6 mt-6">
            <div class="px-2 space-y-1">
              <a href="{{ url('settings') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 bg-gray-800 rounded-md group">
                <!-- Heroicon name: outline/cog -->
                <svg class="w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Settings
              </a>

              <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md group hover:text-white hover:bg-gray-600">
                <!-- Heroicon name: outline/question-mark-circle -->
                <svg class="w-6 h-6 mr-4 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Help
              </a>

              <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-100 rounded-md group hover:text-white hover:bg-gray-600">
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

    <div class="flex flex-col flex-1 lg:pl-64">
      <div class="relative z-10 flex flex-shrink-0 h-16 bg-white border-b border-gray-200 lg:border-none">
        <button type="button" class="px-4 text-gray-400 border-r border-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500 lg:hidden">
          <span class="sr-only">Open sidebar</span>
          <!-- Heroicon name: outline/menu-alt-1 -->
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </button>
        <!-- Search bar -->
        <div class="flex justify-between flex-1 px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
          <div class="flex flex-1">
            <form class="flex w-full md:ml-0" action="#" method="GET">
              <label for="search-field" class="sr-only">Search</label>
              <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none" aria-hidden="true">
                  <!-- Heroicon name: solid/search -->
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                  </svg>
                </div>
                <input id="search-field" name="search-field" class="block w-full h-full py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 border-transparent focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search transactions" type="search">
              </div>
            </form>
          </div>
          <div class="flex items-center ml-4 md:ml-6">
            <button type="button" class="p-1 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
              <span class="sr-only">View notifications</span>
              <!-- Heroicon name: outline/bell -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>

            </button>

            <!-- Profile dropdown x -->
            <div x-data="{ open_modal: false } x-init=" init()" @keydown.escape.stop="open = false; focusButton()" class="relative ml-3">
              <div>
                <button type="button" class="flex items-center max-w-xs text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 lg:p-2 lg:rounded-md lg:hover:bg-gray-50" id="user-menu-button" x-ref="button" @click="open = ! open" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                  <img class="w-8 h-8 rounded-full" src="https://steel.taigatravel.net/images/KG_profile.png" alt="">
                  <span class="hidden ml-3 text-sm font-medium text-gray-700 lg:block"><span class="sr-only">Open user menu for </span>Kristian Gjerding</span>
                  <svg class="flex-shrink-0 hidden w-5 h-5 ml-1 text-gray-400 lg:block" x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </button>
              </div>

              <div x-show="open" @click.outside="open = false" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()" style="display: none;">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="open = false; focusButton()">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1" id="user-menu-item-1" @mouseenter="activeIndex = 1" @mouseleave="activeIndex = -1" @click="open = false; focusButton()">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" :class="{ 'bg-gray-100': activeIndex === 2 }" role="menuitem" tabindex="-1" id="user-menu-item-2" @mouseenter="activeIndex = 2" @mouseleave="activeIndex = -1" @click="open = false; focusButton()">Logout</a>
              </div>

            </div>


          </div>
        </div>
      </div>
      <main class="flex-1 pb-8">
        <!-- Page header -->
        <div class="bg-white shadow">
          <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
            <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
              <div class="flex-1 min-w-0">
                <!-- Profile -->
                <div class="flex items-center">

                  <div>
                    <div class="flex items-center">

                      <h1 class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                        Settings
                      </h1>
                    </div>
                    <dl class="flex flex-col mt-6 sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">


                    </dl>
                  </div>
                </div>
              </div>
              <div class="flex mt-6 space-x-3 md:mt-0 md:ml-4">
                <!-- <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                  Add money
                </button> -->
                <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                  Engage Flux Capacitor
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
          <!-- <h2 class="text-lg font-medium leading-6 text-gray-900">Overview</h2> -->

          <div class="mt-10 sm:mt-0">

          </div>

          <div class="hidden sm:block" aria-hidden="true">
            <div class="pt-0">
              <!-- <div class="border-t border-gray-200"></div> -->
            </div>
          </div>



          <!--
  This example requires Tailwind CSS v2.0+ 
  
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














          <div class="hidden sm:block" aria-hidden="true">
            <div class="pt-6">
              <!-- <div class="border-t border-gray-200"></div> -->
            </div>
          </div>

          <!--
  This example requires Tailwind CSS v2.0+ 
  
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
          

          <form action="#" method="POST">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-6 space-y-6 bg-white sm:p-6">
              
                <div class="md:grid md:grid-cols-3 md:gap-6">
                  <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                    <p class="mt-1 text-sm text-gray-500">
                      This information will be displayed publicly so be careful what you share.
                    </p>
                  </div>
                  <div class="mt-5 space-y-6 md:mt-0 md:col-span-2">
                  <form class="space-y-6" action="#" method="POST">
                    <div class="grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="company-website" class="block text-sm font-medium text-gray-700">
                          Website
                        </label>
                        <div class="flex mt-1 rounded-md shadow-sm">
                          <span class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                            http://
                          </span>
                          <input type="text" name="company-website" id="company-website" class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="www.example.com">
                        </div>
                      </div>
                    </div>

                    <div>
                      <label for="about" class="block text-sm font-medium text-gray-700">
                        About
                      </label>
                      <div class="mt-1">
                        <textarea id="about" name="about" rows="3" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
                      </div>
                      <p class="mt-2 text-sm text-gray-500">
                        Brief description for your profile. URLs are hyperlinked.
                      </p>
                    </div>

                    <div>
                      <label class="block text-sm font-medium text-gray-700">
                        Photo
                      </label>
                      <div class="flex items-center mt-1 space-x-5">
                        <span class="inline-block w-12 h-12 overflow-hidden bg-gray-100 rounded-full">
                          <svg class="w-full h-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"></path>
                          </svg>
                        </span>
                        <button type="button" class="px-3 py-2 text-sm font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                          Change
                        </button>
                      </div>
                    </div>

                    <div>
                      <label class="block text-sm font-medium text-gray-700">
                        Cover photo
                      </label>
                      <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                          <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <div class="flex text-sm text-gray-600">
                            <label for="file-upload" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
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
                
                  </form>
                </div>
                </div>

              </div>
              <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
              <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                      </button>
                      <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                      </button>
              </div>
            </div>
          </form>

          <div class="hidden sm:block" aria-hidden="true">
            <div class="pt-6">
              <!-- <div class="border-t border-gray-200"></div> -->
            </div>
          </div>



          <form action="#" method="POST">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-6 space-y-6 bg-white sm:p-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                  <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                    <p class="mt-1 text-sm text-gray-500">
                      Use a permanent address where you can receive mail.
                    </p>
                  </div>
                  <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                          <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                          <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                          <input type="text" name="email-address" id="email-address" autocomplete="email" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                          <select id="country" name="country" autocomplete="country-name" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select>
                        </div>

                        <div class="col-span-6">
                          <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                          <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                          <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                          <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                          <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                          <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>



                      </div>
                    </form>
                  </div>
                </div>


              </div>
              <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                  Save
                </button>
              </div>
            </div>
          </form>

          <div class="hidden sm:block" aria-hidden="true">
            <div class="pt-6">
              <!-- <div class="border-t border-gray-200"></div> -->
            </div>
          </div>


          <form class="space-y-6" action="#" method="POST">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-6 space-y-6 bg-white sm:p-6">

                <div class="md:grid md:grid-cols-3 md:gap-6">
                  <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                    <p class="mt-1 text-sm text-gray-500">
                      Decide which communications you'd like to receive and how.
                    </p>
                  </div>
                  <div class="mt-5 md:mt-0 md:col-span-2">
                    <form class="space-y-6" action="#" method="POST">
                      <fieldset>
                        <legend class="text-base font-medium text-gray-900">By Email</legend>
                        <div class="mt-4 space-y-4">
                          <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="comments" name="comments" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="comments" class="font-medium text-gray-700">Comments</label>
                              <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                            </div>
                          </div>
                          <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="candidates" name="candidates" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                              <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                            </div>
                          </div>
                          <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="offers" name="offers" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
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
                            <input id="push-everything" name="push-notifications" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label for="push-everything" class="block ml-3 text-sm font-medium text-gray-700">
                              Everything
                            </label>
                          </div>
                          <div class="flex items-center">
                            <input id="push-email" name="push-notifications" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label for="push-email" class="block ml-3 text-sm font-medium text-gray-700">
                              Same as email
                            </label>
                          </div>
                          <div class="flex items-center">
                            <input id="push-nothing" name="push-notifications" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
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

              <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                  Save
                </button>
              </div>
            </div>
          </form>




















</body>


</html>