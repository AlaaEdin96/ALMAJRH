@push('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/data-list-view.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
@endpush
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">..<code>{{$slag}} </code>..</h2>
                            <div class="breadcrumb-wrapper col-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="{{ route('project.create') }}">New project</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic example and Profile cards section start -->
                <section id="basic-examples">
                    <div class="row match-height">
                        
                      @php
                           $f =18;
                      @endphp 

{{----<div class="col-lg-4 col-sm-12">
    <div class="card">
        <div class="card-header d-flex align-items-start pb-0">
            <div>
                <h2 class="text-bold-700 mb-0">$834.600</h2>
                <p>الميزانية المنفقة</p>
            </div>
            <div class="avatar bg-rgba-success p-50 m-0">
                <div class="avatar-content">
                    <i class="feather icon-server text-success font-medium-5"></i>
                </div>
            </div>
        </div>
    </div>
</div>-----}}
 
 

<section id="profile-info">
    <div class="row">
        <div class="col-lg-3 col-12">

       
<!---filter--->  
<div class="sidebar-shop show" id="ecommerce-sidebar-toggler">

     
    <span class="sidebar-close-icon d-block d-md-none">
        <i class="feather icon-x"></i>
    </span>
    <div class="card">
        
        <div class="card-body">
            <div class="multi-range-price">
                <div class="multi-range-title pb-75">
                    <h6 class="filter-title mb-0">Activity</h6>
                </div>
                
                <ul class="list-unstyled price-range" id="price-range">
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="price-range" checked="" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">All</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="price-range" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">تم التأكيد</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="price-range" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">انتظار</span>
                        </span>
                    </li>
                  

                </ul>
            </div>
            <!-- /Price Filter -->
            <hr>
            <!-- /Price Slider -->
            <div class="price-slider">
                <div class="price-slider-title mt-1">
                    <h6 class="filter-title mb-0">engineer</h6>
                </div>
                <div class="price-slider">
                    <div class="price_slider_amount mb-2">
                    </div>
                    <fieldset class="form-group ">
                        <select class="custom-select" id="customSelect">
                            <option selected="">MOHAMED</option>
                            <option value="IT">Ali</option>
                            <option value="Blade Runner">Adem</option>
                             
                        </select>
                    </fieldset>
                </div>
            </div>

<hr>
 <!-- /Price Slider -->

  <!-- /Price Slider -->
  @if (0 != 0)
  
  <div class="price-slider">
    <div class="price-slider-title mt-1">
        <h6 class="filter-title mb-0">Financier</h6>
    </div>
    <div class="price-slider">
        <div class="price_slider_amount mb-2">
        </div>
        <fieldset class="form-group ">
            <select class="custom-select" id="customSelect">
                <option selected="">....</option>
               
                 @forelse ($supporters as $supporter)
                 <option value="Blade Runner">{{$supporter->name}}</option>
  
                 @empty
                     
                 @endforelse
            </select>
        </fieldset>
    </div>
</div>  
<hr>
  @endif
 


<!-- /Price Slider -->
 <section id="pick-a-date">
    <div class="price-slider">
        <div class="price-slider-title mt-1">
            <h6 class="filter-title mb-0">Date</h6>
        </div>
        <div class="price-slider">
           
            <section id="pick-a-date">
                <div class="card">
                    <div class="card-body">
                         
                           
                        <div class="">
                            <p>تاريخ البداء</p>
                           <form>
                               <input type="text" class="form-control pickadate picker__input" readonly="" id="P1636511606" aria-haspopup="true" aria-readonly="false" aria-owns="P1636511606_root"><div class="picker" id="P1636511606_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div class="picker__month">July</div><div class="picker__year">2022</div><div class="picker__nav--prev" data-nav="-1" tabindex="0" role="button" aria-controls="P1636511606_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" tabindex="0" role="button" aria-controls="P1636511606_table" title="Next month"> </div></div><table class="picker__table" id="P1636511606_table" role="grid" aria-controls="P1636511606" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td><div class="picker__day picker__day--outfocus" data-pick="1656194400000" id="P1636511606_1656194400000" tabindex="0" role="gridcell" aria-label="26 June, 2022">26</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656280800000" id="P1636511606_1656280800000" tabindex="0" role="gridcell" aria-label="27 June, 2022">27</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656367200000" id="P1636511606_1656367200000" tabindex="0" role="gridcell" aria-label="28 June, 2022">28</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656453600000" id="P1636511606_1656453600000" tabindex="0" role="gridcell" aria-label="29 June, 2022">29</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656540000000" id="P1636511606_1656540000000" tabindex="0" role="gridcell" aria-label="30 June, 2022">30</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656626400000" id="P1636511606_1656626400000" tabindex="0" role="gridcell" aria-label="1 July, 2022">1</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656712800000" id="P1636511606_1656712800000" tabindex="0" role="gridcell" aria-label="2 July, 2022">2</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1656799200000" id="P1636511606_1656799200000" tabindex="0" role="gridcell" aria-label="3 July, 2022">3</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656885600000" id="P1636511606_1656885600000" tabindex="0" role="gridcell" aria-label="4 July, 2022">4</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656972000000" id="P1636511606_1656972000000" tabindex="0" role="gridcell" aria-label="5 July, 2022">5</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657058400000" id="P1636511606_1657058400000" tabindex="0" role="gridcell" aria-label="6 July, 2022">6</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657144800000" id="P1636511606_1657144800000" tabindex="0" role="gridcell" aria-label="7 July, 2022">7</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657231200000" id="P1636511606_1657231200000" tabindex="0" role="gridcell" aria-label="8 July, 2022">8</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657317600000" id="P1636511606_1657317600000" tabindex="0" role="gridcell" aria-label="9 July, 2022">9</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1657404000000" id="P1636511606_1657404000000" tabindex="0" role="gridcell" aria-label="10 July, 2022">10</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657490400000" id="P1636511606_1657490400000" tabindex="0" role="gridcell" aria-label="11 July, 2022">11</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657576800000" id="P1636511606_1657576800000" tabindex="0" role="gridcell" aria-label="12 July, 2022">12</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657663200000" id="P1636511606_1657663200000" tabindex="0" role="gridcell" aria-label="13 July, 2022">13</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657749600000" id="P1636511606_1657749600000" tabindex="0" role="gridcell" aria-label="14 July, 2022">14</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657836000000" id="P1636511606_1657836000000" tabindex="0" role="gridcell" aria-label="15 July, 2022">15</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657922400000" id="P1636511606_1657922400000" tabindex="0" role="gridcell" aria-label="16 July, 2022">16</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1658008800000" id="P1636511606_1658008800000" tabindex="0" role="gridcell" aria-label="17 July, 2022">17</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658095200000" id="P1636511606_1658095200000" tabindex="0" role="gridcell" aria-label="18 July, 2022">18</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658181600000" id="P1636511606_1658181600000" tabindex="0" role="gridcell" aria-label="19 July, 2022">19</div></td><td><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1658268000000" id="P1636511606_1658268000000" tabindex="0" role="gridcell" aria-label="20 July, 2022" aria-activedescendant="1658268000000">20</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658354400000" id="P1636511606_1658354400000" tabindex="0" role="gridcell" aria-label="21 July, 2022">21</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658440800000" id="P1636511606_1658440800000" tabindex="0" role="gridcell" aria-label="22 July, 2022">22</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658527200000" id="P1636511606_1658527200000" tabindex="0" role="gridcell" aria-label="23 July, 2022">23</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1658613600000" id="P1636511606_1658613600000" tabindex="0" role="gridcell" aria-label="24 July, 2022">24</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658700000000" id="P1636511606_1658700000000" tabindex="0" role="gridcell" aria-label="25 July, 2022">25</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658786400000" id="P1636511606_1658786400000" tabindex="0" role="gridcell" aria-label="26 July, 2022">26</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658872800000" id="P1636511606_1658872800000" tabindex="0" role="gridcell" aria-label="27 July, 2022">27</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658959200000" id="P1636511606_1658959200000" tabindex="0" role="gridcell" aria-label="28 July, 2022">28</div></td><td><div class="picker__day picker__day--infocus" data-pick="1659045600000" id="P1636511606_1659045600000" tabindex="0" role="gridcell" aria-label="29 July, 2022">29</div></td><td><div class="picker__day picker__day--infocus" data-pick="1659132000000" id="P1636511606_1659132000000" tabindex="0" role="gridcell" aria-label="30 July, 2022">30</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1659218400000" id="P1636511606_1659218400000" tabindex="0" role="gridcell" aria-label="31 July, 2022">31</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659304800000" id="P1636511606_1659304800000" tabindex="0" role="gridcell" aria-label="1 August, 2022">1</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659391200000" id="P1636511606_1659391200000" tabindex="0" role="gridcell" aria-label="2 August, 2022">2</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659477600000" id="P1636511606_1659477600000" tabindex="0" role="gridcell" aria-label="3 August, 2022">3</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659564000000" id="P1636511606_1659564000000" tabindex="0" role="gridcell" aria-label="4 August, 2022">4</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659650400000" id="P1636511606_1659650400000" tabindex="0" role="gridcell" aria-label="5 August, 2022">5</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659736800000" id="P1636511606_1659736800000" tabindex="0" role="gridcell" aria-label="6 August, 2022">6</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1658268000000" disabled="" aria-controls="P1636511606">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="P1636511606">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="P1636511606">Close</button></div></div></div></div></div></div>
                           </form>
                       </div>
                       <div class="">
                        <p>تاريخ الانتهاء</p>
                       <form>
                           <input type="text" class="form-control pickadate picker__input" readonly="" id="P1636511606" aria-haspopup="true" aria-readonly="false" aria-owns="P1636511606_root"><div class="picker" id="P1636511606_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div class="picker__month">July</div><div class="picker__year">2022</div><div class="picker__nav--prev" data-nav="-1" tabindex="0" role="button" aria-controls="P1636511606_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" tabindex="0" role="button" aria-controls="P1636511606_table" title="Next month"> </div></div><table class="picker__table" id="P1636511606_table" role="grid" aria-controls="P1636511606" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td><div class="picker__day picker__day--outfocus" data-pick="1656194400000" id="P1636511606_1656194400000" tabindex="0" role="gridcell" aria-label="26 June, 2022">26</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656280800000" id="P1636511606_1656280800000" tabindex="0" role="gridcell" aria-label="27 June, 2022">27</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656367200000" id="P1636511606_1656367200000" tabindex="0" role="gridcell" aria-label="28 June, 2022">28</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656453600000" id="P1636511606_1656453600000" tabindex="0" role="gridcell" aria-label="29 June, 2022">29</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656540000000" id="P1636511606_1656540000000" tabindex="0" role="gridcell" aria-label="30 June, 2022">30</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656626400000" id="P1636511606_1656626400000" tabindex="0" role="gridcell" aria-label="1 July, 2022">1</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656712800000" id="P1636511606_1656712800000" tabindex="0" role="gridcell" aria-label="2 July, 2022">2</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1656799200000" id="P1636511606_1656799200000" tabindex="0" role="gridcell" aria-label="3 July, 2022">3</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656885600000" id="P1636511606_1656885600000" tabindex="0" role="gridcell" aria-label="4 July, 2022">4</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656972000000" id="P1636511606_1656972000000" tabindex="0" role="gridcell" aria-label="5 July, 2022">5</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657058400000" id="P1636511606_1657058400000" tabindex="0" role="gridcell" aria-label="6 July, 2022">6</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657144800000" id="P1636511606_1657144800000" tabindex="0" role="gridcell" aria-label="7 July, 2022">7</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657231200000" id="P1636511606_1657231200000" tabindex="0" role="gridcell" aria-label="8 July, 2022">8</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657317600000" id="P1636511606_1657317600000" tabindex="0" role="gridcell" aria-label="9 July, 2022">9</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1657404000000" id="P1636511606_1657404000000" tabindex="0" role="gridcell" aria-label="10 July, 2022">10</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657490400000" id="P1636511606_1657490400000" tabindex="0" role="gridcell" aria-label="11 July, 2022">11</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657576800000" id="P1636511606_1657576800000" tabindex="0" role="gridcell" aria-label="12 July, 2022">12</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657663200000" id="P1636511606_1657663200000" tabindex="0" role="gridcell" aria-label="13 July, 2022">13</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657749600000" id="P1636511606_1657749600000" tabindex="0" role="gridcell" aria-label="14 July, 2022">14</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657836000000" id="P1636511606_1657836000000" tabindex="0" role="gridcell" aria-label="15 July, 2022">15</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657922400000" id="P1636511606_1657922400000" tabindex="0" role="gridcell" aria-label="16 July, 2022">16</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1658008800000" id="P1636511606_1658008800000" tabindex="0" role="gridcell" aria-label="17 July, 2022">17</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658095200000" id="P1636511606_1658095200000" tabindex="0" role="gridcell" aria-label="18 July, 2022">18</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658181600000" id="P1636511606_1658181600000" tabindex="0" role="gridcell" aria-label="19 July, 2022">19</div></td><td><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1658268000000" id="P1636511606_1658268000000" tabindex="0" role="gridcell" aria-label="20 July, 2022" aria-activedescendant="1658268000000">20</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658354400000" id="P1636511606_1658354400000" tabindex="0" role="gridcell" aria-label="21 July, 2022">21</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658440800000" id="P1636511606_1658440800000" tabindex="0" role="gridcell" aria-label="22 July, 2022">22</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658527200000" id="P1636511606_1658527200000" tabindex="0" role="gridcell" aria-label="23 July, 2022">23</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1658613600000" id="P1636511606_1658613600000" tabindex="0" role="gridcell" aria-label="24 July, 2022">24</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658700000000" id="P1636511606_1658700000000" tabindex="0" role="gridcell" aria-label="25 July, 2022">25</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658786400000" id="P1636511606_1658786400000" tabindex="0" role="gridcell" aria-label="26 July, 2022">26</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658872800000" id="P1636511606_1658872800000" tabindex="0" role="gridcell" aria-label="27 July, 2022">27</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658959200000" id="P1636511606_1658959200000" tabindex="0" role="gridcell" aria-label="28 July, 2022">28</div></td><td><div class="picker__day picker__day--infocus" data-pick="1659045600000" id="P1636511606_1659045600000" tabindex="0" role="gridcell" aria-label="29 July, 2022">29</div></td><td><div class="picker__day picker__day--infocus" data-pick="1659132000000" id="P1636511606_1659132000000" tabindex="0" role="gridcell" aria-label="30 July, 2022">30</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1659218400000" id="P1636511606_1659218400000" tabindex="0" role="gridcell" aria-label="31 July, 2022">31</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659304800000" id="P1636511606_1659304800000" tabindex="0" role="gridcell" aria-label="1 August, 2022">1</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659391200000" id="P1636511606_1659391200000" tabindex="0" role="gridcell" aria-label="2 August, 2022">2</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659477600000" id="P1636511606_1659477600000" tabindex="0" role="gridcell" aria-label="3 August, 2022">3</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659564000000" id="P1636511606_1659564000000" tabindex="0" role="gridcell" aria-label="4 August, 2022">4</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659650400000" id="P1636511606_1659650400000" tabindex="0" role="gridcell" aria-label="5 August, 2022">5</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659736800000" id="P1636511606_1659736800000" tabindex="0" role="gridcell" aria-label="6 August, 2022">6</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1658268000000" disabled="" aria-controls="P1636511606">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="P1636511606">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="P1636511606">Close</button></div></div></div></div></div></div>
                       </form>
                   </div>
                    
                        
                           
                        
                    </div>
                </div>
            </section>
        </div>
    </div>
    
 </section>


            <!-- /Price Range -->
            <hr>
            <!-- Categories Starts -->
            <div id="product-categories">
                <div class="product-category-title">
                    <h6 class="filter-title mb-1">Categories</h6>
                </div>
                <ul class="list-unstyled categories-list">
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false" checked="">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Appliances</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50"> Audio</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Cameras &amp; Camcorders</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Car Electronics &amp; GPS</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Cell Phones</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Computers &amp; Tablets</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50"> Health, Fitness &amp; Beauty</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Office &amp; School Supplies</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">TV &amp; Home Theater</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Video Games
                            </span>
                        </span>
                    </li>

                </ul>
            </div>
            <!-- Categories Ends -->
            <hr>
            <!-- Brands -->
            <div class="brands">
                <div class="brand-title mt-1 pb-1">
                    <h6 class="filter-title mb-0">Taskes</h6>
                </div>
                <div class="brand-list" id="brands">
                    <ul class="list-unstyled">
                        @php
                            $tasks =['','']
                        @endphp
@forelse ($tasks as $task )
<li class="d-flex justify-content-between align-items-center py-25">
    <span class="vs-checkbox-con vs-checkbox-primary">
        <input type="checkbox" value="false">
        <span class="vs-checkbox">
            <span class="vs-checkbox--check">
                <i class="vs-icon feather icon-check"></i>
            </span>
        </span>
        <span>oooooo</span>
    </span>
    <span>$746</span>
</li>
@empty
    
@endforelse

                     
                       
                         
                    </ul>
                </div>
            </div>
            <!-- /Brand -->
            <hr>
            
            
            <!-- Clear Filters Starts -->
            <div id="clear-filters">
                <button class="btn btn-block btn-primary waves-effect waves-light">Serch</button>
            </div>
            <!-- Clear Filters Ends -->

        </div>
    </div>
</div> 
<!---end filter--->             



        </div>
        <div class="col-lg-6 col-12">
          
            <div class="form-group">
                <div id="">
                    <button  onclick='Livewire.emit("openModal", "modal.crud-fatorh", {{ json_encode(["keyimg" => 0,"images"=>$invokes]) }})' class="btn btn-block btn-primary waves-effect waves-light">اضافة فاتورة جديد</button>
                </div>             </div>


@forelse ($invokes as $invoke )
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-start align-items-center mb-1">
            <div class="avatar mr-1">
                <img src="../../../app-assets/images/profile/user-uploads/user-01.jpg" alt="avtar img holder" height="45" width="45">
            </div>
            <div class="user-page-info">
                <p class="mb-0">Leeanna Alvord</p>
                <span class="font-small-2">12 Dec 2018 at 1:16 AM</span>
            </div>
        </div>



        <div class="">
            <h5>{{$invoke->taitel}}
            </h5>
            <p class="text-muted">{{$invoke->mission->taitel}}</p>
            <div class="ecommerce-details-price d-flex flex-wrap">

                <p class="text-primary font-medium-3 mr-1 mb-0">${{$invoke->mony}}</p>
                
                 @if ($invoke->check_user_id != null)
                 <span class="pl-1 font-medium-3 border-left">
                 <span class="text-success">Been confirmed
                </span>
             </span>  
                 @endif
               
             </div>
            
            
            
            
            <hr>
            
            <br>


@if (auth()->user()->role == 'admin')
    @if ($invoke->check_user_id == null )
    <div class="d-flex flex-column flex-sm-row">
    <button  type="button" onclick='Livewire.emit("openModal", "modal.confirmation-fatorh",{{ json_encode(["fatorh_id" => $invoke->id]) }})'  class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">تأكيد</button>
     </div>
@endif 
@endif
           
          
            <hr>
            
            
            
            
        </div>
            
        
       
        
         

        <div>
 


            @if (count($invoke->images) == 0)
            <img class="img-fluid card-img-top rounded-sm mb-2" src="../../../app-assets/images/profile/post-media/2.jpg" alt="avtar img holder">
             
            @else
            <div  class="imgs-grid " onclick='Livewire.emit("openModal", "modal.img-test", {{ json_encode(["keyimg" => 0,"images"=>$invoke->images]) }})'>
                <div class="imgs-grid-image">
                    <div class="image-wrap">
                        <img class="img-fluid card-img-top rounded-sm mb-2" src="{{ asset('storage/'.$invoke->images[0]->url) }}" alt="avtar img holder title=">
                        <div class="view-all">
                            <span class="view-all-cover"></span>
                                <span class="view-all-text">View all {{count($invoke->images)}} images</span>
                            </div>
                        </div>
                    </div>
            </div>      
               
            @endif



 
                
    
          
        <!-- Code injected by live-server -->
        
  
    
</div>

        {{------  <div class="d-flex justify-content-start align-items-center mb-2">
            <div class="avatar mr-50">
                <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" height="30" width="30">
            </div>
            <div class="user-page-info">
                <h6 class="mb-0">Jeanie Bulgrin</h6>
                <span class="font-small-2">blockiness pandemy metaxylene speckle coppy</span>
            </div>
            <div class="ml-auto cursor-pointer">
                <i class="feather icon-heart mr-50"></i>
                <i class="feather icon-message-square"></i>
            </div>
        </div>
        
        <fieldset class="form-label-group mb-50">
            <textarea class="form-control" id="label-textarea" rows="3" placeholder="Add Comment"></textarea>
            <label for="label-textarea">Add Comment</label>
        </fieldset>
        <button type="button" class="btn btn-sm btn-primary waves-effect waves-light">Post Comment</button>
    
        -------}}
     </div>
</div>
@empty
<section id=" " class=" ">
    <div class=" ">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">No date</h3>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>
                        No one has created a <code class="highlighter-rouge">.Mission</code>. for this project so far
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
   
@endforelse
            
          
        </div>
        <div class="col-lg-3 col-12">

            <div class=" ">
                <!-- Block level buttons with icon -->
                <div class="form-group">
<a href="/Task/{{$slag}}"><button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">Mission</button>
</a>
                </div>
            </div>


            <div class=" ">
                <!-- Block level buttons with icon -->
                <div class="form-group">
                    <a href="/invoke/{{$slag}}"><button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">Invoices</button>
                    </a>
                </div>
            </div>

            <div class=" ">
                <!-- Block level buttons with icon -->
                <div class="form-group">
                    <button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light">Work schedule</button>
                </div>
            </div>
        


           {{----@livewire('component.team')   -----}} 
{{----@livewire('component.file')-----}}
            

       
 <!--------->      
        </div>
    </div>
   
</section>

</section>
                <!-- // Basic example and Profile cards section end -->
    
                <!-- Overlay Image and Chat Section Starts -->
              
                <!-- Overlay Image and Chat Section Starts -->
    
                <!-- Admin and Video Section Starts -->
              
                <!-- Admin and Video Section Starts -->
    
                <!-- Timeline Starts -->
             
                <!-- Timeline Ends -->
    
            </div>
        </div>

        @push('js')
            

        <!-- BEGIN: Page Vendor JS-->
        <script src="../../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
        <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
        <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
        <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
        <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
        <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
        <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
        <!-- END: Page Vendor JS-->
    
        <!-- BEGIN: Theme JS-->
        <script src="../../../app-assets/js/core/app-menu.js"></script>
        <script src="../../../app-assets/js/core/app.js"></script>
        <script src="../../../app-assets/js/scripts/components.js"></script>
        <!-- END: Theme JS-->
    
        <!-- BEGIN: Page JS-->
            @endpush