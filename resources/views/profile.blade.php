 


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

<link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/colors.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/components.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/dark-layout.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/semi-dark-layout.css">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/app-user.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/custom-rtl.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
<!-- END: Custom CSS-->
<!-- END: Custom CSS-->
@endpush 

      <!-- BEGIN: Content-->
    
    <!-- END: Content-->
     <div class="app-content content">
       
      @livewire('profile', ['slag' => $slag])
    </div>



   
    
@push('js')
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.js"></script>
<script src="../../../app-assets/js/core/app.js"></script>
<script src="../../../app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->
@endpush

@endsection 


 