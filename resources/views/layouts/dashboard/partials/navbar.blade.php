<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom" id="navbar-custom" style="background-color: #125D72;">
        <ul class="list-unstyled topbar-nav float-end mb-0">

            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('template/assets/images/users/user-1.png') }}"
                        class="rounded me-2 thumb-sm" alt="profile-user"
                        style="border: 1px solid rgb(196, 196, 196); border-radius: 4px;">
                <div>


                            <span class="text-white d-none d-md-block fw-semibold font-12">
                                {{ auth()->user()->username }}
                                <i class="mdi mdi-chevron-down"></i></span>

                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item"><i
                            class="ti ti-user font-16 me-1 align-text-bottom"></i>
                        Profile</a>
                    {{-- <a class="dropdown-item" href="#"><i
                            class="ti ti-settings font-16 me-1 align-text-bottom"></i>
                        Settings</a> --}}
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ti ti-power font-16 me-1 align-text-bottom"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <!--end topbar-nav-->

        <style>
            /* Add your CSS styles here */
            .fa-angle-left {
                display: inline;
            }

            .fa-angle-right {
                display: none;
            }
        </style>

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile" id="togglemenu">
                    <img class="fas fa-angle-left" src="{{ asset('template/img/sidebar-collapse.svg') }}"
                        height="21" style="margin-right: 10px;">
                    <img class="fas fa-angle-right" src="{{ asset('template/img/sidebar-closed.svg') }}" height="21"
                        style="margin-right: 10px;">

                </button>
            </li>
        </ul>

        <script>
            $(document).ready(function() {
                // Add click event handler to the button
                $('#togglemenu').on('click', function() {
                    // Toggle the visibility of the left and right icons
                    $('.fa-angle-left').toggle();
                    $('.fa-angle-right').toggle();
                });
            });
        </script>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->
