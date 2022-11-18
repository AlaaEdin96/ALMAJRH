<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel33">Add File </h4>
    </div>
    <div>
             @if (session()->has('message'))
                     <div class="alert alert-success">
                       {{ session('message') }}
                   </div>
                @endif
            </div>


    <form action="#">
        <div class="modal-body">
            <div class="add-new-data show" id="add-new-data">
        
                <div class="data-items pb-3 ps">
                    <div class="data-fields px-2 mt-3">
                        <div class="row">                            
                            <div class="col-sm-12 data-field-col ">
                                <label for="data-category"> اختر  المهمه </label>
                                <select wire:model="mission_id" class="form-control"  >
                                    <option>.......</option>
                                    @forelse ($taskes as $taske)
                                    <option  value="{{$taske->id}}">{{$taske->taitl}}</option>
                            @empty
                            @endforelse
                                </select>
                            </div>
                            @error('mission_id') <div class="alert alert-danger" role="alert">
                                <p class="mb-0">{{ $message }} </p>
                            </div>   
                            @enderror 
                            
                            
 
                            <div class="col-sm-12 data-field-col ">
                                <label for="data-status">الوصف</label>
                                <textarea wire:model="taitel"  class="form-control"></textarea>
                            </div>
                            @error('taitel') <div class="alert alert-danger" role="alert">
                                <p class="mb-0">{{ $message }} </p>
                            </div>   
                            @enderror 
                                                            
                            <div class="col-sm-12 data-field-col data-list-upload">
        
                                <form >                                      
                                         <button type="submit">Save Photo</button>
                                     </form>
        
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
                    </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 516px; left: 393px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 467px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; left: -7px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        
            </div>
        
        
        
        </div>
        <div class="modal-footer">
            <button wire:click="save()" type="button" class="btn btn-primary waves-effect waves-light">Accept</button>
        </div>
    </form>
</div>    












