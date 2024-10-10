<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Quản lý Sản phẩm</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.product.index') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-list-details"></i>
                    </span>
                        <span class="hide-menu">Danh sách sản phẩm</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.product.create') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-alert-circle"></i>
                    </span>
                        <span class="hide-menu">Thêm mới sản phẩm</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Quản lý Khách hàng</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.order.customer') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-users"></i>
                    </span>
                        <span class="hide-menu">Danh sách khách hàng</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.order.index') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-users"></i>
                    </span>
                        <span class="hide-menu">Danh sách đơn hàng</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
