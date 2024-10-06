<x-layouts.taiga_layout>

  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="max-w-7xl sm:px-6 lg:px-8 mx-auto">
    <!-- Content goes here -->
    <!-- <h1>poo pants</h1> -->

    <!-- This example requires Tailwind CSS v2.0+ -->



    <!-- new bit -->
  <main>
    <div class="sm:px-6 lg:max-w-7xl lg:px-8 max-w-3xl px-4 mx-auto">
      <h1 class="sr-only">Page title</h1>
      <!-- Main 3 column grid -->
      <div class="lg:grid-cols-3 lg:gap-8 grid items-start grid-cols-1 gap-4">
        <!-- Left column -->
        <div class="lg:col-span-2 grid grid-cols-1 gap-4">
          <section aria-labelledby="section-1-title">
            <h2 class="sr-only" id="section-1-title">Section title</h2>
            <div class="overflow-hidden rounded-lg">
              <div class="">
                <!-- Your content -->
                <div class="max-w-3xl mx-auto">
                  <ul role="list" class="space-y-3">
                    @foreach ($posts as $post)
                      <x-post_card :post="$post"/>
                    @endforeach
                  </ul>

                </div>
              </div>
            </div>
          </section>
        </div>

        <!-- Right column -->
        <div class="grid grid-cols-1 gap-4">
          <section aria-labelledby="section-2-title">
            <h2 class="sr-only" id="section-2-title">Section title</h2>
            <div class="overflow-hidden bg-white rounded-lg shadow">
              <div class="p-6">
                <p>gsgsdfg</p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </main>
    <!-- new bit end -->

  </div>


</x-layouts.taiga_layout>