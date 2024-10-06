<div class="divide-y divide-white/5">







  <div class="grid grid-cols-1 px-4 py-16 max-w-7xl gap-x-8 gap-y-10 sm:px-6 md:grid-cols-3 lg:px-8">
    <div>
      <h2 class="text-base font-semibold leading-7 text-white">Input file</h2>
      <p class="mt-1 text-sm leading-6 text-gray-400">Add and configure a new input file.</p>
    </div>

    <form class="md:col-span-2">
      <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">





        <div class="col-span-full">
          <label for="timezone" class="block text-sm font-medium leading-6 text-white">Input file</label>
          <div class="mt-2">

            <div class="flex justify-center px-6 py-10 mt-2 border border-dashed rounded-lg hover:cursor-pointer hover:border-gray-600 border-white/25">
              <div class="text-center">


                <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                  <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12-3-3m0 0-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>

                <div class="flex mt-4 text-sm leading-6 text-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                  <label for="file-upload" class="relative font-semibold text-white bg-gray-900 rounded-md hover:text-orange-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-orange-600 focus-within:ring-offset-2 focus-within:ring-offset-gray-900">
                    <span>Upload a file</span>
                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                  </label>
                  <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-sm leading-5 text-gray-400">.csv or .parquet</p>
              </div>
            </div>







          </div>
        </div>




        <div class="sm:col-span-3">
          <label for="country" class="block text-sm font-medium leading-6 text-white">Input file format</label>
          <div class="mt-2">
            <select id="input-file" name="input-file" autocomplete="input-file" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-orange-500 sm:text-sm sm:leading-6 [&amp;_*]:text-black">
              <option>Select a format</option>
              <option>3V standard</option>
              <option>Infare standard</option>
            </select>
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="first-name" class="block text-sm font-medium leading-6 text-white">Run count</label>
          <div class="mt-2">
            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-orange-500 sm:text-sm sm:leading-6">
          </div>
        </div>


        <div class="sm:col-span-3">
          <label for="first-name" class="block text-sm font-medium leading-6 text-white">Start date</label>
          <div class="mt-2">
            <input type="text" name="start-date" id="start-date" placeholder="MM / DD / YYYY" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-orange-500 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="last-name" class="block text-sm font-medium leading-6 text-white">Start time</label>
          <div class="mt-2">
            <input type="text" name="start-time" id="start-time" autocomplete="time" placeholder="HH : MM" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-orange-500 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="first-name" class="block text-sm font-medium leading-6 text-white">End date</label>
          <div class="mt-2">
            <input type="text" name="end-date" id="end-date" placeholder="MM / DD / YYYY" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-orange-500 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="last-name" class="block text-sm font-medium leading-6 text-white">End time</label>
          <div class="mt-2">
            <input type="text" name="end-time" id="end-time" autocomplete="time" placeholder="HH : MM" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-orange-500 sm:text-sm sm:leading-6">
          </div>
        </div>








      </div>

      <div class="flex mt-8">
        <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-orange-500 rounded-md shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500">Save</button>
      </div>
    </form>
  </div>




  <div class="grid grid-cols-1 px-4 py-16 max-w-7xl gap-x-8 gap-y-10 sm:px-6 md:grid-cols-3 lg:px-8">
    <div>
      <h2 class="text-base font-semibold leading-7 text-white">Input file</h2>
      <p class="mt-1 text-sm leading-6 text-gray-400">Add and configure a new input file.</p>
    </div>

    <form class="md:col-span-2">
    <div class="col-span-6 overflow-hidden shadow ring-1 ring-white ring-opacity-5 sm:rounded-lg">
      <table class="min-w-full divide-y divide-gray-700">
        <thead class="bg-gray-900">
          <tr>
            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Id</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Name</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Start date</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">End date</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Runs</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Status</th>
            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
              <span class="sr-only">Edit</span>
            </th>
          </tr>
        </thead>
        <tbody class="bg-gray-900 divide-y divide-gray-800">
          <tr>
            <td class="py-4 pl-4 pr-3 text-sm font-medium text-white whitespace-nowrap sm:pl-6">1234</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">my_new_input_file.csv</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">54</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">Active</td>
            <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
              <a href="#" class="text-orange-500 hover:text-orange-700">Select<span class="sr-only"></span></a>
            </td>
          </tr>
          <tr>
            <td class="py-4 pl-4 pr-3 text-sm font-medium text-white whitespace-nowrap sm:pl-6">1235</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">my_new_input_file.csv</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">3</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">Active</td>
            <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
              <a href="#" class="text-orange-500 hover:text-orange-700">Select<span class="sr-only"></span></a>
            </td>
          </tr>
          <tr>
            <td class="py-4 pl-4 pr-3 text-sm font-medium text-white whitespace-nowrap sm:pl-6">1236</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">my_new_input_file.csv</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">34</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">Active</td>
            <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
              <a href="#" class="text-orange-500 hover:text-orange-700">Select<span class="sr-only"></span></a>
            </td>
          </tr>
          <tr>
            <td class="py-4 pl-4 pr-3 text-sm font-medium text-white whitespace-nowrap sm:pl-6">1237</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">my_new_input_file.csv</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">34</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">Active</td>
            <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
              <a href="#" class="text-orange-500 hover:text-orange-700">Select<span class="sr-only"></span></a>
            </td>
          </tr>
          <tr>
            <td class="py-4 pl-4 pr-3 text-sm font-medium text-white whitespace-nowrap sm:pl-6">1238</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">my_new_input_file.csv</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">87</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">Active</td>
            <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
              <a href="#" class="text-orange-500 hover:text-orange-700">Select<span class="sr-only"></span></a>
            </td>
          </tr>
          <tr>

            <td class="py-4 pl-4 pr-3 text-sm font-medium text-white whitespace-nowrap sm:pl-6">1239</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">my_new_input_file.csv</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">12 July 2024, 13:10</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">1</td>
            <td class="px-3 py-4 text-sm text-gray-400 whitespace-nowrap">Active</td>
            <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
              <button @click="open = true" class="text-orange-500 hover:text-orange-700">Select<span class="sr-only"></span></button>
            </td>
            <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
              <button @click="open = true" class="text-red-500 hover:text-red-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mt-1">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                </svg>
              </button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

      
    </form>
  </div>


    <div class="md:col-span-2"></div>

  </div>







  <div class="w-screen h-auto bg-gray-300 ">


    <div @keydown.window.escape="open = false" x-show="open" class="relative z-10" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true">

      <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 transition-opacity bg-gray-800 bg-opacity-75"></div>


      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">

          <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="relative px-4 pt-5 pb-4 overflow-hidden text-left transition-all transform bg-gray-900 rounded-lg shadow-xl sm:my-8 sm:w-full sm:max-w-7xl sm:p-6" @click.away="open = false">
            <div class="absolute top-0 right-0 hidden pt-4 pr-4 sm:block">
              <button type="button" class="text-gray-400 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" @click="open = false">
                <span class="sr-only">Close</span>
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
            <div class="sm:flex sm:items-start">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                <p>1239</p>
              </div>
              <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">my_new_input_file.csv</h3>
                <div class="mt-2">
                  <div class="bg-gray-900">
                    <div class="max-w-5xl mx-auto">
                      <div class="py-0 bg-gray-900">
                        <div class="px-4 sm:px-6 lg:px-8">
                          <div class="sm:flex sm:items-center">

                          </div>
                          <div class="flow-root mt-8">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                              <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <table class="min-w-full divide-y divide-gray-700">
                                  <thead>
                                    <tr>
                                      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">Name</th>
                                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Title</th>
                                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Email</th>
                                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Role</th>
                                      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                        <span class="sr-only">Edit</span>
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody class="divide-y divide-gray-800">
                                    <tr>
                                      <td class="py-4 pl-4 pr-3 text-sm font-medium text-white whitespace-nowrap sm:pl-0">Lindsay Walton</td>
                                      <td class="px-3 py-4 text-sm text-gray-300 whitespace-nowrap">Front-end Developer</td>
                                      <td class="px-3 py-4 text-sm text-gray-300 whitespace-nowrap">lindsay.walton@example.com</td>
                                      <td class="px-3 py-4 text-sm text-gray-300 whitespace-nowrap">Member</td>
                                      <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-0">
                                        <a href="#" class="text-indigo-400 hover:text-indigo-300">Edit<span class="sr-only">, Lindsay Walton</span></a>
                                      </td>
                                    </tr>

                                    <!-- More people... -->
                                  </tbody>
                                </table>
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
            <!-- <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
          <button type="button" class="inline-flex justify-center w-full px-3 py-2 text-sm font-semibold text-white bg-red-600 rounded-md shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto" @click="open = false">Deactivate</button>
          <button type="button" class="inline-flex justify-center w-full px-3 py-2 mt-3 text-sm font-semibold text-gray-900 bg-white rounded-md shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" @click="open = false">Cancel</button>
        </div> -->
          </div>

        </div>
      </div>
    </div>


  </div>




</div>
</div>