<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo">
                    @if ($profile && $profile->logo)
                        <img class="img" style="height: 35px" src="{{ asset('uploads/' . $profile->logo) }}"
                            alt="{{ $profile->nama }}">
                    @else
                        {{-- <span class="logo-sm">
                            {{ $profile->nama }}
                        </span> --}}
                        
                        <span class="logo-lg">
                            {{ $profile->nama }}
                        </span>
                    @endif
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="ri-search-line"></span>
                </div>
            </form>

            {{-- @include('layout.mega-menu') --}}
        </div>

        <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block ms-1 lign-items-center">
                <p class="text-white" id="date-day-time" style="margin-top: 25px"></p>
            </div>

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-search-line"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="mb-3 m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="ri-search-line"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" id="refresh-btn">
                    <i class="ri-restart-line"></i></i>
                </button>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="ri-apps-2-line"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if ($user && $user->avatar)
                        <img class="rounded-circle header-profile-user"
                            src="{{ asset('uploads/users/' . $user->avatar) }}" alt="{{ $user->name }}">
                    @endif
                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name ?? '' }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('users.profile')}}"><i
                            class="ri-user-line align-middle me-1"></i>
                        Profile</a>
                    {{-- <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My
                        Wallet</a> --}}
                    {{-- <a class="dropdown-item d-block" href="#"><span
                            class="badge bg-success float-end mt-1">11</span><i
                            class="ri-settings-2-line align-middle me-1"></i> Settings</a> --}}
                    {{-- <a class="dropdown-item" href="{{ route('lock.screen') }}"><i
                            class="ri-lock-unlock-line align-middle me-1"></i>
                        Lock screen</a> --}}
                    <div class="dropdown-divider"></div>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger align-middle me-1" id="logoutButton">
                            <i class="ri-logout-box-line"></i> Logout
                        </button>
                    </form>
                    {{-- <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                            class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a> --}}
                </div>
            </div>

        </div>
    </div>
</header>
@push('scripts')
    <script>
        document.getElementById('logoutButton').addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You will be logged out of the system.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, logout!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logoutForm').submit(); // Submit the form if confirmed
                }
            });
        });
    </script>
@endpush
