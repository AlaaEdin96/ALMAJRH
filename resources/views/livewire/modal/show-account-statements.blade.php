
<div>


    <div class="card">
        <div class="card-header">
            <h4 class="mb-0">حساب :     {{$name}}</h4>
        </div>
        <div class="card-content">
            <div class="table-responsive mt-1">
                <table class="table table-hover-animation mb-0">
                    <thead>
                        <tr>
                            <th>ORDER</th>
                            <th>STATUS</th>
                            @if (IsAdmin())
                            <th>الممول</th>
                            @endif
                            <th>MONY</th>
                            
                            <th>START DATE</th>
                            <th>EST DEL. DT</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                      @foreach ($Accounts as $Account )
                           
                        <tr>
                            <td>#{{$Account->id}}</td>
                            <td><i class="fa fa-circle font-small-3 {{$this->color($Account->tayp)}} mr-50"></i>{{$Account->tayp}}</td>
                          
                            @if (IsAdmin())
                            <td class="p-1">
                                 {{$Account->from_user}}
                             </td>
                            @endif
                            <td>${{$Account->pris}}</td>
                            
                            <td>{{$Account->project_code}}</td>
                            <td>28/07/2018</td>
                        </tr> 
                      @endforeach  
                     
                    </tbody>
                   
                </table>
            </div>
           
        </div>
  
        <div class="row">
            <div class="col-sm-12 col-md-5">
               
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    {{ $Accounts->links() }}
                </div>
            </div>
        </div>


    </div>
</div>
