<nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="index.html" class="active">Dashboard</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="portfolio.html">Our Trainers</a></li>
      <li><a href="team.html">Programs</a></li>
      <li><a href="blog.html">Fitness Blog</a></li>
      <li class="dropdown">
        <a href=""><span>Sports</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
          <li><a href="">Yoga</a></li>
          <li class="dropdown">
            <a href=""><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="">Yoga</a></li>
              <li><a href="">Weightlifting</a></li>
              <li><a href="">Running</a></li>
              <li><a href="">Cycling</a></li>
              <li><a href="">Martial Arts</a></li>
            </ul>
          </li>
          <li><a href="">Weightlifting</a></li>
          <li><a href="">Running</a></li>
          <li><a href="">Cycling</a></li>
        </ul>
      </li>
      <li><a href="contact.html">Contact</a></li>
      <!-- New Login and Register Links -->
      <li><a href="{{ route('login') }}">Log In</a></li>
      <li><a href="{{ route('register') }}">Register</a></li>
    </ul>

    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
