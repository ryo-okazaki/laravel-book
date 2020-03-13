@extends('layouts.app')

@section('content')
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        <div class="c-sidebar-brand d-md-down-none">
            <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui-pro.svg#full"></use>
            </svg>
            <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui-pro.svg#signet"></use>
            </svg>
        </div>
        <ul class="c-sidebar-nav ps ps--active-y">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="main.html">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                    </svg>
                    Dashboard<span class="badge badge-info">NEW</span></a></li>
            <li class="c-sidebar-nav-title">Theme</li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="colors.html">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop1"></use>
                    </svg>
                    Colors</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="typography.html">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                    </svg>
                    Typography</a></li>
            <li class="c-sidebar-nav-title">Components</li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg>
                    Base</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/breadcrumb.html">
                            Breadcrumb</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/cards.html"> Cards</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/carousel.html"> Carousel</a>
                    </li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/collapse.html"> Collapse</a>
                    </li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/jumbotron.html">
                            Jumbotron</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/list-group.html"> List
                            group</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/navs.html"> Navs</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/pagination.html">
                            Pagination</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/popovers.html"> Popovers</a>
                    </li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/progress.html"> Progress</a>
                    </li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/scrollspy.html">
                            Scrollspy</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/switches.html"> Switches</a>
                    </li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tabs.html"> Tabs</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tooltips.html"> Tooltips</a>
                    </li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
                    </svg>
                    Buttons</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html">
                            Buttons</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/brand-buttons.html">
                            Brand Buttons</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/button-group.html">
                            Buttons Group</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/dropdowns.html">
                            Dropdowns</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/loading-buttons.html">
                            Loading Buttons<span class="badge badge-danger">PRO</span></a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="charts.html">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                    </svg>
                    Charts</a></li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                    </svg>
                    Editors</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="editors/code-editor.html">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                            </svg>
                            Code Editor<span class="badge badge-danger">PRO</span></a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="editors/markdown-editor.html">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                            </svg>
                            Markdown<span class="badge badge-danger">PRO</span></a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="editors/text-editor.html">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                            </svg>
                            Rich Text Editor<span class="badge badge-danger">PRO</span></a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown c-show"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                    </svg>
                    Forms</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link c-active" href="forms/basic-forms.html">
                            Basic Forms</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="forms/advanced-forms.html">
                            Advanced<span class="badge badge-danger">PRO</span></a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="forms/validation.html">
                            Validation<span class="badge badge-danger">PRO</span></a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="google-maps.html">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-map"></use>
                    </svg>
                    Google Maps<span class="badge badge-danger">PRO</span></a></li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                    Icons</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-free.html">
                            CoreUI Icons<span class="badge badge-success">Free</span></a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-brand.html">
                            CoreUI Icons - Brand</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-flag.html">
                            CoreUI Icons - Flag</a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg>
                    Notifications</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/alerts.html">
                            Alerts</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/badge.html">
                            Badge</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/modals.html">
                            Modals</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/toastr.html">
                            Toastr<span class="badge badge-danger">PRO</span></a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bolt"></use>
                    </svg>
                    Plugins</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="plugins/calendar.html">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                            </svg>
                            Calendar<span class="badge badge-danger">PRO</span></a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="plugins/draggable-cards.html">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor-move"></use>
                            </svg>
                            Draggable<span class="badge badge-danger">PRO</span></a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="plugins/spinners.html">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-sync"></use>
                            </svg>
                            Spinners<span class="badge badge-danger">PRO</span></a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-columns"></use>
                    </svg>
                    Tables</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="tables/tables.html"> Standard
                            Tables</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="tables/datatables.html">
                            DataTables<span class="badge badge-danger">PRO</span></a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="widgets.html">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
                    </svg>
                    Widgets<span class="badge badge-info">NEW</span></a></li>
            <li class="c-sidebar-nav-divider"></li>
            <li class="c-sidebar-nav-title">Extras</li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                    Pages</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="login.html" target="_top">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg>
                            Login</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="register.html" target="_top">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg>
                            Register</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="404.html" target="_top">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                            </svg>
                            Error 404</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="500.html" target="_top">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                            </svg>
                            Error 500</a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
                    </svg>
                    Apps</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                            </svg>
                            Invoicing</a>
                        <ul class="c-sidebar-nav-dropdown-items">
                            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                                                              href="apps/invoicing/invoice.html"> Invoice<span
                                        class="badge badge-danger">PRO</span></a></li>
                        </ul>
                    </li>
                    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg>
                            Email</a>
                        <ul class="c-sidebar-nav-dropdown-items">
                            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="apps/email/inbox.html">
                                    Inbox<span class="badge badge-danger">PRO</span></a></li>
                            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="apps/email/message.html">
                                    Message<span class="badge badge-danger">PRO</span></a></li>
                            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="apps/email/compose.html">
                                    Compose<span class="badge badge-danger">PRO</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="c-sidebar-nav-divider"></li>
            <li class="c-sidebar-nav-title">Labels</li>
            <li class="c-sidebar-nav-item c-d-compact-none c-d-minimized-none"><a class="c-sidebar-nav-label" href="#">
                    <svg class="c-sidebar-nav-icon text-danger">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bookmark"></use>
                    </svg>
                    Label danger</a></li>
            <li class="c-sidebar-nav-item c-d-compact-none c-d-minimized-none"><a class="c-sidebar-nav-label" href="#">
                    <svg class="c-sidebar-nav-icon text-info">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bookmark"></use>
                    </svg>
                    Label info</a></li>
            <li class="c-sidebar-nav-item c-d-compact-none c-d-minimized-none"><a class="c-sidebar-nav-label" href="#">
                    <svg class="c-sidebar-nav-icon text-warning">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bookmark"></use>
                    </svg>
                    Label warning</a></li>
            <li class="c-sidebar-nav-divider"></li>
            <li class="c-sidebar-nav-title">System Utilization</li>
            <li class="c-sidebar-nav-item px-3 c-d-compact-none c-d-minimized-none">
                <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>
            </li>
            <li class="c-sidebar-nav-item px-3 c-d-compact-none c-d-minimized-none">
                <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">11444GB/16384MB</small>
            </li>
            <li class="c-sidebar-nav-item px-3 mb-3 c-d-compact-none c-d-minimized-none">
                <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">243GB/256GB</small>
            </li>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 1191px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 1093px;"></div>
            </div>
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
                data-class="c-sidebar-unfoldable"></button>
    </div>
    <div class="c-sidebar c-sidebar-lg c-sidebar-light c-sidebar-right c-sidebar-overlaid" id="aside">
        <button class="c-sidebar-close c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-show"
                responsive="true">
            <svg class="c-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-x"></use>
            </svg>
        </button>
        <ul class="nav nav-tabs nav-underline nav-underline-primary" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list"></use>
                    </svg>
                </a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
                    </svg>
                </a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                    </svg>
                </a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="list-group list-group-accent">
                    <div
                        class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase c-small">
                        Today
                    </div>
                    <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                        <div class="c-avatar float-right"><img class="c-avatar-img" src="assets/img/avatars/7.jpg"
                                                               alt="user@email.com"></div>
                        <div>Meeting with <strong>Lucas</strong></div>
                        <small class="text-muted mr-3">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                            </svg>&nbsp; 1 - 3pm</small><small class="text-muted">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
                            </svg>&nbsp; Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-info">
                        <div class="c-avatar float-right"><img class="c-avatar-img" src="assets/img/avatars/4.jpg"
                                                               alt="user@email.com"></div>
                        <div>Skype with <strong>Megan</strong></div>
                        <small class="text-muted mr-3">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                            </svg>&nbsp; 4 - 5pm</small><small class="text-muted">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-skype"></use>
                            </svg>&nbsp; On-line</small>
                    </div>
                    <div
                        class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase c-small">
                        Tomorrow
                    </div>
                    <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                        <div>New UI Project - <strong>deadline</strong></div>
                        <small class="text-muted mr-3">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                            </svg>&nbsp; 10 - 11pm</small><small class="text-muted">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                            </svg>&nbsp; creativeLabs HQ</small>
                        <div class="c-avatars-stack mt-2">
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/2.jpg"
                                                                   alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/3.jpg"
                                                                   alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/4.jpg"
                                                                   alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/5.jpg"
                                                                   alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/6.jpg"
                                                                   alt="user@email.com"></div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                        <div><strong>#10 Startups.Garden</strong> Meetup</div>
                        <small class="text-muted mr-3">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                            </svg>&nbsp; 1 - 3pm</small><small class="text-muted">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
                            </svg>&nbsp; Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                        <div><strong>Team meeting</strong></div>
                        <small class="text-muted mr-3">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                            </svg>&nbsp; 4 - 6pm</small><small class="text-muted">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                            </svg>&nbsp; creativeLabs HQ</small>
                        <div class="c-avatars-stack mt-2">
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/2.jpg"
                                                                   alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/3.jpg"
                                                                   alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/4.jpg"
                                                                   alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/5.jpg"
                                                                   alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/6.jpg"
                                                                   alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/7.jpg"
                                                                   alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/8.jpg"
                                                                   alt="user@email.com"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-3" id="messages" role="tabpanel">
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg"
                                                   alt="user@email.com"><span class="c-avatar-status bg-success"></span>
                        </div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52
                            PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg"
                                                   alt="user@email.com"><span class="c-avatar-status bg-success"></span>
                        </div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52
                            PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg"
                                                   alt="user@email.com"><span class="c-avatar-status bg-success"></span>
                        </div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52
                            PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg"
                                                   alt="user@email.com"><span class="c-avatar-status bg-success"></span>
                        </div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52
                            PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg"
                                                   alt="user@email.com"><span class="c-avatar-status bg-success"></span>
                        </div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52
                            PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
            </div>
            <div class="tab-pane p-3" id="settings" role="tabpanel">
                <h6>Settings</h6>
                <div class="c-aside-options">
                    <div class="clearfix mt-4"><small><b>Option 1</b></small>
                        <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox" checked=""><span class="c-switch-slider"
                                                                                           data-checked="On"
                                                                                           data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
                </div>
                <div class="c-aside-options">
                    <div class="clearfix mt-3"><small><b>Option 2</b></small>
                        <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox"><span class="c-switch-slider"
                                                                                data-checked="On"
                                                                                data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
                </div>
                <div class="c-aside-options">
                    <div class="clearfix mt-3"><small><b>Option 3</b></small>
                        <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox"><span class="c-switch-slider"
                                                                                data-checked="On"
                                                                                data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <div class="c-aside-options">
                    <div class="clearfix mt-3"><small><b>Option 4</b></small>
                        <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox" checked=""><span class="c-switch-slider"
                                                                                           data-checked="On"
                                                                                           data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <hr>
                <h6>System Utilization</h6>
                <div class="text-uppercase mb-1 mt-4"><small><b>CPU Usage</b></small></div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>Memory Usage</b></small></div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">11444GB/16384MB</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>SSD 1 Usage</b></small></div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">243GB/256GB</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>SSD 2 Usage</b></small></div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">25GB/256GB</small>
            </div>
        </div>
    </div>
    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                    data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button>
            <a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="assets/brand/coreui-pro.svg#full"></use>
                </svg>
            </a>
            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                    data-class="c-sidebar-lg-show" responsive="true">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button>
            <ul class="c-header-nav d-md-down-none">
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
            </ul>
            <ul class="c-header-nav mfs-auto">
                <li class="c-header-nav-item px-3 c-d-legacy-none">
                    <button class="c-class-toggler c-header-nav-btn" type="button" id="header-tooltip"
                            data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom"
                            title="" data-original-title="Toggle Light/Dark Mode">
                        <svg class="c-icon c-d-dark-none">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
                        </svg>
                        <svg class="c-icon c-d-default-none">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-sun"></use>
                        </svg>
                    </button>
                </li>
            </ul>
            <ul class="c-header-nav">
                <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link"
                                                                              data-toggle="dropdown" href="#"
                                                                              role="button" aria-haspopup="true"
                                                                              aria-expanded="false">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                        </svg>
                        <span class="badge badge-pill badge-danger">5</span></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mfe-2 text-success">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
                            </svg>
                            New user registered</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mfe-2 text-danger">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-unfollow"></use>
                            </svg>
                            User deleted</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mfe-2 text-info">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart"></use>
                            </svg>
                            Sales report is ready</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mfe-2 text-success">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
                            </svg>
                            New client</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mfe-2 text-warning">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                            </svg>
                            Server overloaded</a>
                        <div class="dropdown-header bg-light"><strong>Server</strong></div>
                        <a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div>
                            <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
     aria-valuemax="100"></div>
</span><small class="text-muted">348 Processes. 1/4 Cores.</small>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div>
                            <span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
     aria-valuemax="100"></div>
</span><small class="text-muted">11444GB/16384MB</small>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div>
                            <span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0"
     aria-valuemax="100"></div>
</span><small class="text-muted">243GB/256GB</small>
                        </a>
                    </div>
                </li>
                <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link"
                                                                              data-toggle="dropdown" href="#"
                                                                              role="button" aria-haspopup="true"
                                                                              aria-expanded="false">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                        </svg>
                        <span class="badge badge-pill badge-warning">15</span></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div>
                        <a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Upgrade NPM &amp; Bower<span class="float-right"><strong>0%</strong></span>
                            </div>
                            <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">ReactJS Version<span class="float-right"><strong>25%</strong></span>
                            </div>
                            <span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">VueJS Version<span class="float-right"><strong>50%</strong></span>
                            </div>
                            <span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Add new layouts<span class="float-right"><strong>75%</strong></span>
                            </div>
                            <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Angular 8 Version<span
                                    class="float-right"><strong>100%</strong></span></div>
                            <span class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item text-center border-top" href="#"><strong>View all tasks</strong></a>
                    </div>
                </li>
                <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link"
                                                                              data-toggle="dropdown" href="#"
                                                                              role="button" aria-haspopup="true"
                                                                              aria-expanded="false">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg>
                        <span class="badge badge-pill badge-info">7</span></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div>
                        <a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 mfe-3 float-left">
                                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg"
                                                               alt="user@email.com"><span
                                            class="c-avatar-status bg-success"></span></div>
                                </div>
                                <div><small class="text-muted">John Doe</small><small
                                        class="text-muted float-right mt-1">Just now</small></div>
                                <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important
                                    message
                                </div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a><a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 mfe-3 float-left">
                                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg"
                                                               alt="user@email.com"><span
                                            class="c-avatar-status bg-warning"></span></div>
                                </div>
                                <div><small class="text-muted">John Doe</small><small
                                        class="text-muted float-right mt-1">5 minutes ago</small></div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a><a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 mfe-3 float-left">
                                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg"
                                                               alt="user@email.com"><span
                                            class="c-avatar-status bg-danger"></span></div>
                                </div>
                                <div><small class="text-muted">John Doe</small><small
                                        class="text-muted float-right mt-1">1:52 PM</small></div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a><a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 mfe-3 float-left">
                                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg"
                                                               alt="user@email.com"><span
                                            class="c-avatar-status bg-info"></span></div>
                                </div>
                                <div><small class="text-muted">John Doe</small><small
                                        class="text-muted float-right mt-1">4:03 PM</small></div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a><a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
                    </div>
                </li>
                <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                                                          role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg"
                                                   alt="user@email.com"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mfe-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg>
                            Updates<span class="badge badge-info mfs-auto">42</span></a><a class="dropdown-item"
                                                                                           href="#">
                            <svg class="c-icon mfe-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg>
                            Messages<span class="badge badge-success mfs-auto">42</span></a><a class="dropdown-item"
                                                                                               href="#">
                            <svg class="c-icon mfe-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                            </svg>
                            Tasks<span class="badge badge-danger mfs-auto">42</span></a><a class="dropdown-item"
                                                                                           href="#">
                            <svg class="c-icon mfe-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                            </svg>
                            Comments<span class="badge badge-warning mfs-auto">42</span></a>
                        <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mfe-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                            </svg>
                            Profile</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mfe-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                            </svg>
                            Settings</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mfe-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                            </svg>
                            Payments<span class="badge badge-secondary mfs-auto">42</span></a><a class="dropdown-item"
                                                                                                 href="#">
                            <svg class="c-icon mfe-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                            </svg>
                            Projects<span class="badge badge-primary mfs-auto">42</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mfe-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                            </svg>
                            Lock Account</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mfe-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg>
                            Logout</a>
                    </div>
                </li>
                <button class="c-header-toggler c-class-toggler mfe-md-3" type="button" data-target="#aside"
                        data-class="c-sidebar-show">
                    <svg class="c-icon c-icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-applications-settings"></use>
                    </svg>
                </button>
            </ul>
            <div class="c-subheader justify-content-between px-3">

                <ol class="breadcrumb border-0 m-0 px-0 px-md-3">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>

                </ol>
                <div class="c-subheader-nav d-md-down-none mfe-2"><a class="c-subheader-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
                        </svg>
                    </a><a class="c-subheader-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-graph"></use>
                        </svg> &nbsp;Dashboard</a><a class="c-subheader-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                        </svg> &nbsp;Settings</a></div>
            </div>
        </header>
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div id="ui-view">
                        <div>
                            <div class="fade-in">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-header"><strong>Credit Card</strong> <small>Form</small>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input class="form-control" id="name" type="text"
                                                                   placeholder="Enter your name">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="ccnumber">Credit Card Number</label>
                                                            <input class="form-control" id="ccnumber" type="text"
                                                                   placeholder="0000 0000 0000 0000">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-sm-4">
                                                        <label for="ccmonth">Month</label>
                                                        <select class="form-control" id="ccmonth">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="ccyear">Year</label>
                                                        <select class="form-control" id="ccyear">
                                                            <option>2014</option>
                                                            <option>2015</option>
                                                            <option>2016</option>
                                                            <option>2017</option>
                                                            <option>2018</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cvv">CVV/CVC</label>
                                                            <input class="form-control" id="cvv" type="text"
                                                                   placeholder="123">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-header"><strong>Company</strong> <small>Form</small></div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="company">Company</label>
                                                    <input class="form-control" id="company" type="text"
                                                           placeholder="Enter your company name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="vat">VAT</label>
                                                    <input class="form-control" id="vat" type="text"
                                                           placeholder="PL1234567890">
                                                </div>
                                                <div class="form-group">
                                                    <label for="street">Street</label>
                                                    <input class="form-control" id="street" type="text"
                                                           placeholder="Enter street name">
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-8">
                                                        <label for="city">City</label>
                                                        <input class="form-control" id="city" type="text"
                                                               placeholder="Enter your city">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="postal-code">Postal Code</label>
                                                        <input class="form-control" id="postal-code" type="text"
                                                               placeholder="Postal Code">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="country">Country</label>
                                                    <input class="form-control" id="country" type="text"
                                                           placeholder="Country name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header"><strong>Basic Form</strong> Elements</div>
                                            <div class="card-body">
                                                <form class="form-horizontal" action="" method="post"
                                                      enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label">Static</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static">Username</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="text-input">Text
                                                            Input</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control" id="text-input" type="text"
                                                                   name="text-input" placeholder="Text"><span
                                                                class="help-block">This is a help text</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="email-input">Email
                                                            Input</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control" id="email-input" type="email"
                                                                   name="email-input" placeholder="Enter Email"
                                                                   autocomplete="email"><span class="help-block">Please enter your email</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="password-input">Password</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control" id="password-input"
                                                                   type="password" name="password-input"
                                                                   placeholder="Password"
                                                                   autocomplete="new-password"><span class="help-block">Please enter a complex password</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="date-input">Date
                                                            Input</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control" id="date-input" type="date"
                                                                   name="date-input" placeholder="date"><span
                                                                class="help-block">Please enter a valid date</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="disabled-input">Disabled
                                                            Input</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control" id="disabled-input" type="text"
                                                                   name="disabled-input" placeholder="Disabled"
                                                                   disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="textarea-input">Textarea</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="textarea-input"
                                                                      name="textarea-input" rows="9"
                                                                      placeholder="Content.."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label"
                                                               for="select1">Select</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" id="select1" name="select1">
                                                                <option value="0">Please select</option>
                                                                <option value="1">Option #1</option>
                                                                <option value="2">Option #2</option>
                                                                <option value="3">Option #3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="select2">Select
                                                            Large</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control form-control-lg" id="select2"
                                                                    name="select2">
                                                                <option value="0">Please select</option>
                                                                <option value="1">Option #1</option>
                                                                <option value="2">Option #2</option>
                                                                <option value="3">Option #3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="select3">Select
                                                            Small</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control form-control-sm" id="select3"
                                                                    name="select3">
                                                                <option value="0">Please select</option>
                                                                <option value="1">Option #1</option>
                                                                <option value="2">Option #2</option>
                                                                <option value="3">Option #3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="disabledSelect">Disabled
                                                            Select</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" id="disabledSelect"
                                                                    disabled="">
                                                                <option value="0">Please select</option>
                                                                <option value="1">Option #1</option>
                                                                <option value="2">Option #2</option>
                                                                <option value="3">Option #3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="multiple-select">Multiple
                                                            select</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" id="multiple-select"
                                                                    name="multiple-select" size="5" multiple="">
                                                                <option value="1">Option #1</option>
                                                                <option value="2">Option #2</option>
                                                                <option value="3">Option #3</option>
                                                                <option value="4">Option #4</option>
                                                                <option value="5">Option #5</option>
                                                                <option value="6">Option #6</option>
                                                                <option value="7">Option #7</option>
                                                                <option value="8">Option #8</option>
                                                                <option value="9">Option #9</option>
                                                                <option value="10">Option #10</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label">Radios</label>
                                                        <div class="col-md-9 col-form-label">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="radio1" type="radio"
                                                                       value="radio1" name="radios">
                                                                <label class="form-check-label" for="radio1">Option
                                                                    1</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="radio2" type="radio"
                                                                       value="radio2" name="radios">
                                                                <label class="form-check-label" for="radio2">Option
                                                                    2</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="radio3" type="radio"
                                                                       value="radio2" name="radios">
                                                                <label class="form-check-label" for="radio3">Option
                                                                    3</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label">Inline Radios</label>
                                                        <div class="col-md-9 col-form-label">
                                                            <div class="form-check form-check-inline mr-1">
                                                                <input class="form-check-input" id="inline-radio1"
                                                                       type="radio" value="option1"
                                                                       name="inline-radios">
                                                                <label class="form-check-label"
                                                                       for="inline-radio1">One</label>
                                                            </div>
                                                            <div class="form-check form-check-inline mr-1">
                                                                <input class="form-check-input" id="inline-radio2"
                                                                       type="radio" value="option2"
                                                                       name="inline-radios">
                                                                <label class="form-check-label"
                                                                       for="inline-radio2">Two</label>
                                                            </div>
                                                            <div class="form-check form-check-inline mr-1">
                                                                <input class="form-check-input" id="inline-radio3"
                                                                       type="radio" value="option3"
                                                                       name="inline-radios">
                                                                <label class="form-check-label" for="inline-radio3">Three</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label">Checkboxes</label>
                                                        <div class="col-md-9 col-form-label">
                                                            <div class="form-check checkbox">
                                                                <input class="form-check-input" id="check1"
                                                                       type="checkbox" value="">
                                                                <label class="form-check-label" for="check1">Option
                                                                    1</label>
                                                            </div>
                                                            <div class="form-check checkbox">
                                                                <input class="form-check-input" id="check2"
                                                                       type="checkbox" value="">
                                                                <label class="form-check-label" for="check2">Option
                                                                    2</label>
                                                            </div>
                                                            <div class="form-check checkbox">
                                                                <input class="form-check-input" id="check3"
                                                                       type="checkbox" value="">
                                                                <label class="form-check-label" for="check3">Option
                                                                    3</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label">Inline Checkboxes</label>
                                                        <div class="col-md-9 col-form-label">
                                                            <div class="form-check form-check-inline mr-1">
                                                                <input class="form-check-input" id="inline-checkbox1"
                                                                       type="checkbox" value="check1">
                                                                <label class="form-check-label" for="inline-checkbox1">One</label>
                                                            </div>
                                                            <div class="form-check form-check-inline mr-1">
                                                                <input class="form-check-input" id="inline-checkbox2"
                                                                       type="checkbox" value="check2">
                                                                <label class="form-check-label" for="inline-checkbox2">Two</label>
                                                            </div>
                                                            <div class="form-check form-check-inline mr-1">
                                                                <input class="form-check-input" id="inline-checkbox3"
                                                                       type="checkbox" value="check3">
                                                                <label class="form-check-label" for="inline-checkbox3">Three</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="file-input">File
                                                            input</label>
                                                        <div class="col-md-9">
                                                            <input id="file-input" type="file" name="file-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label"
                                                               for="file-multiple-input">Multiple File input</label>
                                                        <div class="col-md-9">
                                                            <input id="file-multiple-input" type="file"
                                                                   name="file-multiple-input" multiple="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                                <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header"><strong>Inline</strong> Form</div>
                                            <div class="card-body">
                                                <form class="form-inline" action="" method="post">
                                                    <div class="form-group">
                                                        <label class="mr-1" for="exampleInputName2">Name</label>
                                                        <input class="form-control" id="exampleInputName2" type="text"
                                                               placeholder="Jane Doe" autocomplete="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mx-1" for="exampleInputEmail2">Email</label>
                                                        <input class="form-control" id="exampleInputEmail2" type="email"
                                                               placeholder="jane.doe@example.com" autocomplete="email">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                                <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header"><strong>Horizontal</strong> Form</div>
                                            <div class="card-body">
                                                <form class="form-horizontal" action="" method="post">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label"
                                                               for="hf-email">Email</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control" id="hf-email" type="email"
                                                                   name="hf-email" placeholder="Enter Email.."
                                                                   autocomplete="email"><span class="help-block">Please enter your email</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="hf-password">Password</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control" id="hf-password" type="password"
                                                                   name="hf-password" placeholder="Enter Password.."
                                                                   autocomplete="current-password"><span
                                                                class="help-block">Please enter your password</span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                                <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header"><strong>Normal</strong> Form</div>
                                            <div class="card-body">
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <label for="nf-email">Email</label>
                                                        <input class="form-control" id="nf-email" type="email"
                                                               name="nf-email" placeholder="Enter Email.."
                                                               autocomplete="email"><span class="help-block">Please enter your email</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nf-password">Password</label>
                                                        <input class="form-control" id="nf-password" type="password"
                                                               name="nf-password" placeholder="Enter Password.."
                                                               autocomplete="current-password"><span class="help-block">Please enter your password</span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                                <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">Input <strong>Grid</strong></div>
                                            <div class="card-body">
                                                <form class="form-horizontal" action="" method="post">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-sm-3">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-sm-4">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-5">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-sm-5">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-sm-6">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-7">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-sm-7">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-8">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-sm-8">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-sm-9">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-sm-10">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-11">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-sm-11">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-sm-12">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-sm btn-primary" type="submit"> Login</button>
                                                <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">Input <strong>Sizes</strong></div>
                                            <div class="card-body">
                                                <form class="form-horizontal" action="" method="post">
                                                    <div class="form-group row">
                                                        <label class="col-sm-5 col-form-label" for="input-small">Small
                                                            Input</label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control form-control-sm" id="input-small"
                                                                   type="text" name="input-small"
                                                                   placeholder=".form-control-sm">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-5 col-form-label" for="input-normal">Normal
                                                            Input</label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" id="input-normal" type="text"
                                                                   name="input-normal" placeholder="Normal">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-5 col-form-label" for="input-large">Large
                                                            Input</label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control form-control-lg" id="input-large"
                                                                   type="text" name="input-large"
                                                                   placeholder=".form-control-lg">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                                <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-header"><strong>Validation states</strong> Form</div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-col-form-label" for="inputSuccess1">Input with
                                                        success</label>
                                                    <input class="form-control is-valid" id="inputSuccess1" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-col-form-label" for="inputError1">Input with
                                                        error</label>
                                                    <input class="form-control is-invalid" id="inputError1" type="text">
                                                    <div class="invalid-feedback">Please provide a valid informations.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-header"><strong>Validation</strong>
                                                <code>was-validated</code></div>
                                            <div class="card-body was-validated">
                                                <div class="form-group">
                                                    <label class="form-col-form-label" for="inputSuccess2">Input with
                                                        success</label>
                                                    <input class="form-control is-valid" id="inputSuccess2" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-col-form-label" for="inputError2">Input
                                                        required</label>
                                                    <input class="form-control is-invalid" id="inputError2" type="text"
                                                           required="">
                                                    <div class="invalid-feedback">Please provide a valid informations.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-header"><strong>Icon/Text</strong> Groups</div>
                                            <div class="card-body">
                                                <form class="form-horizontal" action="" method="post">
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span
                                                                        class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
</svg></span></div>
                                                                <input class="form-control" id="input1-group1"
                                                                       type="text" name="input1-group1"
                                                                       placeholder="Username" autocomplete="username">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <input class="form-control" id="input2-group1"
                                                                       type="email" name="input2-group1"
                                                                       placeholder="Email" autocomplete="email">
                                                                <div class="input-group-append"><span
                                                                        class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span
                                                                        class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-euro"></use>
</svg></span></div>
                                                                <input class="form-control" id="input3-group1"
                                                                       type="text" name="input3-group1"
                                                                       placeholder="..">
                                                                <div class="input-group-append"><span
                                                                        class="input-group-text">.00</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                                                <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-header"><strong>Buttons</strong> Groups</div>
                                            <div class="card-body">
                                                <form class="form-horizontal" action="" method="post">
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <div class="input-group"><span class="input-group-prepend">
<button class="btn btn-primary" type="button">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
</svg> Search
</button></span>
                                                                <input class="form-control" id="input1-group2"
                                                                       type="text" name="input1-group2"
                                                                       placeholder="Username" autocomplete="username">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <input class="form-control" id="input2-group2"
                                                                       type="email" name="input2-group2"
                                                                       placeholder="Email" autocomplete="email"><span
                                                                    class="input-group-append">
<button class="btn btn-primary" type="button">Submit</button></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <div class="input-group"><span class="input-group-prepend">
<button class="btn btn-primary" type="button">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-facebook"></use>
</svg>
</button></span>
                                                                <input class="form-control" id="input3-group2"
                                                                       type="text" name="input3-group2"
                                                                       placeholder="Search"><span
                                                                    class="input-group-append">
<button class="btn btn-primary" type="button">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-twitter"></use>
</svg>
</button></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                                                <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-header"><strong>Dropdowns</strong> Groups</div>
                                            <div class="card-body">
                                                <form class="form-horizontal" action="" method="post">
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-primary dropdown-toggle"
                                                                            type="button" data-toggle="dropdown">
                                                                        Action<span class="caret"></span></button>
                                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                                                                  href="#">Action</a><a
                                                                            class="dropdown-item" href="#">Another
                                                                            action</a><a class="dropdown-item" href="#">Something
                                                                            else here</a>
                                                                        <div class="dropdown-divider"
                                                                             role="separator"></div>
                                                                        <a class="dropdown-item" href="#">Separated
                                                                            link</a>
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" id="input1-group3"
                                                                       type="text" name="input1-group3"
                                                                       placeholder="Username" autocomplete="username">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <input class="form-control" id="input2-group3"
                                                                       type="email" name="input2-group3"
                                                                       placeholder="Email" autocomplete="email">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-primary dropdown-toggle"
                                                                            type="button" data-toggle="dropdown">
                                                                        Action<span class="caret"></span></button>
                                                                    <div class="dropdown-menu dropdown-menu-right"><a
                                                                            class="dropdown-item" href="#">Action</a><a
                                                                            class="dropdown-item" href="#">Another
                                                                            action</a><a class="dropdown-item" href="#">Something
                                                                            else here</a>
                                                                        <div class="dropdown-divider"
                                                                             role="separator"></div>
                                                                        <a class="dropdown-item" href="#">Separated
                                                                            link</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-primary" type="button">
                                                                        Action
                                                                    </button>
                                                                    <button
                                                                        class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                                        type="button" data-toggle="dropdown"><span
                                                                            class="caret"></span></button>
                                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                                                                  href="#">Action</a><a
                                                                            class="dropdown-item" href="#">Another
                                                                            action</a><a class="dropdown-item" href="#">Something
                                                                            else here</a>
                                                                        <div class="dropdown-divider"
                                                                             role="separator"></div>
                                                                        <a class="dropdown-item" href="#">Separated
                                                                            link</a>
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" id="input3-group3"
                                                                       type="text" name="input3-group3"
                                                                       placeholder="..">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-primary dropdown-toggle"
                                                                            type="button" data-toggle="dropdown"><span
                                                                            class="caret"></span></button>
                                                                    <div class="dropdown-menu dropdown-menu-right"><a
                                                                            class="dropdown-item" href="#">Action</a><a
                                                                            class="dropdown-item" href="#">Another
                                                                            action</a><a class="dropdown-item" href="#">Something
                                                                            else here</a>
                                                                        <div class="dropdown-divider"
                                                                             role="separator"></div>
                                                                        <a class="dropdown-item" href="#">Separated
                                                                            link</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                                                <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">Use the grid for big devices! <small><code>.col-lg-*</code>
                                                    <code> .col-md-*</code> <code> .col-sm-*</code></small></div>
                                            <div class="card-body">
                                                <form class="form-horizontal" action="" method="post">
                                                    <div class="form-group row">
                                                        <div class="col-md-8">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-md-8">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-md-4">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-7">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-md-7">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-md-5">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-md-6">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-md-6">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-5">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-md-5">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-md-7">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-md-4">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-md-8">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-sm btn-primary" type="submit">Action</button>
                                                <button class="btn btn-sm btn-danger" type="button">Action</button>
                                                <button class="btn btn-sm btn-warning" type="button">Action</button>
                                                <button class="btn btn-sm btn-info" type="button">Action</button>
                                                <button class="btn btn-sm btn-success" type="button">Action</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">Input Grid for small devices!
                                                <small><code>.col-*</code></small></div>
                                            <div class="card-body">
                                                <form class="form-horizontal" action="" method="post">
                                                    <div class="form-group row">
                                                        <div class="col-4">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-4">
                                                        </div>
                                                        <div class="col-8">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-8">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-5">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-5">
                                                        </div>
                                                        <div class="col-7">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-7">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-6">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-6">
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-6">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-7">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-5">
                                                        </div>
                                                        <div class="col-5">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-5">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-8">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-8">
                                                        </div>
                                                        <div class="col-4">
                                                            <input class="form-control" type="text"
                                                                   placeholder=".col-4">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-sm btn-primary" type="submit">Action</button>
                                                <button class="btn btn-sm btn-danger" type="button">Action</button>
                                                <button class="btn btn-sm btn-warning" type="button">Action</button>
                                                <button class="btn btn-sm btn-info" type="button">Action</button>
                                                <button class="btn btn-sm btn-success" type="button">Action</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-header">Example Form</div>
                                            <div class="card-body">
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text">Username</span></div>
                                                            <input class="form-control" id="username3" type="text"
                                                                   name="username3" autocomplete="username">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
</svg></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text">Email</span></div>
                                                            <input class="form-control" id="email3" type="email"
                                                                   name="email3" autocomplete="email">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text">Password</span></div>
                                                            <input class="form-control" id="password3" type="password"
                                                                   name="password3" autocomplete="new-password">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
</svg></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-actions">
                                                        <button class="btn btn-sm btn-primary" type="submit">Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-header">Example Form</div>
                                            <div class="card-body">
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input class="form-control" id="username2" type="text"
                                                                   name="username2" placeholder="Username"
                                                                   autocomplete="username">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
</svg></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input class="form-control" id="email2" type="email"
                                                                   name="email2" placeholder="Email"
                                                                   autocomplete="email">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input class="form-control" id="password2" type="password"
                                                                   name="password2" placeholder="Password"
                                                                   autocomplete="new-password">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text">
<svg class="c-icon">
 <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
</svg></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-actions">
                                                        <button class="btn btn-sm btn-secondary" type="submit">Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-header">Example Form</div>
                                            <div class="card-body">
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
</svg></span></div>
                                                            <input class="form-control" id="username" type="text"
                                                                   name="username" placeholder="Username"
                                                                   autocomplete="username">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg></span></div>
                                                            <input class="form-control" id="email" type="email"
                                                                   name="email" placeholder="Email"
                                                                   autocomplete="email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
</svg></span></div>
                                                            <input class="form-control" id="password" type="password"
                                                                   name="password" placeholder="Password"
                                                                   autocomplete="new-password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-actions">
                                                        <button class="btn btn-sm btn-success" type="submit">Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">Form Elements</div>
                                            <div class="card-body">
                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="prependedInput">Prepended
                                                            text</label>
                                                        <div class="controls">
                                                            <div class="input-prepend input-group">
                                                                <div class="input-group-prepend"><span
                                                                        class="input-group-text">@</span></div>
                                                                <input class="form-control" id="prependedInput"
                                                                       size="16" type="text">
                                                            </div>
                                                            <p class="help-block">Here's some help text</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="appendedInput">Appended
                                                            text</label>
                                                        <div class="controls">
                                                            <div class="input-group">
                                                                <input class="form-control" id="appendedInput" size="16"
                                                                       type="text">
                                                                <div class="input-group-append"><span
                                                                        class="input-group-text">.00</span></div>
                                                            </div>
                                                            <span class="help-block">Here's more help text</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="appendedPrependedInput">Append
                                                            and prepend</label>
                                                        <div class="controls">
                                                            <div class="input-prepend input-group">
                                                                <div class="input-group-prepend"><span
                                                                        class="input-group-text">$</span></div>
                                                                <input class="form-control" id="appendedPrependedInput"
                                                                       size="16" type="text">
                                                                <div class="input-group-append"><span
                                                                        class="input-group-text">.00</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="appendedInputButton">Append
                                                            with button</label>
                                                        <div class="controls">
                                                            <div class="input-group">
                                                                <input class="form-control" id="appendedInputButton"
                                                                       size="16" type="text"><span
                                                                    class="input-group-append">
<button class="btn btn-secondary" type="button">Go!</button></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="appendedInputButtons">Two-button
                                                            append</label>
                                                        <div class="controls">
                                                            <div class="input-group">
                                                                <input class="form-control" id="appendedInputButtons"
                                                                       size="16" type="text"><span
                                                                    class="input-group-append">
<button class="btn btn-secondary" type="button">Search</button>
<button class="btn btn-secondary" type="button">Options</button></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <button class="btn btn-primary" type="submit">Save changes
                                                        </button>
                                                        <button class="btn btn-secondary" type="button">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div id="ui-view">
                        <div>
                            <div class="fade-in">
                                <div class="row">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="card">
                                            <div class="card-header"> Carousel<small>slides only</small>
                                                <div class="card-header-actions"><a class="card-header-action"
                                                                                    href="https://coreui.io/docs/components/bootstrap-carousel/"
                                                                                    target="_blank"><small
                                                            class="text-muted">docs</small></a></div>
                                            </div>
                                            <div class="card-body">
                                                <div class="carousel slide" id="carouselExampleSlidesOnly"
                                                     data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active"><img class="d-block w-100"
                                                                                               data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                                                                                               alt="First slide [800x400]"
                                                                                               src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9266%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9266%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                               data-holder-rendered="true">
                                                        </div>
                                                        <div class="carousel-item"><img class="d-block w-100"
                                                                                        data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
                                                                                        alt="Second slide [800x400]"
                                                                                        src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9269%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9269%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.75625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                        data-holder-rendered="true">
                                                        </div>
                                                        <div class="carousel-item"><img class="d-block w-100"
                                                                                        data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide"
                                                                                        alt="Third slide [800x400]"
                                                                                        src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c926a%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c926a%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277.0078125%22%20y%3D%22217.75625%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                        data-holder-rendered="true">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header"> Carousel<small>with controls</small></div>
                                            <div class="card-body">
                                                <div class="carousel slide" id="carouselExampleControls"
                                                     data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active"><img class="d-block w-100"
                                                                                               data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                                                                                               alt="First slide [800x400]"
                                                                                               src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c926c%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c926c%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                               data-holder-rendered="true">
                                                        </div>
                                                        <div class="carousel-item"><img class="d-block w-100"
                                                                                        data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
                                                                                        alt="Second slide [800x400]"
                                                                                        src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c926e%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c926e%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.75625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                        data-holder-rendered="true">
                                                        </div>
                                                        <div class="carousel-item"><img class="d-block w-100"
                                                                                        data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide"
                                                                                        alt="Third slide [800x400]"
                                                                                        src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c926f%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c926f%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277.0078125%22%20y%3D%22217.75625%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                        data-holder-rendered="true">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls"
                                                       role="button" data-slide="prev"><span
                                                            class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span><span
                                                            class="sr-only">Previous</span></a><a
                                                        class="carousel-control-next" href="#carouselExampleControls"
                                                        role="button" data-slide="next"><span
                                                            class="carousel-control-next-icon"
                                                            aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="card">
                                            <div class="card-header"> Carousel<small>with indicators</small></div>
                                            <div class="card-body">
                                                <div class="carousel slide" id="carouselExampleIndicators"
                                                     data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li class="active" data-target="#carouselExampleIndicators"
                                                            data-slide-to="0"></li>
                                                        <li data-target="#carouselExampleIndicators"
                                                            data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators"
                                                            data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active"><img class="d-block w-100"
                                                                                               data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                                                                                               alt="First slide [800x400]"
                                                                                               src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9270%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9270%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                               data-holder-rendered="true">
                                                        </div>
                                                        <div class="carousel-item"><img class="d-block w-100"
                                                                                        data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
                                                                                        alt="Second slide [800x400]"
                                                                                        src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9272%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9272%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.75625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                        data-holder-rendered="true">
                                                        </div>
                                                        <div class="carousel-item"><img class="d-block w-100"
                                                                                        data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide"
                                                                                        alt="Third slide [800x400]"
                                                                                        src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9273%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9273%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277.0078125%22%20y%3D%22217.75625%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                        data-holder-rendered="true">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                       role="button" data-slide="prev"><span
                                                            class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span><span
                                                            class="sr-only">Previous</span></a><a
                                                        class="carousel-control-next" href="#carouselExampleIndicators"
                                                        role="button" data-slide="next"><span
                                                            class="carousel-control-next-icon"
                                                            aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header"> Carousel<small>with captions</small></div>
                                            <div class="card-body">
                                                <div class="carousel slide" id="carouselExampleCaptions"
                                                     data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li class="active" data-target="#carouselExampleCaptions"
                                                            data-slide-to="0"></li>
                                                        <li data-target="#carouselExampleCaptions"
                                                            data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleCaptions"
                                                            data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active"><img class="d-block w-100"
                                                                                               data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                                                                                               alt="First slide [800x400]"
                                                                                               src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9274%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9274%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                               data-holder-rendered="true">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h3>First slide label</h3>
                                                                <p>Nulla vitae elit libero, a pharetra augue mollis
                                                                    interdum.</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item"><img class="d-block w-100"
                                                                                        data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
                                                                                        alt="Second slide [800x400]"
                                                                                        src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9275%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9275%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.75625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                        data-holder-rendered="true">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h3>Second slide label</h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item"><img class="d-block w-100"
                                                                                        data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide"
                                                                                        alt="Third slide [800x400]"
                                                                                        src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9277%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9277%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277.0078125%22%20y%3D%22217.75625%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                        data-holder-rendered="true">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h3>Third slide label</h3>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleCaptions"
                                                       role="button" data-slide="prev"><span
                                                            class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span><span
                                                            class="sr-only">Previous</span></a><a
                                                        class="carousel-control-next" href="#carouselExampleCaptions"
                                                        role="button" data-slide="next"><span
                                                            class="carousel-control-next-icon"
                                                            aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div id="ui-view">
                        <div>

                            <div class="fade-in">
                                <div class="card">
                                    <div class="card-header"> Popovers
                                        <div class="card-header-actions"><a class="card-header-action"
                                                                            href="https://coreui.io/docs/components/bootstrap-popover/popovers.html"
                                                                            target="_blank"><small class="text-muted">docs</small></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-lg btn-danger" type="button" data-toggle="popover"
                                                title=""
                                                data-content="And here's some amazing content. It's very engaging. Right?"
                                                data-original-title="Popover title" aria-describedby="popover744918">
                                            Click to toggle popover
                                        </button>
                                        <hr>
                                        <a class="btn btn-lg btn-danger" tabindex="0" role="button"
                                           data-toggle="popover" data-trigger="focus" title=""
                                           data-content="And here's some amazing content. It's very engaging. Right?"
                                           data-original-title="Dismissible popover">
                                            Dismissible
                                            popover</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header"> Popovers<small>directions</small></div>
                                    <div class="card-body">
                                        <button class="btn btn-secondary" type="button" data-container="body"
                                                data-toggle="popover" data-placement="top"
                                                data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                data-original-title="" title="" aria-describedby="popover60020">Popover
                                            on top
                                        </button>
                                        <button class="btn btn-secondary" type="button" data-container="body"
                                                data-toggle="popover" data-placement="right"
                                                data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                data-original-title="" title="" aria-describedby="popover784145">Popover
                                            on right
                                        </button>
                                        <button class="btn btn-secondary" type="button" data-container="body"
                                                data-toggle="popover" data-placement="bottom"
                                                data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                data-original-title="" title="">Popover on bottom
                                        </button>
                                        <button class="btn btn-secondary" type="button" data-container="body"
                                                data-toggle="popover" data-placement="left"
                                                data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                data-original-title="" title="">Popover on left
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div id="ui-view">
                        <div>

                            <div class="fade-in">
                                <div class="card">
                                    <div class="card-header">Tooltips
                                        <div class="card-header-actions"><a class="card-header-action"
                                                                            href="https://coreui.io/docs/components/bootstrap-tooltips/"
                                                                            target="_blank"><small class="text-muted">docs</small></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted">Hover over the links below to see tooltips:</p>
                                        <div class="bd-example tooltip-demo">
                                            <p class="muted">Tight pants next level keffiyeh<a href="#"
                                                                                               data-toggle="tooltip"
                                                                                               title=""
                                                                                               data-original-title="Default tooltip">you
                                                    probably</a> haven't heard of them. Photo booth beard raw denim
                                                letterpress vegan messenger bag stumptown. Farm-to-table seitan,
                                                mcsweeney's fixie sustainable quinoa 8-bit american apparel<a href="#"
                                                                                                              data-toggle="tooltip"
                                                                                                              title=""
                                                                                                              data-original-title="Another tooltip">have
                                                    a</a> terry richardson vinyl chambray. Beard stumptown, cardigans
                                                banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko
                                                mcsweeney's cleanse vegan chambray. A really ironic artisan<a href="#"
                                                                                                              data-toggle="tooltip"
                                                                                                              title=""
                                                                                                              data-original-title="Another one here too">whatever
                                                    keytar</a>, scenester farm-to-table banksy Austin<a href="#"
                                                                                                        data-toggle="tooltip"
                                                                                                        title=""
                                                                                                        data-original-title="The last tip!">twitter
                                                    handle</a> freegan cred raw denim single-origin coffee viral.</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-secondary" type="button" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Tooltip on top">
                                            Tooltip on top
                                        </button>
                                        <button class="btn btn-secondary" type="button" data-toggle="tooltip"
                                                data-placement="right" title="" data-original-title="Tooltip on right">
                                            Tooltip on right
                                        </button>
                                        <button class="btn btn-secondary" type="button" data-toggle="tooltip"
                                                data-placement="bottom" title=""
                                                data-original-title="Tooltip on bottom">Tooltip on bottom
                                        </button>
                                        <button class="btn btn-secondary" type="button" data-toggle="tooltip"
                                                data-placement="left" title="" data-original-title="Tooltip on left">
                                            Tooltip on left
                                        </button>
                                        <button class="btn btn-secondary" type="button" data-toggle="tooltip"
                                                data-html="true" title=""
                                                data-original-title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">Tooltip
                                            with HTML
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container-fluid">
                    <div id="ui-view">
                        <div>
                            <div class="fadeIn">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header"> Bootstrap Modals</div>
                                            <div class="card-body">

                                                <button class="btn btn-secondary mb-1" type="button" data-toggle="modal"
                                                        data-target="#myModal">Launch demo modal
                                                </button>
                                                <button class="btn btn-secondary mb-1" type="button" data-toggle="modal"
                                                        data-target="#largeModal">Launch large modal
                                                </button>
                                                <button class="btn btn-secondary mb-1" type="button" data-toggle="modal"
                                                        data-target="#smallModal">Launch small modal
                                                </button>
                                                <hr>
                                                <button class="btn btn-primary mb-1" type="button" data-toggle="modal"
                                                        data-target="#primaryModal">Primary modal
                                                </button>
                                                <button class="btn btn-success mb-1" type="button" data-toggle="modal"
                                                        data-target="#successModal">Success modal
                                                </button>
                                                <button class="btn btn-warning mb-1" type="button" data-toggle="modal"
                                                        data-target="#warningModal">Warning modal
                                                </button>
                                                <button class="btn btn-danger mb-1" type="button" data-toggle="modal"
                                                        data-target="#dangerModal">Danger modal
                                                </button>
                                                <button class="btn btn-info mb-1" type="button" data-toggle="modal"
                                                        data-target="#infoModal">Info modal
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body…</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                            </button>
                                            <button class="btn btn-primary" type="button">Save changes</button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body…</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                            </button>
                                            <button class="btn btn-primary" type="button">Save changes</button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body…</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                            </button>
                                            <button class="btn btn-primary" type="button">Save changes</button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="modal fade" id="primaryModal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-primary" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body…</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                            </button>
                                            <button class="btn btn-primary" type="button">Save changes</button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-success" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body…</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                            </button>
                                            <button class="btn btn-success" type="button">Save changes</button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="modal fade" id="warningModal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-warning" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body…</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                            </button>
                                            <button class="btn btn-warning" type="button">Save changes</button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="modal fade" id="dangerModal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-danger" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body…</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                            </button>
                                            <button class="btn btn-danger" type="button">Save changes</button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="modal fade" id="infoModal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-info" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body…</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                            </button>
                                            <button class="btn btn-info" type="button">Save changes</button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="c-footer">
                <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
                <div class="mfs-auto">Powered by&nbsp;<a href="https://coreui.io/pro/">CoreUI Pro</a></div>
            </footer>
        </div>
    </div>

@endsection
