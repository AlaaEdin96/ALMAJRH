<div class="row  ">
    <div class="col-lg-4 col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between pb-0">
                <h4>الفواتير</h4>
                <div class="dropdown chart-dropdown">
                    <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Last 7 Days
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                        <a class="dropdown-item" href="#">Last 28 Days</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                         <tbody>
                            @foreach ($project->fatorhs($project->tayp)->get() as $fatorh)
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>{{$fatorh->mony}}</td>
                                <td>@mdo</td>
                                <td>:</td>
                              </tr> 
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between pb-0">
                <h4>المعاملات</h4>
                <div class="dropdown chart-dropdown">
                    <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Last 7 Days
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                        <a class="dropdown-item" href="#">Last 28 Days</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($project->finances as $finance)
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>{{$finance->mony}}</td>
                                <td>@mdo</td>
                                <td>:</td>
                              </tr> 
                            @endforeach
                          
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">الحالة الماليه</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <ul class="activity-timeline timeline-left list-unstyled">
                        
                        <li>
                            <div class="timeline-icon bg-warning">
                                <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                            </div>
                            <div class="timeline-info">
                                <p class="font-weight-bold mb-0">فواتير معلقة</p>
                                  <span class="font-small-3">{{$project->fatorh_pending}}</span>  
                            </div>
                        </li>
                        <li>
                            <div class="timeline-icon bg-danger">
                                <i class="feather icon-check font-medium-2 align-middle"></i>
                            </div>
                            <div class="timeline-info">
                                <p class="font-weight-bold mb-0">مرتجعات ماليه</p>
                                <span class="font-small-3">$40,000</span>
                            </div>
                         </li>
                        <li>
                            <div class="timeline-icon bg-success">
                                <i class="feather icon-check font-medium-2 align-middle"></i>
                            </div>
                            <div class="timeline-info">
                                <p class="font-weight-bold mb-0">كامل القيمة</p>
                                <span class="font-small-3">{{$project->total}}</span>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-icon bg-primary">
                                <i class="feather icon-check font-medium-2 align-middle"></i>
                            </div>
                            <div class="timeline-info">
                                <p class="font-weight-bold mb-0">المصروفات</p>
                               
                                <span class="font-small-3">{{$project->total_fatorh}}</span> 
                            </div>
                           
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>