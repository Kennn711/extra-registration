<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        @if (auth()->user()->role == 'admin')
            <li class="sidebar-item active ">
                <a href="{{ route('admin.index') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        @endif

        @if (auth()->user()->role == 'leader')
            <li class="sidebar-item active ">
                <a href="{{ route('leader.index') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        @endif

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>Tables</span>
            </a>
            <ul class="submenu ">
                @if (auth()->user()->role == 'admin')
                    <li class="submenu-item">
                        <a href="{{ route('extra.index') }}" class="submenu-link">Extracullicular</a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{ route('extraleader.index') }}" class="submenu-link">Extra Leader</a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{ route('student.index') }}" class="submenu-link">Student</a>
                    </li>
                @endif
                @if (auth()->user()->role == 'leader')
                    <li class="submenu-item">
                        <a href="{{ route('member.index') }}" class="submenu-link">Members</a>
                    </li>
                @endif
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('logout') }}" class='sidebar-link'>
                <i class="bi bi-box-arrow-left"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>
