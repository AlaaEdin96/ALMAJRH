<div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Create Account</h4>
                                            </div>
                                        </div>
                                         <div class="card-content">
                                            <div class="card-body pt-0">
                                                 
                                                    <div class="form-label-group">
                                                        <input wire:model="name" type="text"  class="form-control" placeholder="Name" >
                                                        <label for="inputName">Name</label>
                                                        @error('name') <div class="alert alert-danger" role="alert">
                                                            <p class="mb-0">{{ $message }} </p>
                                                        </div>   
                                                        @enderror 

                                                    </div>
                                                    <div class="form-label-group">
                                                        <input wire:model="email" type="email" class="form-control" placeholder="Email">
                                                        <label for="inputEmail">Email</label>
                                                        @error('email') <div class="alert alert-danger" role="alert">
                                                            <p class="mb-0">{{ $message }} </p>
                                                        </div>   
                                                        @enderror
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input  wire:model="password" type="password"  class="form-control" placeholder="Password" >
                                                        <label for="inputPassword">Password</label>
                                                        @error('password') <div class="alert alert-danger" role="alert">
                                                            <p class="mb-0">{{ $message }} </p>
                                                        </div>   
                                                        @enderror
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input wire:model="password_conf" type="password"  class="form-control" placeholder="Confirm Password">
                                                        <label for="inputConfPassword">Confirm Password</label>
                                                        @error('password_conf') <div class="alert alert-danger" role="alert">
                                                            <p class="mb-0">{{ $message }} </p>
                                                        </div>   
                                                        @enderror
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" checked="">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                 </div>
                                                            </fieldset>


                                                            <form action="#"    class="dropzone dropzo ne-area dz-clickable dz-started" id="dataListUpload">
                                                                <input type="file" wire:model="photos" multiple>
                                                                @error('photos') <span class="error">{{ $message }}</span> @enderror
                                                                   
                                                                <div class="dz-message">رفع الصور</div>
                                                        @forelse ($photos as $photo)
                                                        <div class="dz-preview dz-processing dz-image-preview dz-error"> 
                                                            <div class="dz-details"> 
                                                                  <div class="dz-filename">
                                                                   <span data-dz-name="">bgg.PNG</span>
                                                               </div>  
                                                                 <div class="dz-size" data-dz-size="">
                                                                   <strong>1.7</strong> KiB</div>  
                                                                     <img data-dz-thumbnail="" alt="bgg.PNG"  src="{{$photo->temporaryUrl()}}">
                                                                     </div>  
                                                                     <div class="dz-progress">
                                                                       <span class="dz-upload" data-dz-uploadprogress="" style="width: 100%;">
                                                                       </span>
                                                                   </div> 
                                                                    <div class="dz-success-mark">
                                                                       <span>✔</span>
                                                                   </div> 
                                                                    <div class="dz-error-mark">
                                                                       <span>✘</span></div> 
                                                                        <div class="dz-error-message">
                                                                           <span data-dz-errormessage="">[object Object]</span>
                                                                       </div>
                                                                   </div>  
                                                        @empty
                                                            
                                                        @endforelse
                                                                    </form>



                                                        </div>
                                                    </div>
                                                    <button wire:click="store()" class="btn btn-primary float-right btn-inline mb-50 waves-effect waves-light">Save
                                                
                                            </button> </div>
                                        </div>
                                    </div>
