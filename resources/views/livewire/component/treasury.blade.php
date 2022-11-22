<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between pb-0">
            <h4 class="card-title">الخزينة </h4>
            <div class="dropdown chart-dropdown">
                <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Last 7 Days
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                    <a class="dropdown-item" href="#">Last 28 Days</a>
                    <a class="dropdown-item" href="#">Last Month</a>
                    <a class="dropdown-item" href="#">Last Year</a>
                </div>
            </div>
        </div>
        <div class="card-content">
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                        <h1 class="font-large-2 text-bold-700 mt-2 mb-0">{{$total}}</h1>
                    </div>
                    <div class="col-sm-10 col-12 d-flex justify-content-center">
                        <div id="support-tracker-chart"></div>
                    </div>
                </div>
                <div class="chart-info d-flex justify-content-between">
                    <div class="text-center">
                        <p class="mb-50">العهد</p>
                        <span class="font-large-1">${{$ohda}}</span>
                    </div>
                    <div class="text-center">
                        <p class="mb-50">العطائات</p>
                        <span class="font-large-1"> {{$mablg}}</span>
                    </div>
                    <div class="text-center">
                        <p class="mb-50">العدد</p>
                        <span class="font-large-1">{{$count}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>