<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->

    <nav class="flex py-4 overflow-x-auto border-b border-white/10">
        <ul role="list" class="flex flex-none min-w-full px-4 text-sm font-semibold leading-6 text-gray-400 gap-x-6 sm:px-6 lg:px-8">
          <li>
            <a href="#" @click.prevent="tab_visual = 'price_evolution'" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-500': tab_visual !== 'price_evolution', 'text-orange-400':  tab_visual === 'price_evolution' }">Price evolution</a>
          </li>
          <li>
            <a href="#" @click.prevent="tab_visual = 'forward_looking'" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-500' : tab_visual !== 'forward_looking', ' text-orange-400':  tab_visual === 'forward_looking' }">Forward looking</a>
          </li>
          <li>
            <a href="#" @click.prevent="tab_visual = 'channel_comp'" x-bind:class="{ 'hover:border-gray-300 hover:text-gray-500' : tab_visual !== 'channel_comp', 'text-orange-400':  tab_visual === 'channel_comp' }">Channel comparison</a>
          </li>

          <!-- <li>
              <a href="#" class="">Notifications</a>
            </li> -->
        </ul>
    </nav>

      <div x-show="tab_visual === 'price_evolution'">

        <x-customer_summary />

      </div>

</div>