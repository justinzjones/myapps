@extends ('layout-hpp')

@section ('hpp-header-content')

    <!-- this is the livewire header component -->
    <div>
        
    @livewire('hpp-header')
    </div>

@endsection


@section ('content')
    

    
    <!-- these are the components - start -->

    <div class="flex-center position-ref full-height flex mx-3 my-3">
        
        <div class="w-full">
            <!-- this is the livewire body component -->
            @livewire('hpp',['order_array' => $order_array])
        </div>
      
    </div>


    <!-- these are the components - end -->

    

@endsection

