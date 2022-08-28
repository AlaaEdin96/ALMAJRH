{{-- @include('includes.header')
@include('includes.navbar')
@include('includes.aside')


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            @include('Includes.messages')

            @yield('content')
        </div>
    </div>
</div>

@include('includes.footer') --}}

@include('includes.header')
{{----@include('includes.navbar')---}}
@include('includes.aside')


 
  @include('Includes.messages')
           
         @yield('content') {{--- استدعاء العنصر من livewire---}}
        
     
@include('includes.footer')
