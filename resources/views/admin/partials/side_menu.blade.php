<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Категории</h4>
                </li>

                <li class="nav-item submenu">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('categories') }}">
                                <span class="sub-item">Все категории</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Товары</h4>
                </li>

                <li class="nav-item submenu">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('admin.products') }}">
                                <span class="sub-item">Все продукты</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
