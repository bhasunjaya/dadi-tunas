<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-file-manager">Dashboard</span>
                    </a>
                </li>
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">@lang('translation.Layouts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">@lang('translation.Vertical')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar" key="t-light-sidebar">@lang('translation.Light_Sidebar')</a></li>
                                <li><a href="layouts-compact-sidebar" key="t-compact-sidebar">@lang('translation.Compact_Sidebar')</a></li>
                                <li><a href="layouts-icon-sidebar" key="t-icon-sidebar">@lang('translation.Icon_Sidebar')</a></li>
                                <li><a href="layouts-boxed" key="t-boxed-width">@lang('translation.Boxed_Width')</a>
                                </li>
                                <li><a href="layouts-preloader" key="t-preloader">@lang('translation.Preloader')</a>
                                </li>
                                <li><a href="layouts-colored-sidebar" key="t-colored-sidebar">@lang('translation.Colored_Sidebar')</a></li>
                                <li><a href="layouts-scrollable" key="t-scrollable">@lang('translation.Scrollable')</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">@lang('translation.Horizontal')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal" key="t-horizontal">@lang('translation.Horizontal')</a>
                                </li>
                                <li><a href="layouts-hori-topbar-light" key="t-topbar-light">@lang('translation.Topbar_Light')</a></li>
                                <li><a href="layouts-hori-boxed-width" key="t-boxed-width">@lang('translation.Boxed_Width')</a></li>
                                <li><a href="layouts-hori-preloader" key="t-preloader">@lang('translation.Preloader')</a></li>
                                <li><a href="layouts-hori-colored-header" key="t-colored-topbar">@lang('translation.Colored_Header')</a></li>
                                <li><a href="layouts-hori-scrollable" key="t-scrollable">@lang('translation.Scrollable')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
