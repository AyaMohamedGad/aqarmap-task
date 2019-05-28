<div id="sidebar" class="sidebar responsive ace-save-state">
    <ul class="nav nav-list">
        <li class="{{ Request::is('admin*') ? 'active open' : '' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users fa-fw"></i>
                <span class="menu-text">Setting</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ Request::is('admin/admins*') ? 'active' : '' }}">
                    <a href="{{ route('AdminIndex') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <i class="fa fa-eye"></i> Admins
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ Request::is('admin/roles*') ? 'active' : '' }}">
                    <a href="{{ route('RoleIndex') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <i class="fa fa-eye"></i> Roles
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ Request::is('admin/language*') ? 'active' : '' }}">
                    <a href="{{ route('LanguageIndex') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <i class="fa fa-eye"></i> Languages
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul>
</div>
