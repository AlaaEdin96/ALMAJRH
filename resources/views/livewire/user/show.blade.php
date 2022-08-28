@extends('layouts.master')

@section('content')
 @push('css')
  
 <!-- BEGIN: Vendor CSS-->
 <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
 <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
 <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
 <!-- END: Vendor CSS-->

  
 @endpush
      <!-- BEGIN: Content-->
     
    <!-- END: Content-->

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">..<code>مطاوع </code>..</h2>
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
                <!-- account setting page start -->
                <section id="page-account-settings">
                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                        <i class="feather icon-globe mr-50 font-medium-3"></i>
                                        General
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        Change Password
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                        <i class="feather icon-info mr-50 font-medium-3"></i>
                                        Info
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                        <i class="feather icon-camera mr-50 font-medium-3"></i>
                                        Social links
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-connections" data-toggle="pill" href="#account-vertical-connections" aria-expanded="false">
                                        <i class="feather icon-feather mr-50 font-medium-3"></i>
                                        Connections
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-notifications" data-toggle="pill" href="#account-vertical-notifications" aria-expanded="false">
                                        <i class="feather icon-message-circle mr-50 font-medium-3"></i>
                                        Notifications
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                                <div class="media">
                                                    <a href="javascript: void(0);">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" class="rounded mr-75" alt="profile image" height="64" width="64">
                                                    </a>
                                                    <div class="media-body mt-75">
                                                        <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light" for="account-upload">Upload new photo</label>
                                                            <input type="file" id="account-upload" hidden="">
                                                            <button class="btn btn-sm btn-outline-warning ml-50 waves-effect waves-light">Reset</button>
                                                        </div>
                                                        <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                                size of
                                                                800kB</small></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <form novalidate="">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Username</label>
                                                                    <input type="text" class="form-control" id="account-username" placeholder="Username" value="hermione007" required="" data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-name">Name</label>
                                                                    <input type="text" class="form-control" id="account-name" placeholder="Name" value="Hermione Granger" required="" data-validation-required-message="This name field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-e-mail">E-mail</label>
                                                                    <input type="email" class="form-control" id="account-e-mail" placeholder="Email" value="granger007@hogward.com" required="" data-validation-required-message="This email field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                                <p class="mb-0">
                                                                    Your email is not confirmed. Please check your inbox.
                                                                </p>
                                                                <a href="javascript: void(0);">Resend confirmation</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-company">Company</label>
                                                                <input type="text" class="form-control" id="account-company" placeholder="Company name">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                                changes</button>
                                                            <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                <form novalidate="">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-old-password">Old Password</label>
                                                                    <input type="password" class="form-control" id="account-old-password" required="" placeholder="Old Password" data-validation-required-message="This old password field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-new-password">New Password</label>
                                                                    <input type="password" name="password" id="account-new-password" class="form-control" placeholder="New Password" required="" data-validation-required-message="The password field is required" minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-retype-new-password">Retype New
                                                                        Password</label>
                                                                    <input type="password" name="con-password" class="form-control" required="" id="account-retype-new-password" data-validation-match-match="password" placeholder="New Password" data-validation-required-message="The Confirm password field is required" minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                                changes</button>
                                                            <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                                <form novalidate="">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="accountTextarea">Bio</label>
                                                                <textarea class="form-control" id="accountTextarea" rows="3" placeholder="Your Bio data here..."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-birth-date">Birth date</label>
                                                                    <input type="text" class="form-control birthdate-picker picker__input" required="" placeholder="Birth date" id="account-birth-date" data-validation-required-message="This birthdate field is required" readonly="" aria-haspopup="true" aria-readonly="false" aria-owns="account-birth-date_root"><div class="picker" id="account-birth-date_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div class="picker__month">July</div><div class="picker__year">2022</div><div class="picker__nav--prev" data-nav="-1" tabindex="0" role="button" aria-controls="account-birth-date_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" tabindex="0" role="button" aria-controls="account-birth-date_table" title="Next month"> </div></div><table class="picker__table" id="account-birth-date_table" role="grid" aria-controls="account-birth-date" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td><div class="picker__day picker__day--outfocus" data-pick="1656194400000" id="account-birth-date_1656194400000" tabindex="0" role="gridcell" aria-label="June, 26, 2022">26</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656280800000" id="account-birth-date_1656280800000" tabindex="0" role="gridcell" aria-label="June, 27, 2022">27</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656367200000" id="account-birth-date_1656367200000" tabindex="0" role="gridcell" aria-label="June, 28, 2022">28</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656453600000" id="account-birth-date_1656453600000" tabindex="0" role="gridcell" aria-label="June, 29, 2022">29</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1656540000000" id="account-birth-date_1656540000000" tabindex="0" role="gridcell" aria-label="June, 30, 2022">30</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656626400000" id="account-birth-date_1656626400000" tabindex="0" role="gridcell" aria-label="July, 1, 2022">1</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656712800000" id="account-birth-date_1656712800000" tabindex="0" role="gridcell" aria-label="July, 2, 2022">2</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1656799200000" id="account-birth-date_1656799200000" tabindex="0" role="gridcell" aria-label="July, 3, 2022">3</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656885600000" id="account-birth-date_1656885600000" tabindex="0" role="gridcell" aria-label="July, 4, 2022">4</div></td><td><div class="picker__day picker__day--infocus" data-pick="1656972000000" id="account-birth-date_1656972000000" tabindex="0" role="gridcell" aria-label="July, 5, 2022">5</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657058400000" id="account-birth-date_1657058400000" tabindex="0" role="gridcell" aria-label="July, 6, 2022">6</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657144800000" id="account-birth-date_1657144800000" tabindex="0" role="gridcell" aria-label="July, 7, 2022">7</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657231200000" id="account-birth-date_1657231200000" tabindex="0" role="gridcell" aria-label="July, 8, 2022">8</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657317600000" id="account-birth-date_1657317600000" tabindex="0" role="gridcell" aria-label="July, 9, 2022">9</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1657404000000" id="account-birth-date_1657404000000" tabindex="0" role="gridcell" aria-label="July, 10, 2022">10</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657490400000" id="account-birth-date_1657490400000" tabindex="0" role="gridcell" aria-label="July, 11, 2022">11</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657576800000" id="account-birth-date_1657576800000" tabindex="0" role="gridcell" aria-label="July, 12, 2022">12</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657663200000" id="account-birth-date_1657663200000" tabindex="0" role="gridcell" aria-label="July, 13, 2022">13</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657749600000" id="account-birth-date_1657749600000" tabindex="0" role="gridcell" aria-label="July, 14, 2022">14</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657836000000" id="account-birth-date_1657836000000" tabindex="0" role="gridcell" aria-label="July, 15, 2022">15</div></td><td><div class="picker__day picker__day--infocus" data-pick="1657922400000" id="account-birth-date_1657922400000" tabindex="0" role="gridcell" aria-label="July, 16, 2022">16</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1658008800000" id="account-birth-date_1658008800000" tabindex="0" role="gridcell" aria-label="July, 17, 2022">17</div></td><td><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1658095200000" id="account-birth-date_1658095200000" tabindex="0" role="gridcell" aria-label="July, 18, 2022" aria-activedescendant="1658095200000">18</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658181600000" id="account-birth-date_1658181600000" tabindex="0" role="gridcell" aria-label="July, 19, 2022">19</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658268000000" id="account-birth-date_1658268000000" tabindex="0" role="gridcell" aria-label="July, 20, 2022">20</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658354400000" id="account-birth-date_1658354400000" tabindex="0" role="gridcell" aria-label="July, 21, 2022">21</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658440800000" id="account-birth-date_1658440800000" tabindex="0" role="gridcell" aria-label="July, 22, 2022">22</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658527200000" id="account-birth-date_1658527200000" tabindex="0" role="gridcell" aria-label="July, 23, 2022">23</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1658613600000" id="account-birth-date_1658613600000" tabindex="0" role="gridcell" aria-label="July, 24, 2022">24</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658700000000" id="account-birth-date_1658700000000" tabindex="0" role="gridcell" aria-label="July, 25, 2022">25</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658786400000" id="account-birth-date_1658786400000" tabindex="0" role="gridcell" aria-label="July, 26, 2022">26</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658872800000" id="account-birth-date_1658872800000" tabindex="0" role="gridcell" aria-label="July, 27, 2022">27</div></td><td><div class="picker__day picker__day--infocus" data-pick="1658959200000" id="account-birth-date_1658959200000" tabindex="0" role="gridcell" aria-label="July, 28, 2022">28</div></td><td><div class="picker__day picker__day--infocus" data-pick="1659045600000" id="account-birth-date_1659045600000" tabindex="0" role="gridcell" aria-label="July, 29, 2022">29</div></td><td><div class="picker__day picker__day--infocus" data-pick="1659132000000" id="account-birth-date_1659132000000" tabindex="0" role="gridcell" aria-label="July, 30, 2022">30</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1659218400000" id="account-birth-date_1659218400000" tabindex="0" role="gridcell" aria-label="July, 31, 2022">31</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659304800000" id="account-birth-date_1659304800000" tabindex="0" role="gridcell" aria-label="August, 1, 2022">1</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659391200000" id="account-birth-date_1659391200000" tabindex="0" role="gridcell" aria-label="August, 2, 2022">2</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659477600000" id="account-birth-date_1659477600000" tabindex="0" role="gridcell" aria-label="August, 3, 2022">3</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659564000000" id="account-birth-date_1659564000000" tabindex="0" role="gridcell" aria-label="August, 4, 2022">4</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659650400000" id="account-birth-date_1659650400000" tabindex="0" role="gridcell" aria-label="August, 5, 2022">5</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1659736800000" id="account-birth-date_1659736800000" tabindex="0" role="gridcell" aria-label="August, 6, 2022">6</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1658095200000" disabled="" aria-controls="account-birth-date">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="account-birth-date">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="account-birth-date">Close</button></div></div></div></div></div></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="accountSelect">Country***</label>
                                                                <select class="form-control" id="accountSelect">
                                                                    <option>USA</option>
                                                                    <option>India</option>
                                                                    <option>Canada</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="languageselect2">Languages</label>
                                                                <select class="form-control select2-hidden-accessible" id="languageselect2" multiple="" data-select2-id="languageselect2" tabindex="-1" aria-hidden="true">
                                                                    <option value="English" selected="" data-select2-id="2">English</option>
                                                                    <option value="Spanish">Spanish</option>
                                                                    <option value="French">French</option>
                                                                    <option value="Russian">Russian</option>
                                                                    <option value="German">German</option>
                                                                    <option value="Arabic" selected="" data-select2-id="3">Arabic</option>
                                                                    <option value="Sanskrit">Sanskrit</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;">
                                                                <!---    <span class="selection">
                                                                        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                                            <ul class="select2-selection__rendered">
                                                                                <li class="select2-selection__choice" title="English" data-select2-id="4">
                                                                                    <span class="select2-selection__choice__remove" role="presentation">×
                                                                                        </span>English</li>
                                                                                        <li class="select2-selection__choice" title="Arabic" data-select2-id="5">
                                                                                            <span class="select2-selection__choice__remove" role="presentation">×
                                                                                                </span>Arabic</li><li class="select2-search select2-search--inline">
                                                                                                    <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;">
                                                                                                </li>
                                                                                            </ul>
                                                                                        </span>
                                                                                    </span> ---->
                                                                                    <span class="dropdown-wrapper" aria-hidden="true">
                                                                                        </span>
                                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-phone">Phone</label>
                                                                    <input type="text" class="form-control" id="account-phone" required="" placeholder="Phone number" value="(+656) 254 2568" data-validation-required-message="This phone number field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-website">Website</label>
                                                                <input type="text" class="form-control" id="account-website" placeholder="Website address">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="musicselect2">Favourite Music</label>
                                                                <select class="form-control select2-hidden-accessible" id="musicselect2" multiple="" data-select2-id="musicselect2" tabindex="-1" aria-hidden="true">
                                                                    <option value="Rock">Rock</option>
                                                                    <option value="Jazz" selected="" data-select2-id="7">Jazz</option>
                                                                    <option value="Disco">Disco</option>
                                                                    <option value="Pop">Pop</option>
                                                                    <option value="Techno">Techno</option>
                                                                    <option value="Folk" selected="" data-select2-id="8">Folk</option>
                                                                    <option value="Hip hop">Hip hop</option>
                                                                </select>
                                                                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="6" style="width: 100%;">
                                                                   <!---- <span class="selection">
                                                                        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                                            <ul class="select2-selection__rendered">
                                                                                <li class="select2-selection__choice" title="Jazz" data-select2-id="9">
                                                                                    <span class="select2-selection__choice__remove" role="presentation">×
                                                                                        </span>Jazz</li>
                                                                                        <li class="select2-selection__choice" title="Folk" data-select2-id="10">
                                                                                            <span class="select2-selection__choice__remove" role="presentation">×
                                                                                                </span>Folk</li>
                                                                                                <li class="select2-search select2-search--inline">
                                                                                                    <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;">
                                                                                                </li>
                                                                                            </ul>
                                                                                        </span>
                                                                                    </span> ---->
                                                                                    <span class="dropdown-wrapper" aria-hidden="true">
                                                                                        </span>
                                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="moviesselect2">Favourite movies</label>
                                                                <select class="form-control select2-hidden-accessible" id="moviesselect2" multiple="" data-select2-id="moviesselect2" tabindex="-1" aria-hidden="true">
                                                                    <option value="The Dark Knight" selected="" data-select2-id="12">The Dark Knight
                                                                    </option>
                                                                    <option value="Harry Potter" selected="" data-select2-id="13">Harry Potter</option>
                                                                    <option value="Airplane!">Airplane!</option>
                                                                    <option value="Perl Harbour">Perl Harbour</option>
                                                                    <option value="Spider Man">Spider Man</option>
                                                                    <option value="Iron Man" selected="" data-select2-id="14">Iron Man</option>
                                                                    <option value="Avatar">Avatar</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="The Dark Knight
                                                                    " data-select2-id="15"><span class="select2-selection__choice__remove" role="presentation">×</span>The Dark Knight
                                                                    </li><li class="select2-selection__choice" title="Harry Potter" data-select2-id="16"><span class="select2-selection__choice__remove" role="presentation">×</span>Harry Potter</li><li class="select2-selection__choice" title="Iron Man" data-select2-id="17"><span class="select2-selection__choice__remove" role="presentation">×</span>Iron Man</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                                changes</button>
                                                            <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="account-vertical-social" role="tabpanel" aria-labelledby="account-pill-social" aria-expanded="false">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-twitter">Twitter</label>
                                                                <input type="text" id="account-twitter" class="form-control" placeholder="Add link" value="https://www.twitter.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-facebook">Facebook</label>
                                                                <input type="text" id="account-facebook" class="form-control" placeholder="Add link">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-google">Google+</label>
                                                                <input type="text" id="account-google" class="form-control" placeholder="Add link">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-linkedin">LinkedIn</label>
                                                                <input type="text" id="account-linkedin" class="form-control" placeholder="Add link" value="https://www.linkedin.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-instagram">Instagram</label>
                                                                <input type="text" id="account-instagram" class="form-control" placeholder="Add link">
                                                            </div>
                                                        </div>
                                                         
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                                changes</button>
                                                            <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel" aria-labelledby="account-pill-connections" aria-expanded="false">
                                                <div class="row">
                                                    <div class="col-12 mb-3">
                                                        <a href="javascript: void(0);" class="btn btn-info waves-effect waves-light">Connect to
                                                            <strong>Twitter</strong></a>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <button class=" btn btn-sm btn-secondary float-right waves-effect waves-light">edit</button>
                                                        <h6>You are connected to facebook.</h6>
                                                        <span>Johndoe@gmail.com</span>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <a href="javascript: void(0);" class="btn btn-danger waves-effect waves-light">Connect to
                                                            <strong>Google</strong>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <button class=" btn btn-sm btn-secondary float-right waves-effect waves-light">edit</button>
                                                        <h6>You are connected to Instagram.</h6>
                                                        <span>Johndoe@gmail.com</span>
                                                    </div>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                            changes</button>
                                                        <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel" aria-labelledby="account-pill-notifications" aria-expanded="false">
                                                <div class="row">
                                                    <h6 class="m-1">Activity</h6>
                                                    <div class="col-12 mb-1">
                                                        <div class="custom-control custom-switch custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input" checked="" id="accountSwitch1">
                                                            <label class="custom-control-label mr-1" for="accountSwitch1"></label>
                                                            <span class="switch-label w-100">Email me when someone comments
                                                                onmy
                                                                article</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-1">
                                                        <div class="custom-control custom-switch custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input" checked="" id="accountSwitch2">
                                                            <label class="custom-control-label mr-1" for="accountSwitch2"></label>
                                                            <span class="switch-label w-100">Email me when someone answers on
                                                                my
                                                                form</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-1">
                                                        <div class="custom-control custom-switch custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input" id="accountSwitch3">
                                                            <label class="custom-control-label mr-1" for="accountSwitch3"></label>
                                                            <span class="switch-label w-100">Email me hen someone follows
                                                                me</span>
                                                        </div>
                                                    </div>
                                                    <h6 class="m-1">Application</h6>
                                                    <div class="col-12 mb-1">
                                                        <div class="custom-control custom-switch custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input" checked="" id="accountSwitch4">
                                                            <label class="custom-control-label mr-1" for="accountSwitch4"></label>
                                                            <span class="switch-label w-100">News and announcements</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-1">
                                                        <div class="custom-control custom-switch custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input" id="accountSwitch5">
                                                            <label class="custom-control-label mr-1" for="accountSwitch5"></label>
                                                            <span class="switch-label w-100">Weekly product updates</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-1">
                                                        <div class="custom-control custom-switch custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input" checked="" id="accountSwitch6">
                                                            <label class="custom-control-label mr-1" for="accountSwitch6"></label>
                                                            <span class="switch-label w-100">Weekly blog digest</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                            changes</button>
                                                        <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- account setting page end -->

            </div>

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
    </div>

@push('js')
     <!-- BEGIN: Vendor JS-->
     <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
     <!-- BEGIN Vendor JS-->
 
     <!-- BEGIN: Page Vendor JS-->
     <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
     <script src="../../../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
     <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
     <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
      <!-- END: Page Vendor JS-->
 
     <!-- BEGIN: Theme JS-->
     <script src="../../../app-assets/js/core/app-menu.js"></script>
     <script src="../../../app-assets/js/core/app.js"></script>
     <script src="../../../app-assets/js/scripts/components.js"></script>
     <!-- END: Theme JS-->
 
     <!-- BEGIN: Page JS-->
     <script src="../../../app-assets/js/scripts/pages/account-setting.js"></script>
     <!-- END: Page JS-->
@endpush
@endsection


