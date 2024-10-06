<x-layouts.taiga_layout>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="max-w-7xl sm:px-6 lg:px-8 mx-auto">
  <!-- Content goes here -->
  <!-- <h1>poo pants</h1> -->

  <!-- This example requires Tailwind CSS v2.0+ -->
<div class="max-w-7xl sm:px-6 lg:px-8 px-4 mx-auto">
  <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
  <div class="max-w-3xl mx-auto">
    <ul role="list" class="space-y-3">
      @foreach ($posts as $post)
        <x-post_card :post="$post"/>
      @endforeach
    </ul>

  </div>
</div>
  

</div>


</x-layouts.taiga_layout>