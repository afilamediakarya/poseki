<!--begin::Topbar-->
<div class="d-flex align-items-stretch flex-shrink-0">
    <!--begin::Toolbar wrapper-->
    <div class="d-flex align-items-stretch flex-shrink-0">
        <!--begin::User-->
        <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->
            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
                data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                <img src="assets/media/avatars/150-26.jpg" alt="user" style="border-radius: 50%;" />
                <span class="mr-2 d-none d-lg-inline text- small">{{ Auth::user()->roles }}</span>
            </div>
            <!--end::Menu wrapper-->
        </div>
        <!--end::User -->
        <!--begin::Heaeder menu toggle-->
        <!--end::Heaeder menu toggle-->
    </div>
    <!--end::Toolbar wrapper-->
</div>
<!--end::Topbar-->
