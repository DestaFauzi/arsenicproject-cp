
    <h1>Dashboard Admin</h1>
    <p>Selamat datang di dashboard admin.</p>
    <nav>
        <ul>
            <li><a href="{{ route('admin.users.index') }}">User</a></li>
            <li><a href="{{ route('admin.projects.index') }}">Project</a></li>
            <li><a href="{{ route('admin.news.index') }}">News</a></li>
        </ul>
    </nav>
    <a href="{{ url('/logout') }}">Logout</a>