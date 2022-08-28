 


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
                        <h2 class="content-header-title float-left mb-0">المشاريـــع</h2>
                        <div class="breadcrumb-wrapper col-12">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ route('project.create') }}">New project</a><a class="dropdown-item" href="#">advanced search
                        </a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic example and Profile cards section start -->
            <section id="basic-examples">
                

                

                @livewire('invokes.worker')
        
                  
                    <!-- Profile Cards Ends -->
               
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



