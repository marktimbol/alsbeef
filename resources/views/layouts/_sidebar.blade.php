<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li>
            <h1 class="site-title">
                <a href="{{ route('home') }}">
                    <img src="/images/logo.png" alt="Al's Beef Dubai" title="Al's Beef Dubai" />
                </a>
            </h1>
        </li>
        <li>
            <a href="{{ route('menus.index') }}">
                <i class="fa fa-cutlery fa-3x"></i>
                <span>Menu</span>
            </a>
        </li>
        <li>
            <a href="{{ route('stores.index') }}">
                <i class="fa fa-map-marker fa-3x"></i>
                <span>Stores</span>
            </a>
        </li>
        <li>
            <a href="{{ route('about') }}">
                <i class="fa fa-info fa-3x"></i>
                <span>About</span>
            </a>
        </li>
        <li>
            <a href="{{ route('contact') }}">
                <i class="fa fa-phone fa-3x"></i>
                <span>Contact</span>
            </a>
        </li>
    </ul>
</div>