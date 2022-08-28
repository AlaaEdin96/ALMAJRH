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
                                                                    <span class=""> I accept the terms &amp; conditions.</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <button wire:click="store()" class="btn btn-primary float-right btn-inline mb-50 waves-effect waves-light">Register
                                                
                                            </button></form></div>
                                        </div>
                                    </div>
