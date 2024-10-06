<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    ]
  }
  ```
-->
<div class="min-h-screen bg-gray-100">
  <header class="bg-white shadow">
    <div class="max-w-7xl sm:px-4 lg:px-8 px-2 mx-auto">
      <div class="flex justify-between h-16">
        <div class="lg:px-0 flex px-2">
          <div class="flex items-center flex-shrink-0">
            <a href="#">
              <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg" alt="Workflow">
            </a>
          </div>
          <nav aria-label="Global" class="lg:ml-6 lg:flex lg:items-center lg:space-x-4 hidden">
            <a href="#" class="px-3 py-2 text-sm font-medium text-gray-900">
              Dashboard
            </a>
            <a href="#" class="px-3 py-2 text-sm font-medium text-gray-900">
              Jobs
            </a>
            <a href="#" class="px-3 py-2 text-sm font-medium text-gray-900">
              Applicants
            </a>
            <a href="#" class="px-3 py-2 text-sm font-medium text-gray-900">
              Company
            </a>
          </nav>
        </div>
        <div class="lg:ml-6 lg:justify-end flex items-center justify-center flex-1 px-2">
          <div class="lg:max-w-xs w-full max-w-lg">
            <label for="search" class="sr-only">Search</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <!-- Heroicon name: solid/search -->
                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
              </div>
              <input id="search" name="search" class="focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-600 focus:border-blue-600 sm:text-sm block w-full py-2 pl-10 pr-3 leading-5 placeholder-gray-500 bg-white border border-gray-300 rounded-md shadow-sm" placeholder="Search" type="search">
            </div>
          </div>
        </div>
        <div class="lg:hidden flex items-center">
          <!-- Mobile menu button -->
          <button type="button" class="hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 inline-flex items-center justify-center p-2 text-gray-400 rounded-md" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Icon when menu is closed. -->
            <!--
              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Icon when menu is open. -->
            <!--
              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="lg:ml-4 lg:flex lg:items-center hidden">
          <button type="button" class="hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 flex-shrink-0 p-1 text-gray-400 bg-white rounded-full">
            <span class="sr-only">View notifications</span>
            <!-- Heroicon name: outline/bell -->
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>

          <!-- Profile dropdown -->
          <div class="relative flex-shrink-0 ml-4">
            <div>
              <button type="button" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 flex text-sm bg-white rounded-full" id="user-menu" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
              </button>
            </div>
            <!--
              Profile dropdown panel, show/hide based on dropdown state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div class="ring-1 ring-black ring-opacity-5 absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
              <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Your Profile</a>
              <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Settings</a>
              <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Sign out</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-7xl sm:px-6 px-4 mx-auto">
      <div class="py-3 border-t border-gray-200">
        <nav class="flex" aria-label="Breadcrumb">
          <div class="sm:hidden flex">
            <a href="#" class="group hover:text-gray-700 inline-flex space-x-3 text-sm font-medium text-gray-500">
              <!-- Heroicon name: solid/arrow-narrow-left -->
              <svg class="group-hover:text-gray-600 flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
              </svg>
              <span>Back to Applicants</span>
            </a>
          </div>
          <div class="sm:block hidden">
            <ol class="flex items-center space-x-4">
              <li>
                <div>
                  <a href="#" class="hover:text-gray-500 text-gray-400">
                    <!-- Heroicon name: solid/home -->
                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span class="sr-only">Home</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                  </svg>
                  <a href="#" class="hover:text-gray-700 ml-4 text-sm font-medium text-gray-500">Jobs</a>
                </div>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                  </svg>
                  <a href="#" aria-current="page" class="hover:text-gray-700 ml-4 text-sm font-medium text-gray-500">Front End Developer</a>
                </div>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                  </svg>
                  <a href="#" aria-current="page" class="hover:text-gray-700 ml-4 text-sm font-medium text-gray-500">Applicants</a>
                </div>
              </li>
            </ol>
          </div>
        </nav>
      </div>
    </div>

    <!--
      Mobile menu overlay, show/hide based on mobile menu state.

      Entering: "duration-150 ease-out"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "duration-150 ease-in"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="lg:hidden fixed inset-0 z-20 bg-black bg-opacity-25" aria-hidden="true"></div>

    <!--
      Mobile menu, show/hide based on mobile menu state.

      Entering: "duration-150 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-150 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div class="max-w-none lg:hidden absolute top-0 right-0 z-30 w-full p-2 transition origin-top transform">
      <div class="ring-1 ring-black ring-opacity-5 bg-white divide-y divide-gray-200 rounded-lg shadow-lg">
        <div class="pt-3 pb-2">
          <div class="flex items-center justify-between px-4">
            <div>
              <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg" alt="Workflow">
            </div>
            <div class="-mr-2">
              <button type="button" class="hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md">
                <span class="sr-only">Close menu</span>
                <!-- Heroicon name: outline/x -->
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
          <div class="px-2 mt-3 space-y-1">
            <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Dashboard</a>
            <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Jobs</a>
            <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Applicants</a>
            <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Company</a>
          </div>
        </div>
        <div class="pt-4 pb-2">
          <div class="flex items-center px-5">
            <div class="flex-shrink-0">
              <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
            </div>
            <div class="ml-3">
              <div class="text-base font-medium text-gray-800">Whitney Francis</div>
              <div class="text-sm font-medium text-gray-500">whitney@example.com</div>
            </div>
            <button class="hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 flex-shrink-0 p-1 ml-auto text-gray-400 bg-white rounded-full">
              <span class="sr-only">View notifications</span>
              <!-- Heroicon name: outline/bell -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </button>
          </div>
          <div class="px-2 mt-3 space-y-1">
            <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Your Profile</a>
            <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Settings</a>
            <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Sign out</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="py-10">
    <!-- Page header -->
    <div class="sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8 max-w-3xl px-4 mx-auto">
      <div class="flex items-center space-x-5">
        <div class="flex-shrink-0">
          <div class="relative">
            <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
            <span class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></span>
          </div>
        </div>
        <div>
          <h1 class="text-2xl font-bold text-gray-900">Ricardo Cooper</h1>
          <p class="text-sm font-medium text-gray-500">Applied for <a href="#" class="text-gray-900">Front End Developer</a> on <time datetime="2020-08-25">August 25, 2020</time></p>
        </div>
      </div>
      <div class="justify-stretch sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3 flex flex-col-reverse mt-6 space-y-4 space-y-reverse">
        <button type="button" class="hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm">
          Disqualify
        </button>
        <button type="button" class="hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm">
          Advance to offer
        </button>
      </div>
    </div>

    <div class="sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3 grid max-w-3xl grid-cols-1 gap-6 mx-auto mt-8">
      <div class="lg:col-start-1 lg:col-span-2 space-y-6">
        <!-- Description list-->
        <section aria-labelledby="applicant-information-title">
          <div class="sm:rounded-lg bg-white shadow">
            <div class="sm:px-6 px-4 py-5">
              <h2 id="applicant-information-title" class="text-lg font-medium leading-6 text-gray-900">
                Applicant Information
              </h2>
              <p class="max-w-2xl mt-1 text-sm text-gray-500">
                Personal details and application.
              </p>
            </div>
            <div class="sm:px-6 px-4 py-5 border-t border-gray-200">
              <dl class="gap-x-4 gap-y-8 sm:grid-cols-2 grid grid-cols-1">
                <div class="sm:col-span-1">
                  <dt class="text-sm font-medium text-gray-500">
                    Application for
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900">
                    Backend Developer
                  </dd>
                </div>
                <div class="sm:col-span-1">
                  <dt class="text-sm font-medium text-gray-500">
                    Email address
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900">
                    ricardocooper@example.com
                  </dd>
                </div>
                <div class="sm:col-span-1">
                  <dt class="text-sm font-medium text-gray-500">
                    Salary expectation
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900">
                    $120,000
                  </dd>
                </div>
                <div class="sm:col-span-1">
                  <dt class="text-sm font-medium text-gray-500">
                    Phone
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900">
                    +1 555-555-5555
                  </dd>
                </div>
                <div class="sm:col-span-2">
                  <dt class="text-sm font-medium text-gray-500">
                    About
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900">
                    Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                  </dd>
                </div>
                <div class="sm:col-span-2">
                  <dt class="text-sm font-medium text-gray-500">
                    Attachments
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900">
                    <ul class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                      <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                        <div class="flex items-center flex-1 w-0">
                          <!-- Heroicon name: solid/paper-clip -->
                          <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                          </svg>
                          <span class="flex-1 w-0 ml-2 truncate">
                            resume_back_end_developer.pdf
                          </span>
                        </div>
                        <div class="flex-shrink-0 ml-4">
                          <a href="#" class="hover:text-blue-500 font-medium text-blue-600">
                            Download
                          </a>
                        </div>
                      </li>
                      <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                        <div class="flex items-center flex-1 w-0">
                          <!-- Heroicon name: solid/paper-clip -->
                          <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                          </svg>
                          <span class="flex-1 w-0 ml-2 truncate">
                            coverletter_back_end_developer.pdf
                          </span>
                        </div>
                        <div class="flex-shrink-0 ml-4">
                          <a href="#" class="hover:text-blue-500 font-medium text-blue-600">
                            Download
                          </a>
                        </div>
                      </li>
                    </ul>
                  </dd>
                </div>
              </dl>
            </div>
            <div>
              <a href="#" class="bg-gray-50 hover:text-gray-700 sm:rounded-b-lg block px-4 py-4 text-sm font-medium text-center text-gray-500">Read full application</a>
            </div>
          </div>
        </section>

        <!-- Comments-->
        <section aria-labelledby="notes-title">
          <div class="sm:rounded-lg sm:overflow-hidden bg-white shadow">
            <div class="divide-y divide-gray-200">
              <div class="sm:px-6 px-4 py-5">
                <h2 id="notes-title" class="text-lg font-medium text-gray-900">Notes</h2>
              </div>
              <div class="sm:px-6 px-4 py-6">
                <ul class="space-y-8">
                  <li>
                    <div class="flex space-x-3">
                      <div class="flex-shrink-0">
                        <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixqx=gIpjRQOOOG&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                      </div>
                      <div>
                        <div class="text-sm">
                          <a href="#" class="font-medium text-gray-900">Leslie Alexander</a>
                        </div>
                        <div class="mt-1 text-sm text-gray-700">
                          <p>Ducimus quas delectus ad maxime totam doloribus reiciendis ex. Tempore dolorem maiores. Similique voluptatibus tempore non ut.</p>
                        </div>
                        <div class="mt-2 space-x-2 text-sm">
                          <span class="font-medium text-gray-500">4d ago</span>
                          <span class="font-medium text-gray-500">&middot;</span>
                          <button type="button" class="font-medium text-gray-900">Reply</button>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="flex space-x-3">
                      <div class="flex-shrink-0">
                        <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixqx=gIpjRQOOOG&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                      </div>
                      <div>
                        <div class="text-sm">
                          <a href="#" class="font-medium text-gray-900">Michael Foster</a>
                        </div>
                        <div class="mt-1 text-sm text-gray-700">
                          <p>Et ut autem. Voluptatem eum dolores sint necessitatibus quos. Quis eum qui dolorem accusantium voluptas voluptatem ipsum. Quo facere iusto quia accusamus veniam id explicabo et aut.</p>
                        </div>
                        <div class="mt-2 space-x-2 text-sm">
                          <span class="font-medium text-gray-500">4d ago</span>
                          <span class="font-medium text-gray-500">&middot;</span>
                          <button type="button" class="font-medium text-gray-900">Reply</button>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="flex space-x-3">
                      <div class="flex-shrink-0">
                        <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixqx=gIpjRQOOOG&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                      </div>
                      <div>
                        <div class="text-sm">
                          <a href="#" class="font-medium text-gray-900">Dries Vincent</a>
                        </div>
                        <div class="mt-1 text-sm text-gray-700">
                          <p>Expedita consequatur sit ea voluptas quo ipsam recusandae. Ab sint et voluptatem repudiandae voluptatem et eveniet. Nihil quas consequatur autem. Perferendis rerum et.</p>
                        </div>
                        <div class="mt-2 space-x-2 text-sm">
                          <span class="font-medium text-gray-500">4d ago</span>
                          <span class="font-medium text-gray-500">&middot;</span>
                          <button type="button" class="font-medium text-gray-900">Reply</button>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="bg-gray-50 sm:px-6 px-4 py-6">
              <div class="flex space-x-3">
                <div class="flex-shrink-0">
                  <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
                </div>
                <div class="flex-1 min-w-0">
                  <form action="#">
                    <div>
                      <label for="comment" class="sr-only">About</label>
                      <textarea id="comment" name="comment" rows="3" class="focus:ring-blue-500 focus:border-blue-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm" placeholder="Add a note"></textarea>
                    </div>
                    <div class="flex items-center justify-between mt-3">
                      <a href="#" class="group hover:text-gray-900 inline-flex items-start space-x-2 text-sm text-gray-500">
                        <!-- Heroicon name: solid/question-mark-circle -->
                        <svg class="group-hover:text-gray-500 flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                        </svg>
                        <span>
                          Some HTML is okay.
                        </span>
                      </a>
                      <button type="submit" class="hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm">
                        Comment
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
        <div class="sm:rounded-lg sm:px-6 px-4 py-5 bg-white shadow">
          <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Timeline</h2>

          <!-- Activity Feed -->
          <div class="flow-root mt-6">
            <ul class="-mb-8">
              <li>
                <div class="relative pb-8">
                  <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                  <div class="relative flex space-x-3">
                    <div>
                      <span class="ring-8 ring-white flex items-center justify-center w-8 h-8 bg-gray-400 rounded-full">
                        <!-- Heroicon name: solid/user -->
                        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </div>
                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                      <div>
                        <p class="text-sm text-gray-500">Applied to <a href="#" class="font-medium text-gray-900">Front End Developer</a></p>
                      </div>
                      <div class="whitespace-nowrap text-sm text-right text-gray-500">
                        <time datetime="2020-09-20">Sep 20</time>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="relative pb-8">
                  <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                  <div class="relative flex space-x-3">
                    <div>
                      <span class="ring-8 ring-white flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full">
                        <!-- Heroicon name: solid/thumb-up -->
                        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                        </svg>
                      </span>
                    </div>
                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                      <div>
                        <p class="text-sm text-gray-500">Advanced to phone screening by <a href="#" class="font-medium text-gray-900">Bethany Blake</a></p>
                      </div>
                      <div class="whitespace-nowrap text-sm text-right text-gray-500">
                        <time datetime="2020-09-22">Sep 22</time>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="relative pb-8">
                  <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                  <div class="relative flex space-x-3">
                    <div>
                      <span class="ring-8 ring-white flex items-center justify-center w-8 h-8 bg-green-500 rounded-full">
                        <!-- Heroicon name: solid/check -->
                        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </div>
                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                      <div>
                        <p class="text-sm text-gray-500">Completed phone screening with <a href="#" class="font-medium text-gray-900">Martha Gardner</a></p>
                      </div>
                      <div class="whitespace-nowrap text-sm text-right text-gray-500">
                        <time datetime="2020-09-28">Sep 28</time>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="relative pb-8">
                  <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                  <div class="relative flex space-x-3">
                    <div>
                      <span class="ring-8 ring-white flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full">
                        <!-- Heroicon name: solid/thumb-up -->
                        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                        </svg>
                      </span>
                    </div>
                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                      <div>
                        <p class="text-sm text-gray-500">Advanced to interview by <a href="#" class="font-medium text-gray-900">Bethany Blake</a></p>
                      </div>
                      <div class="whitespace-nowrap text-sm text-right text-gray-500">
                        <time datetime="2020-09-30">Sep 30</time>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="relative pb-8">
                  <div class="relative flex space-x-3">
                    <div>
                      <span class="ring-8 ring-white flex items-center justify-center w-8 h-8 bg-green-500 rounded-full">
                        <!-- Heroicon name: solid/check -->
                        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </div>
                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                      <div>
                        <p class="text-sm text-gray-500">Completed interview with <a href="#" class="font-medium text-gray-900">Katherine Snyder</a></p>
                      </div>
                      <div class="whitespace-nowrap text-sm text-right text-gray-500">
                        <time datetime="2020-10-04">Oct 4</time>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="justify-stretch flex flex-col mt-6">
            <button type="button" class="hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm">
              Advance to offer
            </button>
          </div>
        </div>
      </section>
    </div>
  </main>
</div>

    
</body>
</html>