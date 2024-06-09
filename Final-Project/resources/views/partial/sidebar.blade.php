<ul class="menu active">
    <li class="sidebar-title">Menu</li>    
    <li
        class="sidebar-item active ">
        <a href="/dashboard" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a> 
    </li>
    <li
        class="sidebar-item ">
        <a href="/pemasok" class='sidebar-link'>
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>Pemasok</span>
        </a>
    </li>
    <li
        class="sidebar-item">
        <a href="/profiles" class='sidebar-link'>
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
            <span>Profile</span>
        </a>
    </li>
    <li
        class="sidebar-item">
        <a href="/barangs" class='sidebar-link'>
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span>Barang</span>
        </a>
    </li>
    <li
        class="sidebar-item">
        <a href="/kategori" class='sidebar-link'>
            <i class="fa fa-database" aria-hidden="true"></i>
            <span>Kategori</span>
        </a>
    </li
    class="sidebar-item">
     <form method="POST" action="{{ route('logout') }}" class="sidebar-link">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form> 
</ul>