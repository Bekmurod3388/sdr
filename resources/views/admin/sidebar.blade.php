<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="{{route('admin.users.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Foydalanuvchi</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.students.index') ? 'active' : '' }}">
                    <a href="{{route('admin.students.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Talabalar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.rooms.index') ? 'active' : '' }}">
                    <a href="{{route('admin.rooms.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Xonalar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.floors.index') ? 'active' : '' }}">
                    <a href="{{route('admin.floors.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Qavatlar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.binos.index') ? 'active' : '' }}">
                    <a href="{{route('admin.binos.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Binolar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.facultets.index') ? 'active' : '' }}">
                    <a href="{{route('admin.facultets.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Fakultet</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.attendances.index') ? 'active' : '' }}">
                    <a href="{{route('admin.attendances.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Davomat</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


