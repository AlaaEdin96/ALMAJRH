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
    <div class="app-content content">
        <div class="content-overlay"></div>
accounting        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">إعدادات النظام</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a>
                                    </li>

                                    <li class="breadcrumb-item active">الشركات 
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-list-view" class="data-list-view-header">
                    

                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-thumb-view">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>الشعار</th>
                                    <th>اسم الشركة</th>
                                    
                                    <th>الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                             
<tr>
    <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card" style="height: 468.359px;">
            <div class="card-content">
                <div class="card-body">
                    <img class="card-img img-fluid mb-1" src="../../../app-assets/images/pages/content-img-2.jpg" alt="Card image cap">
                    <h5 class="mt-1">Vuexy Admin</h5>
                    <p class="card-text">By Pixinvent Creative Studio</p>
                    <hr class="my-1">
                    <div class="d-flex justify-content-between mt-2">
                        <div class="float-left">
                            <p class="font-medium-2 mb-0">$ 4785.78</p>
                            <p class="">Income</p>
                        </div>
                        <div class="float-right">
                            <p class="font-medium-2 mb-0">12 June 2019</p>
                            <p class="">Delivery Date</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</tr>
                                
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/homepod.png" alt="Img placeholder">
                                        <td class="product-name">شركة 1</td>
                                        <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/magic-mouse.png" alt="Img placeholder">
                                        <td class="product-name">شركة 1</td>
                                        <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                              
                             
                        </table>
                    </div>
                    <!-- DataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">بيانات شركة جديدة</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <form action="#">
                                <div class="data-items pb-3">
                                    <div class="data-fields px-2 mt-3">
                                        <div class="row">
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-name">اسم الشركة</label>
                                                <input type="text" class="form-control" id="data-name">
                                            </div>
                                        
                                        
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-price">الشعار</label>
                                                <input type="file" class="form-control" id="data-price">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button class="btn btn-primary">حفظ</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <button class="btn btn-outline-danger">إغلاق</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@push('js')

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ URL:: asset('app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{ URL:: asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{ URL:: asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{ URL:: asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL:: asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ URL:: asset('app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
    <script src="{{ URL:: asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{ URL:: asset('app-assets/js/scripts/ui/data-list-view.js')}}"></script>
    <!-- END: Page JS-->
@endpush
@endsection
