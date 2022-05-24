<div class="nav-header bg-success">
    <a href="index.html" class="brand-logo">
        {{-- <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
            <defs>
            </defs>
        </svg> --}}
        <div class="brand-title">
            <h2 class="text-white">Siakad</h2>
        </div>
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line" style="background: white"></span>
            <span class="line" style="background: white"></span>
            <span class="line" style="background: white"></span>
        </div>
    </div>
</div>

<div class="header border-bottom bg-success">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">

                    </div>
                </div>
                <ul class="navbar-nav header-right">

                    <li class="nav-item dropdown">
                        <a class="nav-link text-white" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <i class="fa fa-user me-2"></i> Andris Eka Adi Saputra
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border border-light" style="width: 200px">
                            <div class="d-flex justify-content-center mt-2">
                                <img class="rounded-circle border border-light" src="{{asset('assets/images/1.jpg')}}" alt="" style="width: 100px; height:100px"> <br>
                            </div>
                            <div class="d-flex justify-content-center mt-2">
                                <span class="fs-5 fw-bold">Andris Eka Adi Saputra</span>
                            </div>
                            <div class="d-flex justify-content-center">
                                <span>SISWA</span>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="app-profile.html" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span class="ms-2">Profile </span>
                                </a>
                                <a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ms-2">Logout </span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
