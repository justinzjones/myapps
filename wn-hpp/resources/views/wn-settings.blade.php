<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="shadow sm:rounded-md sm:overflow-hidden" x-data="{ tab: 'merchant' }">
                <div class="py-0 space-y-6 bg-white">
                    <div class="px-6 py-4 bg-white lg:px-8">
                        <!-- Tabs -->
                        <div class="lg:hidden">
                            <label for="selected-tab" class="sr-only">Select a tab</label>
                            <select @change="tab = $event.target.value" x-model="tab" id="selected-tab"
                                name="selected-tab"
                                class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                <option value="merchant">Merchantz</option>
                                <option value="psps">PSPs</option>
                                <option value="payment_methods">Payment methods</option>
                                <option>Billing</option>
                                <option>Team Members</option>
                            </select>
                        </div>
                        <div class="hidden lg:block">
                            <div class="border-b border-gray-200">
                                <nav class="flex -mb-px space-x-8">
                                    <!-- Current: "border-purple-500 text-purple-600", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                                    <a href="#" @click.prevent="tab = 'merchant'"
                                        class="px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent whitespace-nowrap hover:border-gray-300 hover:text-gray-700"
                                        x-bind:class="{ 'hover:border-gray-300 hover:text-gray-700 text-gray-500': tab !== 'merchant', 'border-indigo-500 text-indigo-600': tab === 'merchant' }">
                                        Merchant
                                    </a>


                                    <a href="#" @click.prevent="tab = 'psps'"
                                        class="px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent whitespace-nowrap hover:border-gray-300 hover:text-gray-700"
                                        x-bind:class="{ 'hover:border-gray-300 hover:text-gray-700 text-gray-500': tab !== 'psps', 'border-indigo-500 text-indigo-600': tab === 'psps' }">
                                        PSPs
                                    </a>

                                    <a href="#" @click.prevent="tab = 'payment_methods'"
                                        class="px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent whitespace-nowrap hover:border-gray-300 hover:text-gray-700"
                                        x-bind:class="{ 'hover:border-gray-300 hover:text-gray-700 text-gray-500': tab !== 'payment_methods', 'border-indigo-500 text-indigo-600': tab === 'payment_methods' }">
                                        Payment methods
                                    </a>

                                    <a href="#" @click.prevent="tab = 'routing'"
                                        class="px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent whitespace-nowrap hover:border-gray-300 hover:text-gray-700"
                                        x-bind:class="{ 'hover:border-gray-300 hover:text-gray-700 text-gray-500': tab !== 'routing', 'border-indigo-500 text-indigo-600': tab === 'routing' }">
                                        Routing
                                    </a>

                                    <a href="#" @click.prevent="tab = 'hpp'"
                                        class="px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent whitespace-nowrap hover:border-gray-300 hover:text-gray-700"
                                        x-bind:class="{ 'hover:border-gray-300 hover:text-gray-700 text-gray-500': tab !== 'hpp', 'border-indigo-500 text-indigo-600': tab === 'hpp' }">
                                        HPP
                                    </a>

                                    <a href="#"
                                        class="px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-700 whitespace-nowrap">
                                        Billing
                                    </a>

                                    <a href="#"
                                        class="px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-700 whitespace-nowrap">
                                        Team Members
                                    </a>
                                </nav>
                            </div>
                        </div>

                        <!-- Description list with inline editing -->
                        <!-- <p x-text="tab"></p> -->


                    </div>

                    <div class="">
                        <form action="#" method="POST" x-show="tab === 'merchant'">

                            <div class="flex-1 px-4">
                                <div class="relative max-w-6xl mx-auto ">
                                    <div class="pb-8 ">

                                        <div class="px-4 sm:px-6 md:px-0">


                                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                                <div class="md:col-span-1">
                                                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                                                        Merchant Details</h3>
                                                    <p class="mt-1 text-sm text-gray-500">
                                                        This information will be displayed publicly so be
                                                        careful what you share.
                                                    </p>
                                                </div>
                                                <div class="mt-5 space-y-6 md:mt-0 md:col-span-2">
                                                    <div class="space-y-6">

                                                        <div class="grid grid-cols-6 gap-6">

                                                            <div class="col-span-6 sm:col-span-3">
                                                                <label for="name"
                                                                    class="block text-sm font-medium text-gray-700">Name</label>
                                                                <input id="name" name="name" autocomplete="name"
                                                                    class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-3"></div>

                                                            <div class="col-span-6 sm:col-span-3">
                                                                <label for="first-name"
                                                                    class="block text-sm font-medium text-gray-700">Username</label>
                                                                <input type="text" name="first-name" id="first-name"
                                                                    autocomplete="given-name"
                                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-3">
                                                                <label for="last-name"
                                                                    class="block text-sm font-medium text-gray-700">Password</label>
                                                                <input type="text" name="last-name" id="last-name"
                                                                    autocomplete="family-name"
                                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-4">
                                                                <label for="email-address"
                                                                    class="block text-sm font-medium text-gray-700">Email
                                                                    address</label>
                                                                <input type="text" name="email-address"
                                                                    id="email-address" autocomplete="email"
                                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-3">
                                                                <label for="country"
                                                                    class="block text-sm font-medium text-gray-700">Language</label>
                                                                <select id="language" name="language"
                                                                    autocomplete="language-name"
                                                                    class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                    <option>United States</option>
                                                                    <option>Canada</option>
                                                                    <option>Mexico</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-3">
                                                                <label for="country"
                                                                    class="block text-sm font-medium text-gray-700">Country</label>
                                                                <select id="country" name="country"
                                                                    autocomplete="country-name"
                                                                    class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                    <option>United States</option>
                                                                    <option>Canada</option>
                                                                    <option>Mexico</option>
                                                                </select>
                                                            </div>

                                                        </div>

                                                        <div class="grid grid-cols-3 gap-6">
                                                            <div class="col-span-3 sm:col-span-2">
                                                                <label for="company-website"
                                                                    class="block text-sm font-medium text-gray-700">
                                                                    Website
                                                                </label>
                                                                <div class="flex mt-1 rounded-md shadow-sm">
                                                                    <span
                                                                        class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                                                        http://
                                                                    </span>
                                                                    <input type="text" name="company-website"
                                                                        id="company-website"
                                                                        class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm"
                                                                        placeholder="www.example.com">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <label for="about"
                                                                class="block text-sm font-medium text-gray-700">
                                                                About
                                                            </label>
                                                            <div class="mt-1">
                                                                <textarea id="about" name="about" rows="3"
                                                                    class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                                    placeholder="you@example.com"></textarea>
                                                            </div>
                                                            <p class="mt-2 text-sm text-gray-500">
                                                                Brief description for your profile. URLs are
                                                                hyperlinked.
                                                            </p>
                                                        </div>

                                                        <div>
                                                            <label class="block text-sm font-medium text-gray-700">
                                                                Photo
                                                            </label>
                                                            <div class="flex items-center mt-1 space-x-5">
                                                                <span
                                                                    class="inline-block w-12 h-12 overflow-hidden bg-gray-100 rounded-full">
                                                                    <svg class="w-full h-full text-gray-300"
                                                                        fill="currentColor" viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <button type="button"
                                                                    class="px-3 py-2 text-sm font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                    Change
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <label class="block text-sm font-medium text-gray-700">
                                                                Cover photos
                                                            </label>
                                                            <div
                                                                class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                                                                <div class="space-y-1 text-center">
                                                                    <svg class="w-12 h-12 mx-auto text-gray-400"
                                                                        stroke="currentColor" fill="none"
                                                                        viewBox="0 0 48 48" aria-hidden="true">
                                                                        <path
                                                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    <div class="flex text-sm text-gray-600">
                                                                        <label for="file-upload"
                                                                            class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                            <span>Upload a file</span>
                                                                            <input id="file-upload" name="file-upload"
                                                                                type="file" class="sr-only">
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
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="px-8 py-3 text-right bg-gray-50 sm:px-12">
                                <button type="button"
                                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>

                        </form>


                        <form action="#" method="POST" x-show="tab === 'psps'">

                            <div class="flex-1 px-4 ">
                                <div class="relative max-w-6xl mx-auto ">
                                    <div class="pb-8 ">

                                        <div class="px-4 sm:px-6 md:px-0">


                                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                                <div class="md:col-span-1">
                                                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                                                        Payment service providers</h3>
                                                    <p class="mt-1 text-sm text-gray-500">
                                                        Administer the PSPs that will be used for processing
                                                        transactions.
                                                    </p>
                                                </div>
                                                <div class="mt-5 space-y-6 md:mt-0 md:col-span-2">
                                                    <form class="space-y-6" action="#" method="POST">

                                                        <div class="block sm:flex">

                                                            <div class="inline-block col-span-6 sm:col-span-3">
                                                                <div class="mt-3 mr-3">
                                                                    <button
                                                                        @click="$dispatch('add-psp', { open: true })"
                                                                        type="button"
                                                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-indigo-700 bg-white border border-transparent border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                        <!-- Heroicon name: solid/plus -->
                                                                        <svg class="w-5 h-5 mr-2 -ml-1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                        add Payment service provider
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="mt-3 mr-3">
                                                                <input type="file" id="file_upload"
                                                                    class="hidden" />
                                                                <label for="file_upload"
                                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-indigo-700 bg-white border border-transparent border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                    <!-- Heroicon name: solid/plus -->
                                                                    <svg class="w-5 h-5 mr-2 -ml-1"
                                                                        fill="currentColor" aria-hidden="true"
                                                                        viewBox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" />
                                                                    </svg>
                                                                    Upload file
                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="grid grid-cols-6 gap-6">

                                                            <div class="col-span-6">
                                                                <div class="mt-3">
                                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                                    <div
                                                                        class="overflow-hidden bg-white sm:rounded-md">
                                                                        <ul role="list"
                                                                            class="divide-y divide-gray-200">
                                                                            <li
                                                                                @click="$dispatch('edit-psp', { open: true })">
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        Global
                                                                                                        Payments
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Acquirer</span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            Global
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            MX
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            US
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <img class="h-6 w-18 sm:md-0"
                                                                                                            src="https://upload.wikimedia.org/wikipedia/commons/1/10/Global_Payments_Inc._logo.svg"
                                                                                                            alt="">
                                                                                                        <!-- <svg class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                  <svg  class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" width="60" height="25"><title>Stripe logo</title><path fill="var(--userLogoColor, #0A2540)" d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z" fill-rule="evenodd"></path></svg> -->
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                                                            clip-rule="evenodd" />
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        Stripe
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Payment
                                                                                                            facilitator
                                                                                                            (Payfac)</span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            Global
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            US
                                                                                                        </span>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <img class="h-12 -ml-2 w-18 sm:md-0"
                                                                                                            src="https://cdn.brandfolder.io/KGT2DTA4/at/8vbr8k4mr5xjwk4hxq4t9vs/Stripe_wordmark_-_blurple.svg"
                                                                                                            alt="">
                                                                                                        <!-- <svg class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                  <svg  class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" width="60" height="25"><title>Stripe logo</title><path fill="var(--userLogoColor, #0A2540)" d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z" fill-rule="evenodd"></path></svg> -->
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                                                            clip-rule="evenodd" />
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        Adyen
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Payment
                                                                                                            facilitator
                                                                                                            (Payfac)</span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            Global
                                                                                                        </span>

                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <img class="h-8 w-17 sm:md-0"
                                                                                                            src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Adyen_Corporate_Logo.svg"
                                                                                                            alt="">
                                                                                                        <!-- <svg class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                  <svg  class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" width="60" height="25"><title>Stripe logo</title><path fill="var(--userLogoColor, #0A2540)" d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z" fill-rule="evenodd"></path></svg> -->
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                                                            clip-rule="evenodd" />
                                                                                                        </svg>
                                                                                                    </div>

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        Ebanx
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Payment
                                                                                                            gateway</span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            MX
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <img class="h-5 w-18 sm:md-0"
                                                                                                            src="https://seeklogo.com/images/E/ebanx-logo-923DA3225C-seeklogo.com.png"
                                                                                                            alt="">

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>


                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>


                                                        </div>


                                                    </form>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>

                        <form action="#" method="POST" x-show="tab === 'payment_methods'">

                            <div class="flex-1 px-4 ">
                                <div class="relative max-w-6xl mx-auto ">
                                    <div class="pb-8 ">

                                        <div class="px-4 sm:px-6 md:px-0">


                                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                                <div class="md:col-span-1">
                                                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                                                        Payment methods</h3>
                                                    <p class="mt-1 text-sm text-gray-500">
                                                        Administer the methods that will be offered to
                                                        customers.
                                                    </p>
                                                </div>
                                                <div class="mt-5 space-y-6 md:mt-0 md:col-span-2">
                                                    <form class="space-y-6" action="#" method="POST">

                                                        <div class="grid grid-cols-3">

                                                            <div class="col-span-6 sm:col-span-3">
                                                                <div class="mt-3">
                                                                    <button
                                                                        @click="$dispatch('add-psp', { open: true })"
                                                                        type="button" type="button"
                                                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-indigo-700 bg-white border border-transparent border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                        <!-- Heroicon name: solid/plus -->
                                                                        <svg class="w-5 h-5 mr-2 -ml-1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                        add Payment method
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-3">




                                                            </div>


                                                        </div>
                                                        <div class="grid grid-cols-6 gap-6">

                                                            <div class="col-span-6">
                                                                <div class="mt-3">
                                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                                    <div
                                                                        class="overflow-hidden bg-white sm:rounded-md">
                                                                        <ul role="list"
                                                                            class="divide-y divide-gray-200">
                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        Cards
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Credit
                                                                                                            &
                                                                                                            Debit
                                                                                                            cards</span>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <img class="h-6 mr-1 rounded-full w-18 sm:md-0"
                                                                                                            src="https://checkoutshopper-live.adyen.com/checkoutshopper/images/logos/mc.svg"
                                                                                                            alt="">
                                                                                                        <img class="h-6 mr-1 rounded-full w-18 sm:md-0"
                                                                                                            src="https://checkoutshopper-live.adyen.com/checkoutshopper/images/logos/visa.svg"
                                                                                                            alt="">
                                                                                                        <img class="h-6 mr-1 rounded-full w-18 sm:md-0"
                                                                                                            src="https://checkoutshopper-live.adyen.com/checkoutshopper/images/logos/diners.svg"
                                                                                                            alt="">
                                                                                                        <img class="h-6 mr-1 rounded-full w-18 sm:md-0"
                                                                                                            src="https://checkoutshopper-live.adyen.com/checkoutshopper/images/logos/amex.svg"
                                                                                                            alt="">
                                                                                                        <img class="h-6 mr-1 rounded-full w-18 sm:md-0"
                                                                                                            src="https://checkoutshopper-live.adyen.com/checkoutshopper/images/logos/cup.svg"
                                                                                                            alt="">

                                                                                                        <!-- <svg  class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" width="60" height="25"><title>Stripe logo</title><path fill="var(--userLogoColor, #0A2540)" d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z" fill-rule="evenodd"></path></svg>
                                                  <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                                  </svg> -->
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        Card
                                                                                                        wallets
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Credit
                                                                                                            &
                                                                                                            Debit
                                                                                                            cards
                                                                                                            via
                                                                                                            Card
                                                                                                            wallets</span>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <span
                                                                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium bg-gray-200 text-gray-700">
                                                                                                            2
                                                                                                            Card
                                                                                                            wallets
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        Bank
                                                                                                        Transer
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Direct
                                                                                                            Bank
                                                                                                            to
                                                                                                            Bank
                                                                                                            payments</span>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <span
                                                                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium bg-gray-200 text-gray-700">
                                                                                                            2
                                                                                                            Bank
                                                                                                            Transfers
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        APMs</p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Alternative
                                                                                                            payment
                                                                                                            methods</span>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <span
                                                                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium bg-gray-200 text-gray-700">
                                                                                                            3
                                                                                                            APMs
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>


                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>



                                                        </div>










                                                    </form>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>



                        <form action="#" method="POST" x-show="tab === 'hpp'">

                            <div class="flex-1 px-4 ">
                                <div class="relative max-w-6xl mx-auto ">
                                    <div class="pb-8 ">

                                        <div class="px-4 sm:px-6 md:px-0">


                                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                                <div class="md:col-span-1">
                                                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                                                        Hosted payment page</h3>
                                                    <p class="mt-1 text-sm text-gray-500">
                                                        Administer the Hosted payment page configurations.
                                                    </p>
                                                </div>
                                                <div class="mt-5 space-y-6 md:mt-0 md:col-span-2">
                                                    <form class="space-y-6" action="#" method="POST">

                                                        <div class="block sm:flex">

                                                            <div class="inline-block col-span-6 sm:col-span-3">
                                                                <div class="mt-3 mr-3">
                                                                    <button
                                                                        @click="$dispatch('add-psp', { open: true })"
                                                                        type="button"
                                                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-indigo-700 bg-white border border-transparent border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                        <!-- Heroicon name: solid/plus -->

                                                                        <svg class="w-5 h-5 mr-2 -ml-1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="w-6 h-6" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                                            stroke-width="2">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                        </svg>
                                                                        view Hosted payment page
                                                                    </button>
                                                                </div>
                                                            </div>



                                                        </div>

                                                        <div class="grid grid-cols-6 gap-6">

                                                            <div class="col-span-6">
                                                                <div class="mt-3">
                                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                                    <div
                                                                        class="overflow-hidden bg-white sm:rounded-md">
                                                                        <ul role="list"
                                                                            class="divide-y divide-gray-200">


                                                                            <li>
                                                                                <a href="#" class="block">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <label
                                                                                                        class="block text-sm font-medium text-gray-700">
                                                                                                        Logo
                                                                                                    </label>
                                                                                                    <div
                                                                                                        class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md hover:bg-gray-50">
                                                                                                        <div
                                                                                                            class="space-y-1 text-center">
                                                                                                            <svg class="w-12 h-12 mx-auto text-gray-400"
                                                                                                                stroke="currentColor"
                                                                                                                fill="none"
                                                                                                                viewBox="0 0 48 48"
                                                                                                                aria-hidden="true">
                                                                                                                <path
                                                                                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                                                                                    stroke-width="2"
                                                                                                                    stroke-linecap="round"
                                                                                                                    stroke-linejoin="round">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                            <div
                                                                                                                class="flex text-sm text-gray-600">
                                                                                                                <label
                                                                                                                    for="file-upload"
                                                                                                                    class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                                                                    <span>Upload
                                                                                                                        a
                                                                                                                        file</span>
                                                                                                                    <input
                                                                                                                        id="file-upload"
                                                                                                                        name="file-upload"
                                                                                                                        type="file"
                                                                                                                        class="sr-only">
                                                                                                                </label>
                                                                                                                <p
                                                                                                                    class="pl-1">
                                                                                                                    or
                                                                                                                    drag
                                                                                                                    and
                                                                                                                    drop
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <p
                                                                                                                class="text-xs text-gray-500">
                                                                                                                PNG,
                                                                                                                JPG,
                                                                                                                GIF
                                                                                                                up
                                                                                                                to
                                                                                                                10MB
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <label
                                                                                                        class="block text-sm font-medium text-gray-700">
                                                                                                        Favicon
                                                                                                    </label>
                                                                                                    <div
                                                                                                        class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md hover:bg-gray-50">
                                                                                                        <div
                                                                                                            class="space-y-1 text-center">
                                                                                                            <svg class="w-12 h-12 mx-auto text-gray-400"
                                                                                                                stroke="currentColor"
                                                                                                                fill="none"
                                                                                                                viewBox="0 0 48 48"
                                                                                                                aria-hidden="true">
                                                                                                                <path
                                                                                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                                                                                    stroke-width="2"
                                                                                                                    stroke-linecap="round"
                                                                                                                    stroke-linejoin="round">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                            <div
                                                                                                                class="flex text-sm text-gray-600">
                                                                                                                <label
                                                                                                                    for="file-upload"
                                                                                                                    class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                                                                    <span>Upload
                                                                                                                        a
                                                                                                                        file</span>
                                                                                                                    <input
                                                                                                                        id="file-upload"
                                                                                                                        name="file-upload"
                                                                                                                        type="file"
                                                                                                                        class="sr-only">
                                                                                                                </label>
                                                                                                                <p
                                                                                                                    class="pl-1">
                                                                                                                    or
                                                                                                                    drag
                                                                                                                    and
                                                                                                                    drop
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <p
                                                                                                                class="text-xs text-gray-500">
                                                                                                                PNG,
                                                                                                                JPG,
                                                                                                                GIF
                                                                                                                up
                                                                                                                to
                                                                                                                50kB
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>


                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li
                                                                                @click="$dispatch('edit-logo', { open: true })">
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        Global
                                                                                                        Paymentz
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Acquirer</span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            Global
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            MX
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            US
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <img class="h-6 w-18 sm:md-0"
                                                                                                            src="https://upload.wikimedia.org/wikipedia/commons/1/10/Global_Payments_Inc._logo.svg"
                                                                                                            alt="">
                                                                                                        <!-- <svg class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                  <svg  class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" width="60" height="25"><title>Stripe logo</title><path fill="var(--userLogoColor, #0A2540)" d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z" fill-rule="evenodd"></path></svg> -->
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                                                            clip-rule="evenodd" />
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        Stripe
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Payment
                                                                                                            facilitator
                                                                                                            (Payfac)</span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            Global
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            US
                                                                                                        </span>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <img class="h-12 -ml-2 w-18 sm:md-0"
                                                                                                            src="https://cdn.brandfolder.io/KGT2DTA4/at/8vbr8k4mr5xjwk4hxq4t9vs/Stripe_wordmark_-_blurple.svg"
                                                                                                            alt="">
                                                                                                        <!-- <svg class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                  <svg  class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" width="60" height="25"><title>Stripe logo</title><path fill="var(--userLogoColor, #0A2540)" d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z" fill-rule="evenodd"></path></svg> -->
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                                                            clip-rule="evenodd" />
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        Adyen
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Payment
                                                                                                            facilitator
                                                                                                            (Payfac)</span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->
                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            Global
                                                                                                        </span>

                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <img class="h-8 w-17 sm:md-0"
                                                                                                            src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Adyen_Corporate_Logo.svg"
                                                                                                            alt="">
                                                                                                        <!-- <svg class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                  <svg  class="w-12 h-12 rounded-full" xmlns="http://www.w3.org/2000/svg" width="60" height="25"><title>Stripe logo</title><path fill="var(--userLogoColor, #0A2540)" d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z" fill-rule="evenodd"></path></svg> -->
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                                                            clip-rule="evenodd" />
                                                                                                        </svg>
                                                                                                    </div>

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block hover:bg-gray-50">
                                                                                    <div
                                                                                        class="flex items-center px-4 py-4 sm:px-6">
                                                                                        <div
                                                                                            class="flex items-center flex-1 min-w-0">
                                                                                            <div
                                                                                                class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="text-base font-medium text-gray-600 truncate">
                                                                                                        Ebanx
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                                                            fill="currentColor"
                                                                                                            viewBox="0 0 20 20"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                                                                                                                clip-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        <span
                                                                                                            class="truncate">Payment
                                                                                                            gateway</span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="flex items-center mt-2 text-sm text-gray-500">
                                                                                                        <!-- Heroicon name: solid/mail -->

                                                                                                        <span
                                                                                                            class="inline-flex mr-1 items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                                                                            MX
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="flex items-center">
                                                                                                    <div
                                                                                                        class="flex items-center flex-shrink-0">
                                                                                                        <img class="h-5 w-18 sm:md-0"
                                                                                                            src="https://seeklogo.com/images/E/ebanx-logo-923DA3225C-seeklogo.com.png"
                                                                                                            alt="">

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <!-- Heroicon name: solid/chevron-right -->
                                                                                            <svg class="w-5 h-5 text-gray-400"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </div>

                                                                                    </div>
                                                                                </a>
                                                                            </li>


                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>


                                                        </div>


                                                    </form>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>



                    </div>




                </div>
                <!-- all MODALS are BELOW this point -->

                <!-- add psp START -->
                <div x-data="{ open: false }" @add-psp.window="open = $event.detail.open"
                    @keydown.window.escape="open = false" x-init="$watch( & quot; open & quot;, o => !o & amp; & amp; window.setTimeout(() => (open = false), 1000))" x-show="open" x-ref="dialog"
                    class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" aria-modal="true">
                    <div class="absolute inset-0">

                        <div x-show="open" x-transition:enter="ease-in-out duration-500"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            x-description="Background overlay, show/hide based on slide-over state."
                            class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"
                            @click="open = false" aria-hidden="true">
                        </div>

                        <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">

                            <div x-show="open"
                                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                                class="w-screen max-w-md"
                                x-description="Slide-over panel, show/hide based on slide-over state.">
                                <form x-show="tab === 'psps'"
                                    class="flex flex-col h-full bg-white divide-y divide-gray-200 shadow-xl">
                                    <div class="flex-1 h-0 overflow-y-auto">
                                        <div class="px-4 py-6 bg-gray-600 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                                    add Payment service provider
                                                </h2>
                                                <div class="flex items-center ml-3 h-7">
                                                    <button type="button"
                                                        class="text-indigo-200 bg-gray-600 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                                        @click="open = false">
                                                        <span class="sr-only">Close panel</span>
                                                        <svg class="w-6 h-6" x-description="Heroicon name: outline/x"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-1">
                                                <p class="text-sm text-gray-300">
                                                    Select a PSP from the list and provide credentials.
                                                </p>
                                                <!-- <p x-text="tab"></p> -->
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-between flex-1">
                                            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                                                <div class="pt-6 pb-5 space-y-6">

                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                    <div>
                                                        <label for="location"
                                                            class="block text-sm font-medium text-gray-700">Payment
                                                            service provider</label>
                                                        <select id="location" name="location"
                                                            class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <!-- <option class="text-gray-500" selected>select</option> -->
                                                            <option class="text-gray-500 " value=""
                                                                x-bind="selected">Select...</option>
                                                            <option>Stripe</option>
                                                            <option>First Direct</option>
                                                            <option>Global Payments</option>
                                                            <option>Safety Pay</option>
                                                        </select>

                                                    </div>


                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                    <div>
                                                        <label id="listbox-label"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Country
                                                        </label>
                                                        <div x-data="dropdown" class="relative mt-1">
                                                            <button @click="toggle" @click.away="close"
                                                                type="button"
                                                                class="relative w-full py-2 pl-3 pr-10 text-left bg-white border border-gray-300 rounded-md shadow-sm cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                                aria-haspopup="listbox" aria-expanded="true"
                                                                aria-labelledby="listbox-label">
                                                                <div class="flex items-center">

                                                                    <span class="block truncate">
                                                                        Select...
                                                                    </span>
                                                                </div>
                                                                <span
                                                                    class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                                                    <!-- Heroicon name: solid/selector -->
                                                                    <svg class="w-5 h-5 text-gray-400"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                </span>
                                                            </button>

                                                            <!--
      Select popover, show/hide based on select state.

      Entering: ""
        From: ""
        To: ""
      Leaving: "transition ease-in duration-100"
        From: "opacity-100"
        To: "opacity-0"
    -->
                                                            <ul x-show="open"
                                                                class="absolute z-10 w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                                                                tabindex="-1" role="listbox"
                                                                aria-labelledby="listbox-label"
                                                                aria-activedescendant="listbox-option-3">
                                                                <!--
        Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

        Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
      -->
                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->

                                                                        <span class="block ml-0 font-normal truncate">
                                                                            Global
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9 hover:text-white hover:bg-indigo-600"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->

                                                                        <span class="block ml-0 font-normal truncate">
                                                                            Canada
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>


                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->

                                                                        <span class="block ml-0 font-normal truncate">
                                                                            Mexico
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->

                                                                        <span class="block ml-0 font-normal truncate">
                                                                            UK
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->

                                                                        <span class="block ml-0 font-normal truncate">
                                                                            USA
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <!-- More items... -->
                                                            </ul>
                                                        </div>
                                                        <p
                                                            class="flex mt-2 text-xs font-light text-gray-500 justify-left">
                                                            <!-- Heroicon name: solid/lock-closed -->
                                                            <svg class="w-5 h-5 text-gray-400 mr-1.5"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Unless specified 'Universal' credentials will be
                                                            used for all Countries for this PSP.
                                                        </p>
                                                    </div>


                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Merchant ID
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Username
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Password
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- <div class="pt-4 pb-6">
                              <div class="flex text-sm">
                                <a href="#" class="inline-flex items-center font-medium text-indigo-600 group hover:text-indigo-900">
                                  <svg class="w-5 h-5 text-indigo-500 group-hover:text-indigo-900" x-description="Heroicon name: solid/link" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                                  </svg>
                                  <span class="ml-2">
                                    Copy link
                                  </span>
                                </a>
                              </div>
                              <div class="flex mt-4 text-sm">
                                <a href="#" class="inline-flex items-center text-gray-500 group hover:text-gray-900">
                                  <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: solid/question-mark-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                  </svg>
                                  <span class="ml-2">
                                    Learn more about sharing
                                  </span>
                                </a>
                              </div>
                            </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end flex-shrink-0 px-4 py-4">
                                        <button type="button"
                                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            @click="open = false">
                                            Cancel
                                        </button>
                                        <button type="submit"
                                            class="inline-flex justify-center px-4 py-2 ml-4 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </form>

                                <form x-show="tab === 'payment_methods'"
                                    class="flex flex-col h-full bg-white divide-y divide-gray-200 shadow-xl">
                                    <div class="flex-1 h-0 overflow-y-auto">
                                        <div class="px-4 py-6 bg-gray-600 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                                    add Payment method
                                                </h2>
                                                <div class="flex items-center ml-3 h-7">
                                                    <button type="button"
                                                        class="text-indigo-200 bg-gray-600 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                                        @click="open = false">
                                                        <span class="sr-only">Close panel</span>
                                                        <svg class="w-6 h-6" x-description="Heroicon name: outline/x"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-1">
                                                <p class="text-sm text-gray-300">
                                                    Select a Payment method from the list.
                                                </p>
                                                <!-- <p x-text="tab"></p> -->
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-between flex-1">
                                            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                                                <div class="pt-6 pb-5 space-y-6">

                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                    <div>
                                                        <label for="location"
                                                            class="block text-sm font-medium text-gray-700">Select
                                                            Country</label>
                                                        <select id="location" name="location"
                                                            class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option selected>Global</option>
                                                            <option>United States</option>
                                                            <option>Canada</option>
                                                            <option>Mexico</option>
                                                        </select>
                                                    </div>




                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Project name
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label for="description"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Description
                                                        </label>
                                                        <div class="mt-1">
                                                            <textarea id="description" name="description" rows="4"
                                                                class="block w-full border border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3 class="text-sm font-medium text-gray-900">
                                                            Team Members
                                                        </h3>
                                                        <div class="mt-2">
                                                            <div class="flex space-x-2">

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Tom Cook">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Whitney Francis">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Leonard Krasner">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Floyd Miles">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Emily Selman">
                                                                </a>

                                                                <button type="button"
                                                                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-gray-400 bg-white border-2 border-gray-200 border-dashed rounded-full hover:text-gray-500 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                    <span class="sr-only">Add team
                                                                        member</span>
                                                                    <svg class="w-5 h-5"
                                                                        x-description="Heroicon name: solid/plus-sm"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <fieldset>
                                                        <legend class="text-sm font-medium text-gray-900">
                                                            Privacy
                                                        </legend>
                                                        <div class="mt-2 space-y-5">
                                                            <div class="relative flex items-start">
                                                                <div class="absolute flex items-center h-5">
                                                                    <input id="privacy-public" name="privacy"
                                                                        aria-describedby="privacy-public-description"
                                                                        type="radio"
                                                                        class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                                                        checked="">
                                                                </div>
                                                                <div class="text-sm pl-7">
                                                                    <label for="privacy-public"
                                                                        class="font-medium text-gray-900">
                                                                        Public access
                                                                    </label>
                                                                    <p id="privacy-public-description"
                                                                        class="text-gray-500">
                                                                        Everyone with the link will see this
                                                                        project.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="relative flex items-start">
                                                                    <div class="absolute flex items-center h-5">
                                                                        <input id="privacy-private-to-project"
                                                                            name="privacy"
                                                                            aria-describedby="privacy-private-to-project-description"
                                                                            type="radio"
                                                                            class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                                    </div>
                                                                    <div class="text-sm pl-7">
                                                                        <label for="privacy-private-to-project"
                                                                            class="font-medium text-gray-900">
                                                                            Private to project members
                                                                        </label>
                                                                        <p id="privacy-private-to-project-description"
                                                                            class="text-gray-500">
                                                                            Only members of this project would
                                                                            be able to access.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="relative flex items-start">
                                                                    <div class="absolute flex items-center h-5">
                                                                        <input id="privacy-private" name="privacy"
                                                                            aria-describedby="privacy-private-to-project-description"
                                                                            type="radio"
                                                                            class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                                    </div>
                                                                    <div class="text-sm pl-7">
                                                                        <label for="privacy-private"
                                                                            class="font-medium text-gray-900">
                                                                            Private to you
                                                                        </label>
                                                                        <p id="privacy-private-description"
                                                                            class="text-gray-500">
                                                                            You are the only one able to access
                                                                            this project.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="pt-4 pb-6">
                                                    <div class="flex text-sm">
                                                        <a href="#"
                                                            class="inline-flex items-center font-medium text-indigo-600 group hover:text-indigo-900">
                                                            <svg class="w-5 h-5 text-indigo-500 group-hover:text-indigo-900"
                                                                x-description="Heroicon name: solid/link"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="ml-2">
                                                                Copy link
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="flex mt-4 text-sm">
                                                        <a href="#"
                                                            class="inline-flex items-center text-gray-500 group hover:text-gray-900">
                                                            <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-500"
                                                                x-description="Heroicon name: solid/question-mark-circle"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="ml-2">
                                                                Learn more about sharing
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end flex-shrink-0 px-4 py-4">
                                        <button type="button"
                                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            @click="open = false">
                                            Cancel
                                        </button>
                                        <button type="submit"
                                            class="inline-flex justify-center px-4 py-2 ml-4 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- add psp END -->

                <!-- edit psp START -->
                <div x-data="{ open: false }" @edit-psp.window="open = $event.detail.open"
                    @keydown.window.escape="open = false" x-init="$watch( & quot; open & quot;, o => !o & amp; & amp; window.setTimeout(() => (open = false), 1000))" x-show="open" x-ref="dialog"
                    class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" aria-modal="true">
                    <div class="absolute inset-0">

                        <div x-show="open" x-transition:enter="ease-in-out duration-500"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            x-description="Background overlay, show/hide based on slide-over state."
                            class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"
                            @click="open = false" aria-hidden="true">
                        </div>

                        <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">

                            <div x-show="open"
                                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                                class="w-screen max-w-md"
                                x-description="Slide-over panel, show/hide based on slide-over state.">
                                <form x-show="tab === 'psps'"
                                    class="flex flex-col h-full bg-white divide-y divide-gray-200 shadow-xl">
                                    <div class="flex-1 h-0 overflow-y-auto">
                                        <div class="px-4 py-6 bg-gray-600 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                                    Edit Payment service provider
                                                </h2>
                                                <div class="flex items-center ml-3 h-7">
                                                    <button type="button"
                                                        class="text-indigo-200 bg-gray-600 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                                        @click="open = false">
                                                        <span class="sr-only">Close panel</span>
                                                        <svg class="w-6 h-6"
                                                            x-description="Heroicon name: outline/x"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-1">
                                                <p class="text-sm text-gray-300">
                                                    Select a PSP from the list and provide credentials.
                                                </p>
                                                <!-- <p x-text="tab"></p> -->
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-between flex-1">
                                            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                                                <div class="pt-6 pb-5 space-y-6">

                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                    <div>
                                                        <label for="location"
                                                            class="block text-sm font-medium text-gray-700">Payment
                                                            service provider</label>
                                                        <select disabled id="location" name="location"
                                                            class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md bg-gray-50 disabled:opacity-75 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <!-- <option class="text-gray-500" selected>select</option> -->
                                                            <option class="text-gray-500 " value="" selected>
                                                                Select...</option>
                                                            <option>Stripe</option>
                                                            <option>First Direct</option>
                                                            <option selected>Global Payments</option>
                                                            <option>Safety Pay</option>
                                                        </select>

                                                    </div>


                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                    <div>
                                                        <label id="listbox-label"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Country
                                                        </label>
                                                        <div x-data="dropdown" class="relative mt-1">
                                                            <button @click="toggle" @click.away="close"
                                                                type="button"
                                                                class="relative w-full py-2 pl-3 pr-10 text-left bg-white border border-gray-300 rounded-md shadow-sm cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                                aria-haspopup="listbox" aria-expanded="true"
                                                                aria-labelledby="listbox-label">
                                                                <div class="flex items-center">

                                                                    <span class="block truncate">
                                                                        Select...
                                                                    </span>
                                                                </div>
                                                                <span
                                                                    class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                                                    <!-- Heroicon name: solid/selector -->
                                                                    <svg class="w-5 h-5 text-gray-400"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                </span>
                                                            </button>

                                                            <!--
      Select popover, show/hide based on select state.

      Entering: ""
        From: ""
        To: ""
      Leaving: "transition ease-in duration-100"
        From: "opacity-100"
        To: "opacity-0"
    -->
                                                            <ul x-show="open"
                                                                class="absolute z-10 w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                                                                tabindex="-1" role="listbox"
                                                                aria-labelledby="listbox-label"
                                                                aria-activedescendant="listbox-option-3">
                                                                <!--
        Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

        Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
      -->
                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                                                                        <span
                                                                            class="absolute inset-y-0 left-0 flex items-center px-2 pr-4 text-green-600">
                                                                            <!-- Heroicon name: solid/check -->
                                                                            <svg class="w-5 h-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                        </span>
                                                                        <span class="block ml-6 font-normal truncate">
                                                                            Global
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9 hover:text-white hover:bg-indigo-600"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                                                                        <span
                                                                            class="absolute inset-y-0 left-0 flex items-center px-2 pr-4 text-green-600">
                                                                            <!-- Heroicon name: solid/check -->
                                                                            <svg class="w-5 h-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">

                                                                            </svg>
                                                                        </span>
                                                                        <span class="block ml-6 font-normal truncate">
                                                                            Canada
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>


                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                                                                        <span
                                                                            class="absolute inset-y-0 left-0 flex items-center px-2 pr-4 text-green-600">
                                                                            <!-- Heroicon name: solid/check -->
                                                                            <svg class="w-5 h-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                        </span>
                                                                        <span class="block ml-6 font-normal truncate">
                                                                            Mexico
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                                                                        <span
                                                                            class="absolute inset-y-0 left-0 flex items-center px-2 pr-4 text-green-600">
                                                                            <!-- Heroicon name: solid/check -->
                                                                            <svg class="w-5 h-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">

                                                                            </svg>
                                                                        </span>
                                                                        <span class="block ml-6 font-normal truncate">
                                                                            UK
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                                                                        <span
                                                                            class="absolute inset-y-0 left-0 flex items-center px-2 pr-4 text-green-600">
                                                                            <!-- Heroicon name: solid/check -->
                                                                            <svg class="w-5 h-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                        </span>
                                                                        <span class="block ml-6 font-normal truncate">
                                                                            USA
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <!-- More items... -->
                                                            </ul>
                                                        </div>
                                                        <p
                                                            class="flex mt-2 text-xs font-light text-gray-500 justify-left">
                                                            <!-- Heroicon name: solid/lock-closed -->
                                                            <svg class="w-5 h-5 text-gray-400 mr-1.5"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Unless specified 'Universal' credentials will be
                                                            used for all Countries for this PSP.
                                                        </p>
                                                    </div>


                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Merchant ID
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Username
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Password
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- <div class="pt-4 pb-6">
                              <div class="flex text-sm">
                                <a href="#" class="inline-flex items-center font-medium text-indigo-600 group hover:text-indigo-900">
                                  <svg class="w-5 h-5 text-indigo-500 group-hover:text-indigo-900" x-description="Heroicon name: solid/link" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                                  </svg>
                                  <span class="ml-2">
                                    Copy link
                                  </span>
                                </a>
                              </div>
                              <div class="flex mt-4 text-sm">
                                <a href="#" class="inline-flex items-center text-gray-500 group hover:text-gray-900">
                                  <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: solid/question-mark-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                  </svg>
                                  <span class="ml-2">
                                    Learn more about sharing
                                  </span>
                                </a>
                              </div>
                            </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end flex-shrink-0 px-4 py-4">
                                        <button type="button"
                                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            @click="open = false">
                                            Cancel
                                        </button>
                                        <button type="submit"
                                            class="inline-flex justify-center px-4 py-2 ml-4 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </form>

                                <form x-show="tab === 'payment_methods'"
                                    class="flex flex-col h-full bg-white divide-y divide-gray-200 shadow-xl">
                                    <div class="flex-1 h-0 overflow-y-auto">
                                        <div class="px-4 py-6 bg-gray-600 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                                    add Payment method
                                                </h2>
                                                <div class="flex items-center ml-3 h-7">
                                                    <button type="button"
                                                        class="text-indigo-200 bg-gray-600 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                                        @click="open = false">
                                                        <span class="sr-only">Close panel</span>
                                                        <svg class="w-6 h-6"
                                                            x-description="Heroicon name: outline/x"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-1">
                                                <p class="text-sm text-gray-300">
                                                    Select a Payment method from the list.
                                                </p>
                                                <!-- <p x-text="tab"></p> -->
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-between flex-1">
                                            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                                                <div class="pt-6 pb-5 space-y-6">

                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                    <div>
                                                        <label for="location"
                                                            class="block text-sm font-medium text-gray-700">Select
                                                            Country</label>
                                                        <select id="location" name="location"
                                                            class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option selected>Global</option>
                                                            <option>United States</option>
                                                            <option>Canada</option>
                                                            <option>Mexico</option>
                                                        </select>
                                                    </div>




                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Project name
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label for="description"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Description
                                                        </label>
                                                        <div class="mt-1">
                                                            <textarea id="description" name="description" rows="4"
                                                                class="block w-full border border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3 class="text-sm font-medium text-gray-900">
                                                            Team Members
                                                        </h3>
                                                        <div class="mt-2">
                                                            <div class="flex space-x-2">

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Tom Cook">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Whitney Francis">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Leonard Krasner">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Floyd Miles">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Emily Selman">
                                                                </a>

                                                                <button type="button"
                                                                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-gray-400 bg-white border-2 border-gray-200 border-dashed rounded-full hover:text-gray-500 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                    <span class="sr-only">Add team
                                                                        member</span>
                                                                    <svg class="w-5 h-5"
                                                                        x-description="Heroicon name: solid/plus-sm"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <fieldset>
                                                        <legend class="text-sm font-medium text-gray-900">
                                                            Privacy
                                                        </legend>
                                                        <div class="mt-2 space-y-5">
                                                            <div class="relative flex items-start">
                                                                <div class="absolute flex items-center h-5">
                                                                    <input id="privacy-public" name="privacy"
                                                                        aria-describedby="privacy-public-description"
                                                                        type="radio"
                                                                        class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                                                        checked="">
                                                                </div>
                                                                <div class="text-sm pl-7">
                                                                    <label for="privacy-public"
                                                                        class="font-medium text-gray-900">
                                                                        Public access
                                                                    </label>
                                                                    <p id="privacy-public-description"
                                                                        class="text-gray-500">
                                                                        Everyone with the link will see this
                                                                        project.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="relative flex items-start">
                                                                    <div class="absolute flex items-center h-5">
                                                                        <input id="privacy-private-to-project"
                                                                            name="privacy"
                                                                            aria-describedby="privacy-private-to-project-description"
                                                                            type="radio"
                                                                            class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                                    </div>
                                                                    <div class="text-sm pl-7">
                                                                        <label for="privacy-private-to-project"
                                                                            class="font-medium text-gray-900">
                                                                            Private to project members
                                                                        </label>
                                                                        <p id="privacy-private-to-project-description"
                                                                            class="text-gray-500">
                                                                            Only members of this project would
                                                                            be able to access.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="relative flex items-start">
                                                                    <div class="absolute flex items-center h-5">
                                                                        <input id="privacy-private" name="privacy"
                                                                            aria-describedby="privacy-private-to-project-description"
                                                                            type="radio"
                                                                            class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                                    </div>
                                                                    <div class="text-sm pl-7">
                                                                        <label for="privacy-private"
                                                                            class="font-medium text-gray-900">
                                                                            Private to you
                                                                        </label>
                                                                        <p id="privacy-private-description"
                                                                            class="text-gray-500">
                                                                            You are the only one able to access
                                                                            this project.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="pt-4 pb-6">
                                                    <div class="flex text-sm">
                                                        <a href="#"
                                                            class="inline-flex items-center font-medium text-indigo-600 group hover:text-indigo-900">
                                                            <svg class="w-5 h-5 text-indigo-500 group-hover:text-indigo-900"
                                                                x-description="Heroicon name: solid/link"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="ml-2">
                                                                Copy link
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="flex mt-4 text-sm">
                                                        <a href="#"
                                                            class="inline-flex items-center text-gray-500 group hover:text-gray-900">
                                                            <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-500"
                                                                x-description="Heroicon name: solid/question-mark-circle"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="ml-2">
                                                                Learn more about sharing
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end flex-shrink-0 px-4 py-4">
                                        <button type="button"
                                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            @click="open = false">
                                            Cancel
                                        </button>
                                        <button type="submit"
                                            class="inline-flex justify-center px-4 py-2 ml-4 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- add psp END -->

                <!-- logo/favion start -->
                <div x-data="{ open: false }" @edit-logo.window="open = $event.detail.open"
                    @keydown.window.escape="open = false" x-init="$watch( & quot; open & quot;, o => !o & amp; & amp; window.setTimeout(() => (open = false), 1000))" x-show="open" x-ref="dialog"
                    class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" aria-modal="true">
                    <div class="absolute inset-0">

                        <div x-show="open" x-transition:enter="ease-in-out duration-500"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            x-description="Background overlay, show/hide based on slide-over state."
                            class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"
                            @click="open = false" aria-hidden="true">
                        </div>

                        <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">

                            <div x-show="open"
                                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                                class="w-screen max-w-md"
                                x-description="Slide-over panel, show/hide based on slide-over state.">
                                <form x-show="tab === 'hpp'"
                                    class="flex flex-col h-full bg-white divide-y divide-gray-200 shadow-xl">
                                    <div class="flex-1 h-0 overflow-y-auto">
                                        <div class="px-4 py-6 bg-gray-600 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                                    Edit Logo & Favicon
                                                </h2>
                                                <div class="flex items-center ml-3 h-7">
                                                    <button type="button"
                                                        class="text-indigo-200 bg-gray-600 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                                        @click="open = false">
                                                        <span class="sr-only">Close panel</span>
                                                        <svg class="w-6 h-6"
                                                            x-description="Heroicon name: outline/x"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-1">
                                                <p class="text-sm text-gray-300">
                                                    Select a PSP from the list and provide credentials.
                                                </p>
                                                <!-- <p x-text="tab"></p> -->
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-between flex-1">
                                            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                                                <div class="pt-6 pb-5 space-y-6">

                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                    <div>
                                                        <label for="location"
                                                            class="block text-sm font-medium text-gray-700">Payment
                                                            service provider</label>
                                                        <select disabled id="location" name="location"
                                                            class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md bg-gray-50 disabled:opacity-75 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <!-- <option class="text-gray-500" selected>select</option> -->
                                                            <option class="text-gray-500 " value="" selected>
                                                                Select...</option>
                                                            <option>Stripe</option>
                                                            <option>First Direct</option>
                                                            <option selected>Global Payments</option>
                                                            <option>Safety Pay</option>
                                                        </select>

                                                    </div>


                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                    <div>
                                                        <label id="listbox-label"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Country
                                                        </label>
                                                        <div x-data="dropdown" class="relative mt-1">
                                                            <button @click="toggle" @click.away="close"
                                                                type="button"
                                                                class="relative w-full py-2 pl-3 pr-10 text-left bg-white border border-gray-300 rounded-md shadow-sm cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                                aria-haspopup="listbox" aria-expanded="true"
                                                                aria-labelledby="listbox-label">
                                                                <div class="flex items-center">

                                                                    <span class="block truncate">
                                                                        Select...
                                                                    </span>
                                                                </div>
                                                                <span
                                                                    class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                                                    <!-- Heroicon name: solid/selector -->
                                                                    <svg class="w-5 h-5 text-gray-400"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                </span>
                                                            </button>

                                                            <!--
      Select popover, show/hide based on select state.

      Entering: ""
        From: ""
        To: ""
      Leaving: "transition ease-in duration-100"
        From: "opacity-100"
        To: "opacity-0"
    -->
                                                            <ul x-show="open"
                                                                class="absolute z-10 w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                                                                tabindex="-1" role="listbox"
                                                                aria-labelledby="listbox-label"
                                                                aria-activedescendant="listbox-option-3">
                                                                <!--
        Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

        Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
      -->
                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                                                                        <span
                                                                            class="absolute inset-y-0 left-0 flex items-center px-2 pr-4 text-green-600">
                                                                            <!-- Heroicon name: solid/check -->
                                                                            <svg class="w-5 h-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                        </span>
                                                                        <span class="block ml-6 font-normal truncate">
                                                                            Global
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9 hover:text-white hover:bg-indigo-600"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                                                                        <span
                                                                            class="absolute inset-y-0 left-0 flex items-center px-2 pr-4 text-green-600">
                                                                            <!-- Heroicon name: solid/check -->
                                                                            <svg class="w-5 h-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">

                                                                            </svg>
                                                                        </span>
                                                                        <span class="block ml-6 font-normal truncate">
                                                                            Canada
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>


                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                                                                        <span
                                                                            class="absolute inset-y-0 left-0 flex items-center px-2 pr-4 text-green-600">
                                                                            <!-- Heroicon name: solid/check -->
                                                                            <svg class="w-5 h-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                        </span>
                                                                        <span class="block ml-6 font-normal truncate">
                                                                            Mexico
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                                                                        <span
                                                                            class="absolute inset-y-0 left-0 flex items-center px-2 pr-4 text-green-600">
                                                                            <!-- Heroicon name: solid/check -->
                                                                            <svg class="w-5 h-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">

                                                                            </svg>
                                                                        </span>
                                                                        <span class="block ml-6 font-normal truncate">
                                                                            UK
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:text-white hover:bg-indigo-600 pr-9"
                                                                    id="listbox-option-0" role="option">
                                                                    <div class="flex items-center">
                                                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                                                                        <span
                                                                            class="absolute inset-y-0 left-0 flex items-center px-2 pr-4 text-green-600">
                                                                            <!-- Heroicon name: solid/check -->
                                                                            <svg class="w-5 h-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                        </span>
                                                                        <span class="block ml-6 font-normal truncate">
                                                                            USA
                                                                            <span class="sr-only"> is
                                                                                online</span>
                                                                        </span>
                                                                    </div>

                                                                    <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->

                                                                </li>

                                                                <!-- More items... -->
                                                            </ul>
                                                        </div>
                                                        <p
                                                            class="flex mt-2 text-xs font-light text-gray-500 justify-left">
                                                            <!-- Heroicon name: solid/lock-closed -->
                                                            <svg class="w-5 h-5 text-gray-400 mr-1.5"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Unless specified 'Universal' credentials will be
                                                            used for all Countries for this PSP.
                                                        </p>
                                                    </div>


                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Merchant ID
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Username
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Password
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- <div class="pt-4 pb-6">
                              <div class="flex text-sm">
                                <a href="#" class="inline-flex items-center font-medium text-indigo-600 group hover:text-indigo-900">
                                  <svg class="w-5 h-5 text-indigo-500 group-hover:text-indigo-900" x-description="Heroicon name: solid/link" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                                  </svg>
                                  <span class="ml-2">
                                    Copy link
                                  </span>
                                </a>
                              </div>
                              <div class="flex mt-4 text-sm">
                                <a href="#" class="inline-flex items-center text-gray-500 group hover:text-gray-900">
                                  <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: solid/question-mark-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                  </svg>
                                  <span class="ml-2">
                                    Learn more about sharing
                                  </span>
                                </a>
                              </div>
                            </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end flex-shrink-0 px-4 py-4">
                                        <button type="button"
                                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            @click="open = false">
                                            Cancel
                                        </button>
                                        <button type="submit"
                                            class="inline-flex justify-center px-4 py-2 ml-4 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </form>

                                <form x-show="tab === 'payment_methods'"
                                    class="flex flex-col h-full bg-white divide-y divide-gray-200 shadow-xl">
                                    <div class="flex-1 h-0 overflow-y-auto">
                                        <div class="px-4 py-6 bg-gray-600 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                                    add Payment method
                                                </h2>
                                                <div class="flex items-center ml-3 h-7">
                                                    <button type="button"
                                                        class="text-indigo-200 bg-gray-600 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                                        @click="open = false">
                                                        <span class="sr-only">Close panel</span>
                                                        <svg class="w-6 h-6"
                                                            x-description="Heroicon name: outline/x"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-1">
                                                <p class="text-sm text-gray-300">
                                                    Select a Payment method from the list.
                                                </p>
                                                <!-- <p x-text="tab"></p> -->
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-between flex-1">
                                            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                                                <div class="pt-6 pb-5 space-y-6">

                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                    <div>
                                                        <label for="location"
                                                            class="block text-sm font-medium text-gray-700">Select
                                                            Country</label>
                                                        <select id="location" name="location"
                                                            class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option selected>Global</option>
                                                            <option>United States</option>
                                                            <option>Canada</option>
                                                            <option>Mexico</option>
                                                        </select>
                                                    </div>




                                                    <div>
                                                        <label for="project-name"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Project name
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="project-name"
                                                                id="project-name"
                                                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label for="description"
                                                            class="block text-sm font-medium text-gray-900">
                                                            Description
                                                        </label>
                                                        <div class="mt-1">
                                                            <textarea id="description" name="description" rows="4"
                                                                class="block w-full border border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3 class="text-sm font-medium text-gray-900">
                                                            Team Members
                                                        </h3>
                                                        <div class="mt-2">
                                                            <div class="flex space-x-2">

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Tom Cook">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Whitney Francis">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Leonard Krasner">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Floyd Miles">
                                                                </a>

                                                                <a href="#"
                                                                    class="rounded-full hover:opacity-75">
                                                                    <img class="inline-block w-8 h-8 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                                        alt="Emily Selman">
                                                                </a>

                                                                <button type="button"
                                                                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-gray-400 bg-white border-2 border-gray-200 border-dashed rounded-full hover:text-gray-500 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                    <span class="sr-only">Add team
                                                                        member</span>
                                                                    <svg class="w-5 h-5"
                                                                        x-description="Heroicon name: solid/plus-sm"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <fieldset>
                                                        <legend class="text-sm font-medium text-gray-900">
                                                            Privacy
                                                        </legend>
                                                        <div class="mt-2 space-y-5">
                                                            <div class="relative flex items-start">
                                                                <div class="absolute flex items-center h-5">
                                                                    <input id="privacy-public" name="privacy"
                                                                        aria-describedby="privacy-public-description"
                                                                        type="radio"
                                                                        class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                                                        checked="">
                                                                </div>
                                                                <div class="text-sm pl-7">
                                                                    <label for="privacy-public"
                                                                        class="font-medium text-gray-900">
                                                                        Public access
                                                                    </label>
                                                                    <p id="privacy-public-description"
                                                                        class="text-gray-500">
                                                                        Everyone with the link will see this
                                                                        project.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="relative flex items-start">
                                                                    <div class="absolute flex items-center h-5">
                                                                        <input id="privacy-private-to-project"
                                                                            name="privacy"
                                                                            aria-describedby="privacy-private-to-project-description"
                                                                            type="radio"
                                                                            class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                                    </div>
                                                                    <div class="text-sm pl-7">
                                                                        <label for="privacy-private-to-project"
                                                                            class="font-medium text-gray-900">
                                                                            Private to project members
                                                                        </label>
                                                                        <p id="privacy-private-to-project-description"
                                                                            class="text-gray-500">
                                                                            Only members of this project would
                                                                            be able to access.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="relative flex items-start">
                                                                    <div class="absolute flex items-center h-5">
                                                                        <input id="privacy-private" name="privacy"
                                                                            aria-describedby="privacy-private-to-project-description"
                                                                            type="radio"
                                                                            class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                                    </div>
                                                                    <div class="text-sm pl-7">
                                                                        <label for="privacy-private"
                                                                            class="font-medium text-gray-900">
                                                                            Private to you
                                                                        </label>
                                                                        <p id="privacy-private-description"
                                                                            class="text-gray-500">
                                                                            You are the only one able to access
                                                                            this project.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="pt-4 pb-6">
                                                    <div class="flex text-sm">
                                                        <a href="#"
                                                            class="inline-flex items-center font-medium text-indigo-600 group hover:text-indigo-900">
                                                            <svg class="w-5 h-5 text-indigo-500 group-hover:text-indigo-900"
                                                                x-description="Heroicon name: solid/link"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="ml-2">
                                                                Copy link
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="flex mt-4 text-sm">
                                                        <a href="#"
                                                            class="inline-flex items-center text-gray-500 group hover:text-gray-900">
                                                            <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-500"
                                                                x-description="Heroicon name: solid/question-mark-circle"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="ml-2">
                                                                Learn more about sharing
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end flex-shrink-0 px-4 py-4">
                                        <button type="button"
                                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            @click="open = false">
                                            Cancel
                                        </button>
                                        <button type="submit"
                                            class="inline-flex justify-center px-4 py-2 ml-4 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- logo/favicon END -->




                <!-- all MODALS are ABOVE this point -->
            </div>
        </div>
    </div>
</x-app-layout>
