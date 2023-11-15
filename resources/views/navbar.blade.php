<header class="top-nav">
    <div class="logo">Nalondo High School</div>
    <input id="menu-toggle" type="checkbox" />
    <label class="menu-button-container" for="menu-toggle">
        <div class="menu-button"></div>
    </label>
    <ul class="menu">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('faculty') }}">Faculty</a></li>
        <li><a href="{{ route('studentLife') }}">Student Life</a></li>
        <li><a href="{{ route('community') }}">Community</a></li>
        <!-- <li><a href="{{ route('achievements') }}">Achievements</a></li> -->
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>
</header>
