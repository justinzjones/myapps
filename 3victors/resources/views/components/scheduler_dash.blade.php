<div>


    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->

    <nav class="flex py-4 overflow-x-auto border-b border-white/10">
        <ul role="list" class="flex flex-none min-w-full px-4 text-sm font-semibold leading-6 text-gray-400 gap-x-6 sm:px-6 lg:px-8">
          <li>
            <a href="#" @click.prevent="tab_input = 'input'" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-500': tab_input !== 'input', 'text-orange-400':  tab_input === 'input' }">Input</a>
          </li>
          <li>
            <a href="#" @click.prevent="tab_input = 'mapping'" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-500' : tab_input !== 'mapping', ' text-orange-400':  tab_input === 'mapping' }">Mapping</a>
          </li>
          <li>
            <a href="#" @click.prevent="tab_input = 'output'" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-500' : tab_input !== 'output', 'text-orange-400':  tab_input === 'site_oustanding' }">Output</a>
          </li>
          <li>
            <a href="#" @click.prevent="tab_input = 'delivery'" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-500' : tab_input !== 'delivery', ' text-orange-400':  tab_input === 'delivery' }">Delivery</a>
          </li>
          <!-- <li>
              <a href="#" class="">Notifications</a>
            </li> -->
        </ul>
      </nav>

      <div x-show="tab_input === 'input'">

        <x-scheduler_input />

      </div>





  </div>

  <!-- Activity list -->
  <div x-show="tab === 'site_issues' ">

    < x-site_issues />

  </div>
    
</div>