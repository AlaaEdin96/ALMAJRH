<section id="profile-info">
    <div class="row">
        
        <div class="col-lg-9 col-12">
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">العطائات</h4>

                                <div class="form-group">
                                     <button  type="button" onclick='Livewire.emit("openModal", "modal.crud-sponsers", {{ json_encode(["project_id" => 1,"taitel"=>"اضافة عطاء"]) }})'  class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">اضافة عطاء</button>

                                </div>
                                <div class="form-group">
                                    <button  type="button" onclick='Livewire.emit("openModal", "modal.crud-sponsers", {{ json_encode(["project_id" => 1,"taitel"=>"ارجاع عطاء"]) }})'  class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">ارجاع عطاء</button>
 
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                     <div class="table-responsive">
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 155.844px;">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 155.844px;">Position</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 155.844px;">Office</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50.9375px;">Age</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 127.672px;">Start date</th>
                                            </thead>
                                            <tbody>
                                                
                                                @forelse ($momuels as $momuel )
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{$momuel->team->project->code}}</td>
                                                    <td>{{$momuel->team->user->name}}</td>
                                                    <td>{{$momuel->creted_by_user_id}}</td>
                                                    <td>${{$momuel->mony}}</td>
                                                    <td>2008/11/28</td>
                                                </tr>  
                                                @empty
                                                    
                                                @endforelse
                                           
                                              </tbody>
                                           
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 29 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
     <!----tabel------->
     <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">العهد</h4>

                        <div class="form-group">
                            <button  type="button" onclick='Livewire.emit("openModal", "modal.crud-sponsers", {{ json_encode(["project_id" => 1]) }})'  class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">Add Money</button>
                         </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                             <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 155.844px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 155.844px;">Position</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 155.844px;">Office</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50.9375px;">Age</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 127.672px;">Start date</th>
                                    </thead>
                                    <tbody>
                                        
                                        @forelse ($masrofats as $momuel )
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$momuel->team->project->code}}</td>
                                            <td>{{$momuel->team->user->name}}</td>
                                            <td>{{$momuel->creted_by_user_id}}</td>
                                            <td>${{$momuel->mony}}</td>
                                            <td>2008/11/28</td>
                                        </tr>  
                                        @empty
                                            
                                        @endforelse
                                   
                                      </tbody>
                                   
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 29 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!----------->
 
        </div>
        <div class="col-lg-3 col-12">
           
            <div class=" ">
                <!-- Block level buttons with icon -->
                <div class="form-group" >
                    <a href="{{ route('invokes.invoke') }}" ><button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">الفاوتير</button>
                    </a> 
                </div>
            </div>

            <div class=" ">
                <!-- Block level buttons with icon -->
                <div class="form-group" >
                    <a href="{{ route('invokes.worker') }}" ><button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">العهد</button>
                    </a> 
                </div>
            </div>

  <div class=" ">
                <!-- Block level buttons with icon -->
                <div class="form-group" >
                    <a href="{{ route('invokes.daemen') }}" ><button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">العطائات</button>
                    </a> 
                </div>
            </div>



            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>الداعمين</h4>
                    <i class="feather icon-more-horizontal cursor-pointer"></i>
                </div>
                <div class="card-body">
@forelse ($sponsers as $sponser )
<div class="d-flex justify-content-start align-items-center mb-1">
    <div class="avatar mr-50">
        <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="avtar img holder" height="35" width="35">
    </div>
    <div class="user-page-info">
        <h6 class="mb-0">{{$sponser->user->name}}</h6>
        <span class="font-small-2">projects <code>{{$sponser->count_project}}</code></span>
    </div>
    <button type="button" class="btn btn-primary btn-icon ml-auto waves-effect waves-light"><i class="feather icon-credit-card"></i></button>
</div>  
@empty
    <h5>no date</h5>
@endforelse

                    
                    
                  
                 
                    <button type="button" class="btn btn-primary w-100 mt-1 waves-effect waves-light"><i class="feather icon-plus mr-25"></i>Load More</button>
                </div>
            </div>
          
            
             

            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-eye text-info font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">{{$momuels->sum('mony')}}</h2>
                        <p class="mb-0 line-ellipsis">المبلغ الاجمالي</p>
                    </div>
                </div>
            </div>

            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-eye text-info font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">{{$masrofats->sum('mony')}}</h2>
                        <p class="mb-0 line-ellipsis">المصروفات</p>
                    </div>
                </div>
            </div>



            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-eye text-info font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">{{$momuels->sum('mony') - $masrofats->sum('mony')}}</h2>
                        <p class="mb-0 line-ellipsis">الباقي</p>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button type="button" class="btn btn-primary block-element mb-1 waves-effect waves-light">Load More</button>
        </div>
    </div>
</section>