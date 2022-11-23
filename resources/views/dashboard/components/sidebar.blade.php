<aside>
    <div class="row aside-top ms-auto">
        <h1 class="col-9 col-md-12 text-center">Ilham Blog's</h1>
        <div class="close col-2" id="btn-close">
            <span class="fal fa-close"></span>
        </div>
    </div>
    <div class="sidebar">
        <a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <span class="fad fa-home"></span>
            <h3>Dashboard</h3>
        </a>
        <a href="/blog" class="{{ Request::is('blog*') ? 'active' : '' }}">
            <span class="fad fa-list"></span>
            <h3>Blog's</h3>
        </a>
        <a href="/category" class="{{ Request::is('category*') ? 'active' : '' }}">
            <span class="fad fa-code-branch"></span>
            <h3>Category</h3>
        </a>
        <a href="/profile" class="{{ Request::is('profile*') ? 'active' : '' }}">
            <span class="fal fa-cog"></span>
            <h3>Setting</h3>
        </a>
        <a href="{{ route('actionlogout') }}" onclick="return confirm('Apakah anda yakin ingin keluar?')">
            <span class="fad fa-sign-out-alt"></span>
            <h3>Logout</h3>
        </a>
    </div>
</aside>