<header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-1 pt-1 top-icon theme-toggler">
            <span class="fas fa-adjust active"></span>
        </div>
        <div class="col-10 text-center">
            <a class="blog-header-logo h2" href="/">Ilham Blog's</a>
        </div>
        <div class="col-1 top-icon d-flex justify-content-end align-items-center">
            <span class="fal fa-search search" onclick="search()"></span>
        </div>
    </div>
    <form action="/" class="mt-3" id="search">
        @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
            <span class="input-group-text">
                <button type="submit" class="btn">
                    <i class="fal fa-search"></i>
                </button>
            </span>
        </div>
    </form>
</header>