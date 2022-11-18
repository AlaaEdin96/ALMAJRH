<div>
    <!-- Basic example and Profile cards section start -->
    <section id="basic-examples">
     <div class="row match-height"> 
       @foreach ($users as $user)
       <div class="col-xl-3 col-md-6 col-sm-12 profile-card-2">
        <div class="card" style="height: 329.656px;">
         
            <div class="card-content">
                <div class="card-body text-center mx-auto">
                    <div class="avatar avatar-xl">
                        @if (count($user->images) == 0)
                        <img class="img-fluid" src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" alt="img placeholder">

                        @else
                        <img class="img-fluid" src="{{asset('storage/'.$user->images[0]->url) }} " alt="img placeholder">

                        @endif
                    </div>
                    
                    <h5 class="mt-1">{{$user->name}}</h5>
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
                    <a href="{{  route('profileuser' , ['id'=>$user->id]) }}"> <button class="btn gradient-light-primary btn-block mt-2 waves-effect waves-light">More</button></a>
                </div>
            </div>
           
        </div>
    </div>  
       @endforeach
     </div>
 </section>
 
 </div>