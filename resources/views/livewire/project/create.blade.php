<div>

    @extends('layouts.master')
    @section('content')
    @push('css')
  
 
    <!-- BEGIN: Page CSS-->
      <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/wizard.css">
    <!-- END: Page CSS-->

    

    @endpush

    
    <div class="app-content content">





        
        <div class="content-wrapper">







            <div class="content-body">
             
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Project details
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                            
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Name">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="email-id-column" class="form-control" name="email-id-column" placeholder="code">
                                                            
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-12">
                                                <fieldset class="form-group">
                                                    <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

             
                <section id="input-sizing">
                    <div class="row match-height">
                     @livewire('test')
                        
                        <div class="col-md-6 col-12">
                            <div class="card" style="height: 434.266px;">
                                <div class="card-header">
                                    <h4 class="card-title">Compane</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            
                                          
                                            <div class="col-12">
                                                
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </section>




                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card" style="height: 434.266px;">
                                <div class="card-header">
                                    <h4 class="card-title">File</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            
                                          
                                            <div class="col-12">
                                                
                                                <input class="form-control" type="text" placeholder="Default Input">
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-12">
                            <div class="card" style="height: 434.266px;">
                                <div class="card-header">
                                    <h4 class="card-title">Eng</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            
                                          
                                            <div class="col-12">
                                                
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </section>


               <section id="sortable-lists">
                    <div class="row">
                        <!-- Basic List Group -->
                        

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                  
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>يرجى اختيار اعضاء الفريق
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <h4 class="my-1">All user</h4>
                                                <ul class="list-group list-group-flush" id="multiple-list-group-a">
                                                  
                                                   @for ($R=0;$R<=7;$R++)
                                                   <li class="list-group-item">
                                                    <div class="media">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Mary S. Navarre</h5>
                                                         </div>
                                                    </div>
                                                </li>  
                                                   @endfor
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <h4 class="my-1">Time</h4>
                                                <ul class="list-group list-group-flush" id="multiple-list-group-b">
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Mary S. Navarre</h5>
                                                             </div>
                                                        </div>
                                                    </li>
                                                 
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
 

            
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    @push('js')
          

 

  

 

 



 
    @endpush
    
    @endsection
    
</div>
