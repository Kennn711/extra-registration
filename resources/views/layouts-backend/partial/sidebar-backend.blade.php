<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item active ">
            <a href="index.html" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>Tables</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item">
                    <a href="{{ route('extra.index') }}" class="submenu-link">Extracullicular</a>
                </li>
                <li class="submenu-item">
                    <a href="{{ route('extraleader.index') }}" class="submenu-link">Extra Leader</a>
                </li>
                <li class="submenu-item">
                    <a href="{{ route('student.index') }}" class="submenu-link">Student</a>
                </li>
                <li class="submenu-item">
                    <a href="{{ route('member.index') }}" class="submenu-link">Members</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
