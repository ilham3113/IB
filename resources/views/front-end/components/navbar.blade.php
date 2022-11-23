<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">

        @foreach ($navcategories as $navcategory)
            <a href="/?category={{ $navcategory->slug }}" class="p-2 link">{{ $navcategory->name }} ({{ $navcategory->articel->count() }})</a>
        @endforeach
    </nav>
  </div>