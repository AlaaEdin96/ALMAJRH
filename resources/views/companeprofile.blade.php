@extends('layouts.master')

@section('content')
 @push('css')
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('app-assets/css-rtl/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('app-assets/css-rtl/pages/data-list-view.css')}}">    
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('app-assets/css-rtl/custom-rtl.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('assets/css/style-rtl.css')}}">
@endpush 

      <!-- BEGIN: Content-->
    
    <!-- END: Content-->
     <div class="app-content content">
        @livewire('compane-profile', ['slag' => $slag])
    </div>



   
    


@endsection 


 