<div>
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
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-left mb-0">المشاريع</h2>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">
                                        {{-- <li class="breadcrumb-item"><a href="index.html">الرئيسية</a>
                                        </li> --}}
                                        <li class="breadcrumb-item"><a href="#">المشاريع</a>
                                        </li>
                                        <li class="breadcrumb-item active">عرض المشاريع
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                        <div class="form-group breadcrum-right">
                            <div class="dropdown">
                                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <!-- Data list view starts -->
                    <section id="data-list-view" class="data-list-view-header">
                        
    
                        <!-- DataTable starts -->
                        <div class="table-responsive">
                            <table class="table data-list-view">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>كود المشروع</th>
                                        <th>عنوان المشروع</th>
                                        <th>اسم المشرف</th>
                                        <th>عدد العمال</th>
                                        <th>تاريخ</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>erw03</td>
                                        <td>مشروع 1</td>
                                        <td>مشرف 1</td>
                                        <td>4</td>
                                        <td>01-02-2010</td>
                                        <td class="product-action">
                                            <span class="action-edit"><i class="feather icon-edit"></i></span>
                                            <a href="{{ route('project.show') }}"><span class="action-eye"><i class="feather icon-eye"></i></span></a>
                                            <a href="{{ route('project.show') }}"><span class="action-delete"><i class="feather icon-trash"></i></span></a>
                                            <span  class="feather icon-plus" data-toggle="modal" data-target="#primary">
                                                
                                            </span>
                                            
                                        </td>
                                    </tr>
                                        
                                    
                                  
                                 
                            </table>
                        </div>
                        <!-- DataTable ends -->
                        <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary white">
                                        <h5 class="modal-title" id="myModalLabel160"> مهمة جديدة لمشروع erw03	 </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form" method="POST" action="#"  >
                                            @csrf
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-label-group">
                                                            <input type="text" id="task-address" class="form-control" value="{{ old('name') }}" placeholder="عنوان المهمة" name="name">
                                                            <label for="task-address">عنوان المهمة</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-label-group">
                                                            <select id="nameU" class="form-control" name="">
                                                                <option>عامل 1</option>
                                                                <option>عامل 2</option>
                                                                <option>عامل 3</option>
                                                            </select>
                                                            <label for="first-name-floating"> اسم العامل  </label>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">إضافة</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
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
        <!-- BEGIN: Page JS-->
        <script src="{{ URL:: asset('app-assets/js/scripts/modal/components-modal.js')}}"></script>
        <!-- END: Page JS-->
    
        <script>
            $( document ).ready(function() {
                $(".test").parents("button").remove();
    
            });
            // $('.btn btn-outline-primary')
        </script>
    @endpush
    @endsection
    
</div>
