<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Управление</h4>
                </li>

                <li class="nav-item submenu">
                    <a data-toggle="collapse" href="#categories" class="" aria-expanded="true">
                        <i class="fad fa-list-ul"></i>
                        <p>Категории</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="categories" style="">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('categories') }}">
                                    <span class="sub-item">Все категории</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('category.create') }}">
                                    <span class="sub-item">Создать категорию</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Товары</h4>
                </li>

                <li class="nav-item submenu">
                    <a data-toggle="collapse" href="#products" class="" aria-expanded="true">
                        <i class="fad fa-list-ul"></i>
                        <p>Продукты</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="products" style="">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.products') }}">
                                    <span class="sub-item">Все</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
