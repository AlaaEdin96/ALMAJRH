

 
<div>
  
    
    <div class="row match-height">
    @forelse ($users as $user )

    


    
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="height: 329.656px;">
            <div class="card-header mx-auto">
                <div class="avatar avatar-xl">
                    <img class="img-fluid" src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" alt="img placeholder">
                </div>
            </div>
            <div class="card-content">
                <div class="card-body text-center">
                    <h4>{{$user->name}}</h4>
                    <p class="">{{$user->email}}</p>
                    
                    <hr class="my-2">
                    <div class="d-flex justify-content-between">
                        <div class="float-left">
                            <i class="feather icon-star text-warning mr-50"></i> {{$user->id}}
                        </div>
                        <div class="float-right">
                            <i class="feather icon-briefcase text-primary mr-50"></i> 37 Projects
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    @empty


    <section id="auto-layout-columns" class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">No data available to display</h3>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        @if ($role =='admin')
                        <p>
                            You can add new data by clicking
    
                                 <button  class="btn btn-outline-primary btn-icon " onclick='Livewire.emit("openModal", "modal.crud-project", {{ json_encode(["user" => 55]) }})'>hare</button>
                            </p> 
                        @endif
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{---!! $nodate !!---}}
    @endforelse
 


    
    </div>


     
</div>
<!----->
 

 