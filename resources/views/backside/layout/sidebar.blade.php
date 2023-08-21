<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="sidebar-item selected">
                    <a class="sidebar-link" href="" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <span class="hide-menu">Dashboard Admin</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <li class="nav-small-cap"><span class="hide-menu">Member Information</span></li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.manage-member.index-view') }}" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        <span class="hide-menu">Manage Member</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.manage-member.withdrawal-request-view') }}" aria-expanded="false">
                        <i class="fas fa-dollar-sign"></i>
                        <span class="hide-menu">Withdrawal Request</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
