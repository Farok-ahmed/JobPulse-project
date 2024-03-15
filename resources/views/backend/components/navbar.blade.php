<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i data-feather="home"></i>
                        <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-apps">Apps</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="shopping-cart"></i>
                        <span data-key="t-ecommerce">Comapnies</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.companyList') }}" key="t-products">Company</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="message-square"></i>
                        <span data-key="t-chat">Jobs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.jobList') }}" data-key="t-inbox">Job List</a></li>
                        <li><a href="{{ route('admin.applications') }}" data-key="t-read-email">Job Applications</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Employee</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.userList') }}" data-key="t-inbox">Candidate</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('blogAdminLIst')}}" data-key="t-read-email">All Blog</a></li>
                        <li><a href="{{ route('blog.create') }}" data-key="t-inbox">Add New Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('contactFormList') }}">
                        <i data-feather="calendar"></i>
                        <span data-key="t-calendar">Contact Form </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-contacts">Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contactInformationCreate') }}" data-key="t-user-grid">Contact Page</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="trello"></i>
                        <span data-key="t-tasks">Plugins</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                    </ul>
                </li>
                <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                            class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a></li>
                <li>
                    <div>
                        <form method="POST" action="{{ route('logout') }}">@csrf
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();this.closest('form').submit();"><i
                                    class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                        </form>
                    </div>
                </li>

            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>
