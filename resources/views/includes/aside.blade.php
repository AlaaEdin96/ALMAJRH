<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"
                    href="{{ route('home') }}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">المجرة</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item {{ request()->is('*/') ? 'active has-sub sidebar-group-active open' : '' }}">
                <a href="{{ route('home') }}"><i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">الرئيسية</span>
                </a>

            </li>
            <li class=" navigation-header"><span>الصفحات</span></li>

           

            <li class=" nav-item {{ request()->is('*Project*') ? 'active has-sub sidebar-group-active open' : '' }}">
                <a href="#"><i class="feather icon-folder"></i><span class="menu-title"
                        data-i18n="User">المشاريع</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="{{ route('project.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">مشروع جديد</span></a>
                    </li>
                    <li>
                        <a href="{{ route('project') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">عرض المشاريع</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item {{ request()->is('*Project*') ? 'active has-sub sidebar-group-active open' : '' }}">
                <a href="#"><i class="feather icon-folder"></i><span class="menu-title"
                        data-i18n="User">إعدادات النظام</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="{{ route('company.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List"> الشركات</span></a>
                    </li>
                    <li>
                        <a href="{{ route('User.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View"> المستخدمين</span></a>
                    </li>
                </ul>
            </li>
           
          
            <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                        data-i18n="User">التقارير</span></a>
                <ul class="menu-content">
                    <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="List"> فواتير  </span></a>
                    </li>
                    <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="List">فواتير </span></a>
                    </li>
                   
                </ul>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
