<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('read') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Mahasiswa</p>
    </a>
    <li class="treeview">
        <a href="{{ route('read') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
            <i class="nav-icon fas fa-home"></i>
            <p>Mahasiswa</p>
        </a>
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-circle-o"></i> Dashboard 1</a></li>
            <li><a href="{{ route('dashboard2') }}"><i class="fa fa-circle-o"></i> Dashboard 2</a></li>
    
    </li>
    

</li>
