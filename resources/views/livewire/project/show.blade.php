<div>
    @extends('layouts.master')
    @section('content')
    
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
            
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-left mb-0">المشاريع</h2>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                                        </li>
                                        <li class="breadcrumb-item "> <a href="{{route('project')}}">المشاريع</a>
                                        </li>
                                        <li class="breadcrumb-item active">مشروع جديد
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="content-body">
                    <!-- users edit start -->
                    <section class="users-edit">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">بيانات مشروع جديد</h4>
                            </div>
                            
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center active" id="company-tab" data-toggle="tab" href="#company" aria-controls="company" role="tab" aria-selected="true">
                                                    <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">بيانات المشروع</span>
                                                </a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center" id="task-tab" data-toggle="tab" href="#task" aria-controls="task" role="tab" aria-selected="false">
                                                    <i class="feather icon-activity  mr-25"></i></i><span class="d-none d-sm-block">مهام المشروع</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="company" aria-labelledby="company-tab" role="tabpanel">                                                                                     
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                                            
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-2"></div>      
                                                                         <div class="col-8">
                                                                            <div class="card text-white bg-primary text-center">
                                                                                <div class="card-content">
                                                                                    <div class="card-body">
                                                                                        <img src="../../../app-assets/images/elements/iphone-x.png" alt="element 05" width="150" class="mb-1 img-fluid">
                                                                                        <h4 class="card-title text-white">Storage Device</h4>
                                                                                        <p class="card-text text-white">945 items</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                         </div>          
                                                                                               
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <b>عنوان المشروع :</b>
                                                                        مشروع 1 <br>
                                                                        <b>كود المشروع :</b>
                                                                        wwww
                                                                     </div>        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                 
                                            </div>
                                            
                                            <div class="tab-pane" id="task" aria-labelledby="task-tab" role="tabpanel">
                                                <div class="card-content">
                                                    <div class="card-body">                     
                                                            <div class="form-body">
                                                                
                                                              
    
                                                                <div class="col-12">
                                                                    <table class="table mt-2">
                                                                        <thead>
                                                                            <th>عنوان المهمة</th>
                                                                            <th>اسم العامل</th>
                                                                            <th></th>
                                                                        </thead>
    
                                                                        <tbody >
                                                                           <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
    
                                                                           </tr>
    
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                        </div>
                    </section>
                    <!-- users edit ends -->
            
                </div>
            
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    @push('js')
          
    
    @endpush
    
    @endsection
    </div>
