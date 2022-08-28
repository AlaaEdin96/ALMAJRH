@extends('layouts.master')

@section('content')
 
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">المستخدمين</h2>
                        <div class="breadcrumb-wrapper col-12">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ route('User.store') }}">New user</a><a class="dropdown-item" href="#">advanced search
                        </a><a class="dropdown-item" href="#">Calendar</a></div>
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
                 @for ($q=0 ; $q<=$f ; $q++)
               
                <div class="col-xl-3 col-md-6 col-sm-12 profile-card-2">
                    <div class="card" style="height: 329.656px;">
                     
                        <div class="card-content">
                            <div class="card-body text-center mx-auto">
                                <div class="avatar avatar-xl">
                                    <img class="img-fluid" src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" alt="img placeholder">
                                </div>
                                
                                <h5 class="mt-1">Zoila Legore</h5>
                                <div class="d-flex justify-content-between mt-2">
                                    <div class="uploads">
                                        <p class="font-weight-bold font-medium-2 mb-0">568</p>
                                        <span class="">Uploads</span>
                                    </div>
                                    <div class="followers">
                                        <p class="font-weight-bold font-medium-2 mb-0">78.6k</p>
                                        <span class="">Followers</span>
                                    </div>
                                    
                                </div>
                                <a href="{{ route('User.show') }}"> <button class="btn gradient-light-primary btn-block mt-2 waves-effect waves-light">More</button></a>
                            </div>
                        </div>
                       
                    </div>
                </div>
                 @endfor
                  
                    <!-- Profile Cards Ends -->
                </div>
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
</div>
<!-- END: Content-->
@endsection

