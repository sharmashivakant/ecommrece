<div class="dashbord-switcher">
    <a href="{{ route('user.dashboard') }}" class="{{ request()->routeIs('user.dashboard') ? 'active' : '' }}"><i class="flaticon-dashboard"></i> Dashboard</a>
    <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}"><i class="flaticon-user"></i> My Profile</a>
    <a href="{{ route('order.index') }}" class="{{ request()->routeIs('order.index') ? 'active' : '' }}"><i class="flaticon-shopping-bag"></i> My Order</a>
    <a href="{{ route('account.logout') }}"><i class="flaticon-logout"></i> Logout</a>
</div>

