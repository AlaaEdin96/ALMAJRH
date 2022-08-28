 
<div>
  
    
    <div class="row match-height">
    @forelse ($projects as $project )`  
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="height: 478.812px;">
            <div class="card-content">
                <div class="card-body">
                    <img class="card-img img-fluid mb-1" src="../../../app-assets/images/pages/content-img-2.jpg" alt="Card image cap">
                    <h5 class="mt-1">{{$project->code}}</h5>
                    <p class="card-text">By Pixinvent Creative Studio</p>
                    <hr class="my-1">
                    <div class="d-flex justify-content-between mt-2">
                        <div class="float-left">
                             <p class="">{{$project->id}}</p>
                        </div>
                        <div class="float-right">
                             <p class="">Delivery Date</p>
                        </div>
                    </div>
                    <a href="{{ route('Task',['id'=>$project->id]) }}"> <button class="btn gradient-light-primary btn-block mt-2 waves-effect waves-light">  
                        More </button></a>
                   
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
 

 