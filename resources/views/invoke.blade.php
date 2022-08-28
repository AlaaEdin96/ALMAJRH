@extends('layouts.master')
@push('css')
   <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
   <!-- END: Vendor CSS-->
 

@endpush
@section('content')
 
      <!-- BEGIN: Content-->
     
    <!-- END: Content-->

    <div class="app-content content">
         @livewire('invoke',['slag' => $slag])
    </div>

   
@endsection
@push('js')
 
 <!-- BEGIN: Page Vendor JS-->
 <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
 <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
  <script src="../../../app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
 <!-- END: Page Vendor JS-->
 

 <!-- BEGIN: Page JS-->
 <script src="../../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
 <!-- END: Page JS-->

  
@endpush
