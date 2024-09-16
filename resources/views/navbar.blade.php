<header class="top-nav">
    <div class="logo"> <img src="./images/logo/nalondo-logo.png" alt="" width="64"> Nalondo High School</div>
    <input id="menu-toggle" type="checkbox" />
    <label class="menu-button-container" for="menu-toggle">
        <div class="menu-button"></div>
    </label>
    <ul class="menu">
        <li>
            <a href="{{ route('home') }}" class="{{ Request::segment(1) == '' ? 'active' : '' }}" id="home-link">Home</a>
        </li>
        <li>
            <a href="{{ route('about') }}" class="{{ Request::segment(1) == 'about' ? 'active' : '' }}" id="about-link">About</a>
        </li>
        <li>
            <a href="{{ route('faculty') }}" class="{{ Request::segment(1) == 'faculty' ? 'active' : '' }}" id="faculty-link">Faculty</a>
        </li>
        <li>
            <a href="{{ route('studentLife') }}" class="{{ Request::segment(1) == 'studentLife' ? 'active' : '' }}" id="student-link">Student Life</a>
        </li>
        <li>
            <a href="{{ route('community') }}" class="{{ Request::segment(1) == 'community' ? 'active' : '' }}" id="community-link">Community</a>
        </li>
        <li>
            <a href="{{ route('achievements') }}" class="{{ Request::segment(1) == 'achievements' ? 'active' : '' }}" id="achievements-link">Achievements</a>
        </li>
        <li>
            <a href="{{ route('contact') }}" class="{{ Request::segment(1) == 'contact' ? 'active' : '' }}" id="contact-link">Contact Us</a>
        </li>

    </ul>
</header>
