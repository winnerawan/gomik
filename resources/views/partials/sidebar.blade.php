<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{ url('/home') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>

            </li>
                        <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">Navigasi</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                        data-placement="right" data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Kategori</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ url('categories') }}" data-i18n="nav.page_layouts.1_column"></a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="{{ url('categories') }}" data-i18n="nav.page_layouts.fixed_navbar">Data Kategori</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('categories/create') }}" data-i18n="nav.page_layouts.fixed_navigation">Tambah Kategori</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Genre</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ url('genres') }}" data-i18n="nav.page_layouts.1_column"></a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="{{ url('genres') }}" data-i18n="nav.page_layouts.fixed_navbar">Data Genre</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('genres/create') }}" data-i18n="nav.page_layouts.fixed_navigation">Tambah Genre</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.navbars.main">Komik</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ url('comics') }}" data-i18n="nav.navbars.nav_light">Data Komik</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('comics/create') }}" data-i18n="nav.navbars.nav_dark">Tambah Komik</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Chapter</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ url('chapters') }}" data-i18n="nav.vertical_nav.vertical_navigation_types.main">Data Chapter</a>

                    </li>
                    <li><a class="menu-item" href="{{ url('chapters/create') }}" data-i18n="nav.vertical_nav.vertical_nav_fixed">Tambah Chapter</a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</div>