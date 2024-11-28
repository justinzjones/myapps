<x-magellan-layout>




  <x-travel_hero/>


  {{-- Convert the array to a collection and pass the first 3 articles --}}
  <x-articles--home :articles="collect($articles)->take(3)" />

  {{-- Convert the array to a collection and pass the next 3 articles --}}
  <x-articles--home2 :articles="collect($articles)->slice(3, 3)" />

  <x-footer/>

</x-magellan-layout>