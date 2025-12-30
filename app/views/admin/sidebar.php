<?php $currentUrl = $_SERVER['REQUEST_URI'];
$isBlotterActive = strpos($currentUrl, '/admin/blotters') === 0;
?>

<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg header-color">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="container-fluid d-flex flex-column">
                <button type="button" class="btn btn-flat-black btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none mt-3">
                    Toggle Sidebar
                </button>
            </div>
        </div>
        <!-- /sidebar header -->

        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar nav-sidebar-admin" data-nav-type="accordion">

                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide fw-bold">General</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item mb-1">
                    <a href="/admin/home"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/home') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-house"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>

                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide fw-bold">Accounts Management</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item mb-1">
                    <a href="/admin/accounts"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/accounts') ? 'active fw-bold' : '' ?>">
                        <i class="ph-user-list"></i>
                        <span>
                            Accounts
                        </span>
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="/admin/positions"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/positions') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-person"></i>
                        <span>
                            Positions
                        </span>
                    </a>
                </li>

                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide fw-bold">Requests Management</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item mb-1">
                    <a href="/admin/households"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/households') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-house"></i>
                        <span>
                            Household
                        </span>
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="/admin/residents"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/residents') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-users-three"></i>
                        <span>
                            Residents
                        </span>
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="/admin/puroks"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/puroks') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-building"></i>
                        <span>
                            Purok/Zone
                        </span>
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="/admin/permits"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/permits') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-file"></i>
                        <span>
                            Permits
                        </span>
                    </a>
                </li>


                <li class="nav-item mb-1">
                    <a href="/admin/clearances"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/clearances') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-file"></i>
                        <span>
                            Clearance
                        </span>
                    </a>
                </li>

                <!-- <li class="nav-item mb-1">
                    <a href="/admin/blotters"
                        class="nav-link nav-link-admin <?//= ($currentUrl == '/admin/blotters') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-circle-wavy-warning"></i>
                        <span>
                            Blotter
                        </span>
                    </a>
                </li> -->

                <li class="nav-item nav-item-submenu <?= $isBlotterActive ? 'nav-item-expanded nav-item-open' : '' ?>">
                    <a href="#" class="nav-link nav-link-admin <?= $isBlotterActive ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-circle-wavy-warning"></i>
                        <span>Blotter</span>
                    </a>

                    <ul class="nav-group-sub collapse <?= $isBlotterActive ? 'show' : '' ?>">
                        <li class="nav-item">
                            <a href="/admin/blotters"
                            class="nav-link <?= ($currentUrl === '/admin/blotters') ? 'active fw-bold' : '' ?>">
                                List of Blotter
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/blotters/violations"
                            class="nav-link <?= ($currentUrl === '/admin/blotters/violations') ? 'active fw-bold' : '' ?>">
                                List of Violation
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item mb-1">
                    <a href="/admin/records"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/records') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-database"></i>
                        <span>
                            Records
                        </span>
                    </a>
                </li>
                
                <li class="nav-item mb-1">
                    <a href="/admin/reports"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/reports') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-files"></i>
                        <span>
                            Reports
                        </span>
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="/admin/archives"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/archives') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-folder-notch"></i>
                        <span>
                            Archive
                        </span>
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="/admin/settings"
                        class="nav-link nav-link-admin <?= ($currentUrl == '/admin/settings') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-gear-six"></i>
                        <span>
                            Settings
                        </span>
                    </a>
                </li>

                <!-- <li class="nav-item mb-1">
                    <a href="/admin/dropping"
                        class="nav-link nav-link-admin <?//= ($currentUrl == '/admin/dropping') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-minus-circle"></i>
                        <span>
                            Dropping of Subjects
                        </span>
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="/admin/transferring"
                        class="nav-link nav-link-admin <?//= ($currentUrl == '/admin/transferring') ? 'active fw-bold' : '' ?>">
                        <i class="ph ph-arrows-left-right"></i>
                        <span>
                            Transferring of Subjects
                        </span>
                    </a>
                </li> -->

                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide fw-bold">Settings</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item mb-1">
                    <a href="/logout" class="nav-link nav-link-admin">
                        <i class="ph ph-sign-out"></i>
                        <span>
                            Sign Out
                        </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->