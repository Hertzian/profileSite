<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item {{ Request::is('admin/profile') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin/profile') }}">
        <i class="fas fa-user fa-tachometer-alt"></i>
        <span>Profile</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('admin/jobs') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin/jobs') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Jobs</span></a>
    </li>
    <li class="nav-item {{ Request::is('admin/work') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin/work') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Work</span></a>
    </li>
    <li class="nav-item {{ Request::is('admin/skills') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin/skills') }}">
        <i class="fas fa-folder-plus"></i>
        <span>Skills</span></a>
    </li>
</ul>