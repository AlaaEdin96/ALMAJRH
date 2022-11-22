
    <div class="col-md-6 col-12">
        <div class="card">
          
   

            <div class="card-header d-flex justify-content-between pb-0">
                <h4 class="card-title">Filtar</h4>
            </div>
            <div class="card-content">
                <div class="card-body pt-0">
                    <fieldset class="form-group">
                        <select class="form-control" wire:model="team_id">
                            <option>All</option>
                            @foreach ($teams as $team)
                            <option value="{{$team->id}}">{{$team->project_time}}</option>  
                            @endforeach
                        </select>
                    </fieldset>
                    @error('team_id') <div class="alert alert-danger" role="alert">
                        <p class="mb-0">{{ $message }} </p>
                    </div>   
                    @enderror  
                    <div>
                        @if (session()->has('message'))
                                <div class="alert alert-success">
                                  {{ session('message') }}
                              </div>
                           @endif
                       </div> 



                    <a  wire:click="filter()" class="btn btn-primary shadow waves-effect waves-light">بحت <i class="feather icon-chevrons-right"></i></a>
                </div>
            </div>
        </div>
    </div>
