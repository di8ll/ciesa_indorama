<!-- leftbar-tab-menu -->
<div class="left-sidebar">
    {{-- <div class="left-sidebar" style="background-image: url('template/img/City2.png'); background-size: cover;"> --}}
        <div class="orb-container" style="background-color: white;">
            <div class="sidebar-user-pro media border-end">
                <img src="{{ asset('template/img/indorama.png') }}" alt="Logo" class="img-fluid" style="max-width: 100%; height: auto; margin-left: 6px;">
            </div>


        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <div class="menu-body navbar-vertical">
                <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                        <li class="nav-item {{ Request::is('home') ? 'menuitem-active' : '' }}">
                            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                    style="margin-right: 10px; justify-content-center">
                                    <path
                                        d="M14.875 6.125H18.375V7H14.875V6.125ZM14.875 9.625H18.375V8.75H14.875V9.625ZM14.875 12.25H18.375V11.375H14.875V12.25ZM14.875 14.875H18.375V14H14.875V14.875ZM21 4.8125V18.375H0V4.8125C0 3.60675 0.980875 2.625 2.1875 2.625H18.8125C20.0191 2.625 21 3.60675 21 4.8125ZM20.125 4.8125C20.125 4.08887 19.5361 3.5 18.8125 3.5H2.1875C1.46387 3.5 0.875 4.08887 0.875 4.8125V17.5H20.125V4.8125ZM13.125 10.5C13.125 13.3954 10.7704 15.75 7.875 15.75C4.97962 15.75 2.625 13.3954 2.625 10.5C2.625 7.60462 4.97962 5.25 7.875 5.25C10.7704 5.25 13.125 7.60462 13.125 10.5ZM7.875 14.875C8.92325 14.875 9.8735 14.4891 10.6278 13.8722L7.4375 10.682V6.16963C5.2325 6.39275 3.5 8.23812 3.5 10.5C3.5 12.9124 5.46263 14.875 7.875 14.875ZM12.25 10.5C12.25 8.23725 10.5175 6.39275 8.3125 6.16963V10.3189L11.2472 13.2536C11.8641 12.4994 12.25 11.5491 12.25 10.5009V10.5Z"
                                        fill="{{ Request::is('home') ? 'white' : '#125D72' }}"></path>
                                </svg>
                                <span class="font-medium"
                                    style="color: {{ Request::is('home') ? 'white' : '#125D72' }}">Dashboard</span>
                            </a>
                        </li>

                            <li class="nav-item {{ Request::is('dokumen_baru*') ? 'menuitem-active' : '' }}">
                                <a class="nav-link {{ Request::is('dokumen_baru*') ? 'active' : '' }}"
                                    href="{{ route('dokumen_baru') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                        style="margin-right: 10px;">
                                        <path
                                            d="M18.8125 11.375H12.6875C11.4809 11.375 10.5 12.3559 10.5 13.5625V21H21V13.5625C21 12.3559 20.0191 11.375 18.8125 11.375ZM20.125 20.125H11.375V13.5625C11.375 12.8389 11.9639 12.25 12.6875 12.25H18.8125C19.5361 12.25 20.125 12.8389 20.125 13.5625V20.125ZM14 14H17.5V14.875H14V14ZM8.61963 5.5615L5.67788 8.45337C5.488 8.64325 5.23163 8.75 4.95862 8.75C4.68562 8.75 4.43013 8.64325 4.23675 8.45075L2.68537 6.95012L3.2935 6.321L4.85013 7.82687C4.90525 7.88112 5.01288 7.88112 5.06187 7.83213L8.00625 4.93762L8.61963 5.5615ZM8.61963 9.9365L5.67788 12.8284C5.488 13.0191 5.23163 13.125 4.95862 13.125C4.68562 13.125 4.43013 13.0191 4.23675 12.8258L2.68625 11.3251L3.29438 10.696L4.851 12.2019C4.93762 12.2894 4.98837 12.2824 5.06187 12.2071L8.00625 9.31262L8.61963 9.9365ZM13.125 7.875H9.625V7H13.125V7.875ZM5.061 16.5821L8.00537 13.6876L8.61875 14.3115L5.677 17.2034C5.48712 17.3941 5.23075 17.5 4.95775 17.5C4.68475 17.5 4.42925 17.3941 4.23588 17.2008L2.68537 15.6992L3.2935 15.0701L4.85013 16.5769C4.93675 16.6635 4.9875 16.6574 5.061 16.5821ZM9.1875 0.875H6.5625C5.83887 0.875 5.25 1.46387 5.25 2.1875V2.625H0.875V18.8125C0.875 19.5361 1.46387 20.125 2.1875 20.125H8.75V21H2.1875C0.98175 21 0 20.0191 0 18.8125V1.75H4.41875C4.62175 0.7525 5.5055 0 6.5625 0H9.1875C10.2445 0 11.1274 0.7525 11.3313 1.75H15.75V9.625H14.875V2.625H10.5V2.1875C10.5 1.46387 9.91113 0.875 9.1875 0.875Z"
                                            fill="{{ Request::is('dokumen_baru*') ? 'white' : '#125D72' }}"></path>
                                    </svg>
                                    <span class="font-medium"
                                        style="color: {{ Request::is('dokumen_baru*') ? 'white' : '#125D72' }}">
                                        Dokumen Pabean
                                    </span>
                                </a>
                            </li>


                        {{-- <li
                            class="nav-item {{ Request::is('company*') ? 'menuitem-active' : '' }}">
                            <a class="nav-link nav-link  {{ Request::is('company*') ? 'active' : '' }}"
                                href="#sidebarMasterdata" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="sidebarMasterdata">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                    style="margin-right: 10px;">
                                    <path
                                        d="M21 9.625V3.9375C21 2.73088 20.0182 1.75 18.8125 1.75H15.9311L14.1811 0H10.9375C9.73175 0 8.75 0.980875 8.75 2.1875V4.375H0.875V0H0V14.4375C0 15.6441 0.98175 16.625 2.1875 16.625H8.75V21H21V15.3125C21 14.1059 20.0182 13.125 18.8125 13.125H15.9311L14.1811 11.375H10.9375C9.73175 11.375 8.75 12.3559 8.75 13.5625V15.75H2.1875C1.46387 15.75 0.875 15.1611 0.875 14.4375V5.25H8.75V9.625H21ZM9.625 2.1875C9.625 1.46387 10.2139 0.875 10.9375 0.875H13.8189L15.5689 2.625H18.8125C19.5361 2.625 20.125 3.21388 20.125 3.9375V8.75H9.625V2.1875ZM9.625 13.5625C9.625 12.8389 10.2139 12.25 10.9375 12.25H13.8189L15.5689 14H18.8125C19.5361 14 20.125 14.5889 20.125 15.3125V20.125H9.625V13.5625Z"
                                        fill="{{ Request::is('company*') ? '#125D72' : '#125D72' }}">
                                    </path>
                                </svg>
                                <span class="font-medium" style="color: #125D72">Single Core System</span>
                            </a>

                            <div class="collapse" id="sidebarMasterdata">
                                <ul class="nav flex-column">
                                    @can('View Company')
                                        <li class="nav-item {{ Request::is('company*') ? 'menuitem-active' : '' }}">
                                            <a class="font- medium nav-link {{ Request::is('company*') ? 'active' : '' }}"
                                                href="{{ route('dokumen-baru.index') }}"
                                                style="color: {{ Request::is('company*') ? 'white' : '#125D72' }}">
                                                &nbsp;&nbsp;Dokumen Pabean
                                            </a>
                                        </li>
                                    @endcan --}}

                                    <!--end nav-item-->
                                </ul>
                                <!--end nav-->
                            </div>
                            <!--end sidebarElements-->
                        </li>


                    </ul>
                    <!--end navbar-nav--->
                </div>
                <!--end sidebarCollapse-->
            </div>
        </div>
    </div>
</div>
<!-- end left-sidenav-->
