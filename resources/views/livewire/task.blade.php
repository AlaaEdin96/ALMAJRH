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
                        <!--deletrtr--->    <h2 class="content-header-title float-left mb-0">..<code>{{$projct->code}}</code>..</h2>
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

            @livewire('component.about',['project' => $projct])
         
           @livewire('component.taskes',['project_id' => $projct->id])

            @livewire('component.supporters',['project_id' => $projct->id])
        </div>
        <div class="col-lg-6 col-12">

            <div class="form-group">
                <div id="">
                    <button onclick='Livewire.emit("openModal", "modal.crud-poset",{{ json_encode(["project_id" => $projct->id]) }})' class="btn btn-block btn-primary waves-effect waves-light">اضافة مهمة جديد</button>
                </div>             </div>
             
             
             @forelse ($missions as $mission )
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-start align-items-center mb-1">
            <div class="avatar mr-1">
                <img src="../../../app-assets/images/profile/user-uploads/user-01.jpg" alt="avtar img holder" height="45" width="45">
            </div>
            <div class="user-page-info">
                <p class="mb-0">{{$mission->user->name}}</p>
                <span class="font-small-2">{{$mission->date}}</span>
            </div>
            <div class="ml-auto user-like text-primary">
       
            <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v">
                </i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i ></i>Edit</a><a class="dropdown-item" href="#" data-language="fr"><i class=" "></i> العمال</a><a class="dropdown-item" href="#" data-language="de"><i class=" "></i> المهندسين</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
            </li>
        </div>
        </div>
       
            <h4 >{{$mission->task->taitl}}</h4>
            
      
        

<p>{{$mission->taitel}}</p> 

@if (count($mission->images) == 0)
<img class="img-fluid card-img-top rounded-sm mb-2" src="../../../app-assets/images/profile/post-media/2.jpg" alt="avtar img holder">
 
@else
<div  class="imgs-grid " onclick='Livewire.emit("openModal", "modal.img-test", {{ json_encode(["keyimg" => 0,"images"=>$mission->images]) }})'>
    <div class="imgs-grid-image">
        <div class="image-wrap">
            <img class="img-fluid card-img-top rounded-sm mb-2" src="{{ asset('storage/'.$mission->images[0]->url) }}" alt="avtar img holder title="">
            <div class="view-all">
                <span class="view-all-cover"></span>
                    <span class="view-all-text">View all {{count($mission->images)}} images</span>
                </div>
            </div>
        </div>
</div>      
   
@endif

 
<!---
        <div class="d-flex justify-content-start align-items-center mb-1">
            <div class="d-flex align-items-center">
                <i class="feather icon-heart font-medium-2 mr-50"></i>
                <span>145</span>
            </div>
            <div class="ml-2">
                <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Trina Lynes" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" height="30" width="30">
                    </li>
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lilian Nenez" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="Avatar" height="30" width="30">
                    </li>
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Alberto Glotzbach" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="Avatar" height="30" width="30">
                    </li>
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="George Nordic" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                    </li>
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-4.jpg" alt="Avatar" height="30" width="30">
                    </li>
                    <li class="d-inline-block pl-50">
                        <span>+140 more</span>
                    </li>
                </ul>
            </div>
            <p class="ml-auto d-flex align-items-center">
                <i class="feather icon-message-square font-medium-2 mr-50"></i>77
            </p>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-1">
            <div class="avatar mr-50">
                <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="30" width="30">
            </div>
            <div class="user-page-info">
                <h6 class="mb-0">Kitty Allanson</h6>
                <span class="font-small-2">orthoplumbate morningtide naphthaline exarteritis</span>
            </div>
            <div class="ml-auto cursor-pointer">
                <i class="feather icon-heart mr-50"></i>
                <i class="feather icon-message-square"></i>
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-2">
            <div class="avatar mr-50">
                <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" height="30" width="30">
            </div>
            <div class="user-page-info">
                <h6 class="mb-0">Jeanie Bulgrin</h6>
                <span class="font-small-2">blockiness pandemy metaxylene speckle coppy</span>
            </div>
            <div class="ml-auto cursor-pointer">
                <i class="feather icon-heart mr-50"></i>
                <i class="feather icon-message-square"></i>
            </div>
        </div>
        <fieldset class="form-label-group mb-50">
            <textarea class="form-control" id="label-textarea" rows="3" placeholder="Add Comment"></textarea>
            <label for="label-textarea">Add Comment</label>
        </fieldset>
        <button type="button" class="btn btn-sm btn-primary waves-effect waves-light">Post Comment</button>
   ------->
    </div>
</div>
@empty
<section id=" " class=" ">
    <div class=" ">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">No date</h3>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>
                        No one has created a <code class="highlighter-rouge">.Mission</code>. for this project so far
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
   
@endforelse
            
          
        </div>
        <div class="col-lg-3 col-12">

            <div class=" ">
                <!-- Block level buttons with icon -->
                <div class="form-group">
<a href="/Task/{{$projct->id}}"><button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">Mission</button>
</a>
                </div>
            </div>


            <div class=" ">
                <!-- Block level buttons with icon -->
                <div class="form-group">
                    <a href="/invoke/{{$projct->id}}"><button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">Invoices</button>
                    </a>
                </div>
            </div>



 <div class=" ">
                <!-- Block level buttons with icon -->
                <div class="form-group">
                    <button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">Work schedule</button>
                </div>
            </div>
        
            @livewire('component.project-budget', ['project_id' => $projct->id])
            @livewire('component.team',['project_id' => $projct->id])   
            @livewire('component.file', ['project_id' => $projct->id])

            
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