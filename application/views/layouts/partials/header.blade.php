{{-- Main Header --}}
<header class="main-header">

    {{-- Logo --}}
    <a href="index2.html" class="logo"><b>Activisme</b>BE</a>

    {{-- Header Navbar --}}
    <nav class="navbar navbar-static-top" role="navigation">
        {{-- Sidebar toggle button--}}
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        {{-- Navbar Right Menu --}}
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                {{-- User Account Menu --}}
                <li class="user user-menu">
                    {{-- Menu Toggle Button --}}
                    <a href="#">
                        {{-- The user image in the navbar --}}
                        <img src="{{ base_url("assets/img/user2-160x160.jpg") }}" class="user-image" alt="User Image"/>
                        {{-- hidden-xs hides the username on small devices so only the image appears. --}}
                        <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                </li>
                <li>
                    <a href="{{ base_url('users/logout') }}"><span class="fa fa-sign-out"></span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
