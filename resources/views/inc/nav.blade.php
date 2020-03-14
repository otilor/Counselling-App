<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="/admin" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="badge badge-pill badge-success float-right">{{ count($applications) }}</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/pending" class="waves-effect">
                        <i class="mdi mdi-calendar-remove-outline"></i>
                    
                        <span>Pending</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/create" class="waves-effect">
                        <i class="mdi mdi-account-multiple-outline "></i>
                        <span>Create Admin Account</span>
                    </a>
                </li>
                <li>
                <form method="POST" action="{{ route('logout') }}" name="admin_form">
                    <!--Using JavaScript instead of default submit button to submit-->
                    <a href ="javascript:document.admin_form.submit();" class="waves-effect">
                    
                        {{ csrf_field() }}
                        
                            <i class="mdi mdi-logout"></i>
                                <span>Logout</span>

                    </a>
                </form>
                </li>

                

            </ul>

           
        </div>
        <!-- Sidebar -->
    </div>
</div>