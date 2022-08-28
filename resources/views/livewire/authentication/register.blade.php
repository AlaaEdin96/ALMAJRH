


<div class="card bg-authentication rounded-0 mb-0">
    <div class="row m-0">
        <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
            <img src="../../../app-assets/images/pages/register.jpg" alt="branding logo">
        </div>
        <div class="col-lg-6 col-12 p-0">
            <div class="card rounded-0 mb-0 p-2">
                <div class="card-header pt-50 pb-1">
                    <div class="card-title">
                        <h4 class="mb-0">Create Account</h4>
                    </div>
                </div>
                <p class="px-2">Fill the below form to create a new account.</p>
                <div class="card-content">
                    <div class="card-body pt-0">
                        <form >
                            <div class="form-label-group">
                                <input type="text" wire:model="name" class="form-control"   >
                                <label for="inputName">Name</label>
                            </div>
                            @error('name') <div class="alert alert-danger" role="alert">
                                <p class="mb-0">{{ $message }} </p>
                            </div>   
                            @enderror 
                            <div class="form-label-group">
                                <input type="email" wire:model="email" class="form-control"   >
                                <label for="inputEmail">Email</label>
                            </div>
                            @error('email') <div class="alert alert-danger" role="alert">
                                <p class="mb-0">{{ $message }} </p>
                            </div>   
                            @enderror 
                            <div class="form-label-group">
                                <input type="password" wire:model="password" class="form-control"  >
                                <label for="inputPassword">Password</label>
                            </div>
                            @error('password') <div class="alert alert-danger" role="alert">
                                <p class="mb-0">{{ $message }} </p>
                            </div>   
                            @enderror 
                            <div class="form-label-group">
                                <input type="password" wire:model="password_conf" class="form-control"   >
                                <label for="inputConfPassword">Confirm Password</label>
                            </div>
                            @error('password_conf') <div class="alert alert-danger" role="alert">
                                <p class="mb-0">{{ $message }} </p>
                            </div>   
                            @enderror 
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="card-content">
                                        <div class=" ">
                                            
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-inline-block mr-2">
                                                    <fieldset wire:click="code('user')">
                                                        <div class="vs-radio-con">
                                                            <input   type="radio" name="vueradio"   value="false">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">User</span>
                                                        </div>
                                                    </fieldset>
                                                </li>
                                                <li class="d-inline-block mr-2">
                                                    <fieldset wire:click="code('compane')">
                                                        <div class="vs-radio-con">
                                                            <input   type="radio" name="vueradio" value="false">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Compane</span>
                                                        </div>
                                                    </fieldset>
                                                </li>
                                            
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($iscompane)
                            <div class="form-label-group">
                                <input type="password"  wire:model="compane_code" class="form-control"   >
                                
                            </div>  
                            @endif
                            
                            @error('compane_code') <div class="alert alert-danger" role="alert">
                                <p class="mb-0">{{ $message }} </p>
                            </div>   
                            @enderror
                            
                            <a   wire:click="store()" class="btn btn-outline-primary float-left btn-inline mb-50 waves-effect waves-light">Register</a>
                            <button wire:click="store()" class="btn btn-primary float-right btn-inline mb-50 waves-effect waves-light">Register
                        
                    </button></form></div>
                </div>
              
            </div>
        </div>
    </div>
</div>