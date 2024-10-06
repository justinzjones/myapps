 
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 grid-rows-1 items-start gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-1">
    <div class="-mx-4 px-4 py-8 shadow-sm ring-1 ring-gray-900/5 sm:mx-0 sm:rounded-lg sm:px-8 sm:pb-14 lg:col-span-2 lg:row-span-2 lg:row-end-2 xl:px-16 xl:pb-20 xl:pt-16">
            
    
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
<div>
  <div class="sm:hidden">
    <label for="tabs" class="sr-only">Select a tab</label>
    <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
    <select id="tabs" name="tabs" class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
      <option selected>My Account</option>
      <option>Company</option>
      <option>Team Members</option>
      <option>Billing</option>
    </select>
  </div>
  <div class="hidden sm:block">
    <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow" aria-label="Tabs">
      <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
      <a href="#" class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10" aria-current="page">
        <span>My Account</span>
        <span aria-hidden="true" class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>
      </a>
      <a href="#" class="text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10">
        <span>Company</span>
        <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
      </a>
      <a href="#" class="text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10">
        <span>Team Members</span>
        <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
      </a>
      <a href="#" class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10">
        <span>Billing</span>
        <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
      </a>
    </nav>
  </div>
</div>

    <div class="pb-16"></div>
    
            <h2 class="text-base font-semibold leading-6 text-gray-900">Invoice</h2>
            <dl class="mt-6 grid grid-cols-1 text-sm leading-6 sm:grid-cols-2">
            <div class="sm:pr-4">
                <dt class="inline text-gray-500">Issued on</dt>
                <dd class="inline text-gray-700"><time datetime="2023-23-01">January 23, 2023</time></dd>
            </div>
            <div class="mt-2 sm:mt-0 sm:pl-4">
                <dt class="inline text-gray-500">Due on</dt>
                <dd class="inline text-gray-700"><time datetime="2023-31-01">January 31, 2023</time></dd>
            </div>
            <div class="mt-6 border-t border-gray-900/5 pt-6 sm:pr-4">
                <dt class="font-semibold text-gray-900">From</dt>
                <dd class="mt-2 text-gray-500"><span class="font-medium text-gray-900">Acme, Inc.</span><br>7363 Cynthia Pass<br>Toronto, ON N3Y 4H8</dd>
            </div>
            <div class="mt-8 sm:mt-6 sm:border-t sm:border-gray-900/5 sm:pl-4 sm:pt-6">
                <dt class="font-semibold text-gray-900">To</dt>
                <dd class="mt-2 text-gray-500"><span class="font-medium text-gray-900">Tuple, Inc</span><br>886 Walter Street<br>New York, NY 12345</dd>
            </div>
            </dl>

    </div>
    </div>
    </div>