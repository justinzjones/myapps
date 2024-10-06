<x-magellan-layout>


  <x-header/>

  @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
    @if $i <= 3
      <x-articles--home :articles="$articles" />
    @else <x-articles--home2 :articles="$articles" />
    
    @break($i == 6)
    
  @endfor

  

  


  <x-footer/>
  
</x-magellan-layout>