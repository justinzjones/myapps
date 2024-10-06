<div>


    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->

    <nav class="flex py-4 overflow-x-auto border-b border-white/10">
        <ul role="list" class="flex flex-none min-w-full px-4 text-sm font-semibold leading-6 text-gray-400 gap-x-6 sm:px-6 lg:px-8">
          <li>
            <a href="#" @click.prevent="tab = 'customer_summary'" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-500': tab !== 'customer_summary', 'text-orange-400':  tab === 'customer_summary' }">Customer summary</a>
          </li>
          <li>
            <a href="#" @click.prevent="tab = 'site_issues'" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-500' : tab !== 'site_issues', ' text-orange-400':  tab === 'site_issues' }">Site issues</a>
          </li>
          <li>
            <a href="#" @click.prevent="tab = 'site_oustanding'" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-500' : tab !== 'site_oustanding', 'text-orange-400':  tab === 'site_oustanding' }">Site outstanding</a>
          </li>
          <li>
            <a href="#" @click.prevent="tab = 'delivery'" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-500' : tab !== 'delivery', ' text-orange-400':  tab === 'delivery' }">Delivery</a>
          </li>
          <!-- <li>
              <a href="#" class="">Notifications</a>
            </li> -->
        </ul>
      </nav>

      <div x-show="tab === 'customer_summary'">

        <x-customer_summary />

      </div>





  </div>

  <!-- Activity list -->
  <div x-show="tab === 'site_issues' ">

    < x-site_issues />

  </div>
    
</div>