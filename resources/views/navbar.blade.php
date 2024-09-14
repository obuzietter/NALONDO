<header class="top-nav">
    <div class="logo">Nalondo High School</div>
    <input id="menu-toggle" type="checkbox" />
    <label class="menu-button-container" for="menu-toggle">
        <div class="menu-button"></div>
    </label>
    <ul class="menu">
        <li>
            <a href="{{ route('home') }}" class="{{ Request::segment(1) == '' ? 'active' : '' }}">Home</a>
        </li>
        <li>
            <a href="{{ route('about') }}" class="{{ Request::segment(1) == 'about' ? 'active' : '' }}">About</a>
        </li>
        <li>
            <a href="{{ route('faculty') }}" class="{{ Request::segment(1) == 'faculty' ? 'active' : '' }}">Faculty</a>
        </li>
        <li>
            <a href="{{ route('studentLife') }}" class="{{ Request::segment(1) == 'studentLife' ? 'active' : '' }}">Student Life</a>
        </li>
        <li>
            <a href="{{ route('community') }}" class="{{ Request::segment(1) == 'community' ? 'active' : '' }}">Community</a>
        </li>
        <li>
            <a href="{{ route('achievements') }}" class="{{ Request::segment(1) == 'achievements' ? 'active' : '' }}">Achievements</a>
        </li>
        <li>
            <a href="{{ route('contact') }}" class="{{ Request::segment(1) == 'contact' ? 'active' : '' }}">Contact Us</a>
        </li>

    </ul>
</header>
