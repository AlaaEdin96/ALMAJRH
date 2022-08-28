@push('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/data-list-view.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
@endpush
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">..<code>{{$compane->code}}</code>..</h2>
                            <div class="breadcrumb-wrapper col-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
                <!-- Basic example and Profile cards section start -->
                <section id="basic-examples">
                    <div class="row match-height">
                        
                      @php
                           $f =18;
                      @endphp 

{{----<div class="col-lg-4 col-sm-12">
    <div class="card">
        <div class="card-header d-flex align-items-start pb-0">
            <div>
                <h2 class="text-bold-700 mb-0">$834.600</h2>
                <p>الميزانية المنفقة</p>
            </div>
            <div class="avatar bg-rgba-success p-50 m-0">
                <div class="avatar-content">
                    <i class="feather icon-server text-success font-medium-5"></i>
                </div>
            </div>
        </div>
    </div>
</div>-----}}
 
 

<section id="profile-info">
    <div class="row">
        <div class="col-lg-3 col-12">


            <!--------------------about---------->
            <div class="card" style="">
                <div class="card-header">
                    <h4>About</h4>
                    
                        <i class="dropdown  nav-item">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal cursor-pointer"></i><span class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i>المستخدمين</a><a class="dropdown-item" href="#" data-language="fr"><i class=" "></i> العمال</a><a class="dropdown-item" href="#" data-language="de"><i class=" "></i> المهندسين</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                        </i> 
                     
            
                    
                </div>
                <div class="card-body">
                    <p>This project will improve and . improve the infrastructure of the telecommunications sector.</p>
                    <div class="mt-1">
                        <h6 class="mb-0">Name:</h6>
                        <p>{{$compane->name}}</p>
                    </div>
                    <div class="mt-1">
                        <h6 class="mb-0">Created at:</h6>
                        <p>November 15, 2015</p>
                    </div>
                    <div class="mt-1">
                        <h6 class="mb-0">Created by:</h6>
                        <p>Adem tarhone</p>
                    </div>
 
                    <div class="card-header d-flex align-items-start pb-0">
                     <p>Activity</p>
                        <div class=" ">
                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="checkbox" class="custom-control-input" checked="" id="accountSwitch1">
                                <label class="custom-control-label mr-1" for="accountSwitch1"></label>
                                
                            </div>
                        </div>
                    </div>
            
                  
                </div>
            </div>
            
            
            



            <!----------------- end about------->
            
         
         {{---@livewire('component.taskes',['project_id' => $projct->id])-------}}  

           {{-------- @livewire('component.supporters')-------}}
        </div>
        <div class="col-lg-6 col-12">

          
 <!---------startt tabel --------->            
 <section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173.484px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 272.859px;">Position</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 127.047px;">Office</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 38.3906px;">Age</th>
                                         <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 86.3906px;">Salary</th></tr>
                                </thead>
                                <tbody>
                                    @forelse ($projecrts as $projecrt )
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>{{$projecrt->id}}</td>
                                        <td>{{$projecrt->code}}</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr> 
                                    @empty
                                    
                                    
                                    @endforelse
                          
                                </tbody>
                                 
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 29 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>      
 

            
          
        </div>
        <div class="col-lg-3 col-12">

 


 



 <div class=" ">
                <!-- Block level buttons with icon -->
                <div class="form-group">
                    <button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">Work schedule</button>
                </div>
            </div>
        

<!------------component.team------------>
<div class="card">
    <div class="card-header">
        <h4>Team:</h4>
        
        <button wire:click='$emit("openModal", "modal.crud-team", {{ json_encode(["project_id" =>1]) }})' class=" text-primary text-right">Add</button> 
    </div>

    <div class="card-body">
        <div class="row">
            @forelse ($compane->users as $user)
            <div class="col-md-4 col-6 user-latest-img">
                <img src="../../../app-assets/images/profile/user-uploads/user-01.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
            </div>    
            @empty
                
            @endforelse
     
        </div>
    </div>
</div>




<!------------ end component.team------------>
 
          
            @livewire('component.file', ['project_id' => $compane->id])

            
 <!--------->      
        </div>
    </div>
   
</section>

</section>
                <!-- // Basic example and Profile cards section end -->
    
                <!-- Overlay Image and Chat Section Starts -->
              
                <!-- Overlay Image and Chat Section Starts -->
    
                <!-- Admin and Video Section Starts -->
              
                <!-- Admin and Video Section Starts -->
    
                <!-- Timeline Starts -->
             
                <!-- Timeline Ends -->
    
            </div>
        </div>
        @push('js')
            

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
        @endpush