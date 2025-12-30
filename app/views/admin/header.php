<div class="navbar navbar-light navbar-expand-lg navbar-static border-bottom border-bottom-dark border-opacity-10 my-0 py-0 header-color">
    <div class="container-fluid">
        <div class="d-flex d-lg-none me-2">
            <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                <i class="ph-list"></i>
            </button>
        </div>

        <div class="navbar-brand flex-1 flex-lg-0">
            <a href="index.html" class="d-inline-flex align-items-center">
                <img src="/public/assets/images/kaybagalsouth.png" alt="" style="width: 50px; height: 50px">
            </a>
            <div class="d-none d-sm-inline-block ms-3 text-uppercase">
                <p class="mb-0 fw-bold text-black">Barangay Management Information - <span class="text-tup">SYSTEM</span></p>
            </div>
            <!-- <button type="button" class="d-lg-block navbar-toggler rounded-pill sidebar-control sidebar-main-resize d-none ms-auto">
                <i class="ph-list"></i>
            </button> -->
        </div>

        <ul class="nav flex-row"></ul>

        <ul class="nav flex-row justify-content-end order-1 order-lg-2">
            <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                    <img src="/public/assets/images/user.png" class="w-32px h-32px rounded-pill" alt="">
                    <span id="adminName1" class="d-none d-lg-inline-block mx-lg-2 text-capitalize">Hi, <?= $_SESSION['user_role']; ?></span>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- <div class="dropdown-divider"></div> -->
                    <a href="/logout" class="dropdown-item">
                        <i class="ph-sign-out me-2"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>