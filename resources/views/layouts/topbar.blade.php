<nav class="navbar navbar-light bg-light sticky-top shadow-sm">
  <div class="container-fluid">
    {{-- Tombol untuk memicu/membuka sidebar --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainSidebar" aria-controls="mainSidebar">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    {{-- Nama Brand tetap terlihat di tengah atau di kiri --}}
    <a class="navbar-brand mx-auto" href="{{ url('/') }}">
        SkillShareHub
    </a>
  </div>
</nav>